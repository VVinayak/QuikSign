<?php
use Intervention\Image\Image as Img;
use Illuminate\Support\Facades\Input;
use App\Http\ControllersValidator;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\Request;


/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


    return view('cover');
});
Route::get('/faculty_reg',function(){
return View::make('profreg');
});

Route::post('/faculty_login/login',function(){
$email=Input::get('email');
$password=Input::get('password');
 if (Auth::attempt(['email' => $email, 'password' => $password])) {
        $id=Auth::user()->id;
		  $pending=DB::select('select * from sff where fid=? and status=?',[$id,0]);
		  $please=[];
		  foreach($pending as $X)
		  array_push($please,new Carbon\Carbon($X->deadline));
		  
$now = Carbon\Carbon::now();
/*$difference = ($created->diff($now)->days < 1)
    ? 'today'
    : $created->diffForHumans($now);*/
        return View::make('prof_dashboard')->with('pending',$pending)->with('now',$now)->with('please',$please)->with('i',0);
		
			
		
            
			}
			else
			{
			return View::make('cover');
			}
        });
		
Route::post('/student_login/login',function(){
$email=Input::get('email');
$password=Input::get('password');
 if (Auth::attempt(['email' => $email, 'password' => $password])) {
               $id=Auth::user()->id;
			 
        return View::make('stud_dashboard')->with('id',$id);
			
		
            
			}
			else
			{
			return View::make('cover');
			}
        });

Route::get('/student_reg',function(){
return View::make('studreg');
});
Route::get('/faculty_login',function(){
return View::make('proflogin');
});
Route::get('/student_login',function(){
return View::make('studlogin');
});		

Route::get('/faculty',function(){
dd(Session::all());

});
Route::post('/faculty_reg/register',function(){
$file = array('image' => Input::file('file'));
$name=Input::get('name');
$password=Input::get('password');
$email=Input::get('email');
$max=1;
if(DB::table('users')->max('id'))
  $max=DB::table('users')->max('id')+1;
	  DB::table('users')->insert([
    [ 'id'=>$max,'name'=>$name,'email'=>$email,'password'=>Hash::make($password),'type'=>'faculty']]);
    
 $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
  
  }
  else
  {
if (Input::file('file')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
	  $id=DB::table('users')->max('id');
	  
      $fileName = 'fac'.'_'.$id.'_sign.'.$extension; // renameing image
	  
      Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
	 
      return redirect('/');
	  }
	  }
});



Route::post('/student_reg/register',function(){

$name=Input::get('name');
$password=Input::get('password');
$email=Input::get('email');
$max=1;
if(DB::table('users')->max('id'))
  $max=DB::table('users')->max('id')+1;
	  DB::table('users')->insert([
    [ 'id'=>$max,'name'=>$name,'email'=>$email,'password'=>Hash::make($password),'type'=>'student']]);
	return redirect('/');
});

Route::post('/student/{id}/fillup',function($id){
$form=Input::get('form');
$row=DB::select('select * from Forms where name=?',[$form]);
return View::make('fillup')->with('row',$row)->with('id',$id);
});

Route::get('/student/{id}/pending',function($id){

$rows=DB::select('select * from sff where sid=?',[$id]);
return View::make('tracking')->with('rows',$rows);
});



Route::get('/faculty/update/{id}',function($id){
DB::table('sff')
            ->where('id', $id)
            ->update(array('status' => 1));
$link="http://localhost:8000/".$id;
Mail::send('mail', ['link' => $link], function ($m) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('adityabalaji02@gmail.com', 'Aditya')->subject('New applicant');
        });/*
		$msgToSend='Your form has been signed and sent';
Mail::send('mail', ['link' => $msgToSend], function ($m) {
            $m->from('hello@app.com', 'Your Application');

            $m->to('authority522@gmail.com', 'Aditya')->subject('Form sent');
        });
*/
		return View::make('done2');
});


Route::post('/student/{id}/store',function($id){
$details=Input::all();
$faculty=DB::select('select * from users where type=? and name=?',['faculty',$details['faculty']]);
if($faculty)
{
$fid=$faculty[0]->id;
DB::table('sff')->insert([
['sid'=>$id,
'fid'=>$fid,
'status'=>0,
'deadline'=>$details['deadline'],
'form'=>'bonafide',
'field01'=>$details['field01'],
'field02'=>$details['field02'],
'field03'=>$details['field03'],
'field04'=>$details['field04'],
'field05'=>$details['field05'],
'field06'=>$details['field06'],
'field07'=>$details['field07'],
'field08'=>$details['field08'],
'field09'=>$details['field09'],
'field10'=>$details['field10']
]
]);

return View::make('done');
}
else
echo 'Errors exist in your details';
});
Route::get('/{id}',function($id){
$details=DB::select('select * from sff where id=?',[$id]);
return View::make('mail2')->with('details',$details[0]);
});




//OLD
/*
Do not touch
*/

Route::get('/welcome/student/{id}',function($id){
return View::make('welcome')->with('id', $id);
});
Route::get('/welcome/student/{id}/formlist', function ($id) {
    return View::make('formlist')->with('id',$id);
});
Route::get('/welcome/student/{id}/formlist/{form}',function($id,$form){
$pending=DB::select('select * from sff where sid=? and status=?',[$id,0]);
$data=array('id'=>$id,'form'=>$form,'pending'=>$pending);
return View::make('form')->with('data',$data);

});
Route::get('/welcome/student/{id}/formlist/{form}/upload',function($id,$form){
$faculty=DB::select('select * from users where type=?',['faculty']);
return View::make('details')->with('faculty',$faculty);
});
Route::get('/welcome/student/{id}/formlist/{form}/upload/{f}/{deadline}',function($id,$form,$f,$deadline){
$data=array('id'=>$id,'form'=>$form,'f'=>$f,'deadline'=>$deadline);
return View::make('upload_form')->with('data',$data);
});
Route::post('/welcome/student/{id}/formlist/{form}/upload/{f}/{deadline}/upload_file',function($id,$form,$f,$deadline){
$file = array('image' => Input::file('file'));
  // setting up rules
  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
   return View::make('welcome');
  }
  else {
    // checking file is valid.
    if (Input::file('file')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('file')->getClientOriginalExtension(); // getting image extension
	  $max=1;
	  if(DB::table('sff')->max('id'))
	  $max=DB::table('sff')->max('id')+1;
      $fileName = $max.'_'.$id.'_'.$f.'_'.$form.'_'.'.'.$extension; // renameing image
	  DB::table('sff')->insert([
    [ 'sid' => $id,'fid'=>$f,'form'=>$form,'deadline'=>$deadline,'filename'=>$fileName]
    
]);
      Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
	 
      return View::make('done');
	  
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      
    }
  }
});
Route::get('/welcome/faculty/{id}',function($id){
$pending=DB::select('select * from sff where fid=? and status=?',[$id,0]);
return View::make('notif')->with('pending', $pending);
});
Route::post('/welcome/faculty/{id}/send/{form}',function($id,$form){
$data2=$_POST['base64data'];  

 $destinationPath = 'uploads'; // upload path

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
	

});
