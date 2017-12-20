




<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" rel="stylesheet" type="text/css"> 
<script>
function download(name)
{
window.location.href="http://spider.nitt.edu/~adityabalaji/"+name+".docx";
}
function redir(name)
{
window.location.href=name;
}
</script>
<style type="text/css">

   .sun-flower-button {
  position: relative;
  vertical-align: top;
  width: 115%;
  height: 60px;
  padding: 0;
  font-size: 22px;
  color: white;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.25);
  background: #f1c40f;
  border: 0;
  border-bottom: 2px solid #e2b607;
  cursor: pointer;
  -webkit-box-shadow: inset 0 -2px #e2b607;
  box-shadow: inset 0 -2px #e2b607;
}
.sun-flower-button:active {
  top: 1px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

body{
  font-family:arial,sans-serif;
  font-size:100%;
  margin:3em;
  
  background-image:url('{{ URL::to('/') }}/bg.jpg');
  color:#fff;
}
h2,p{
  font-size:100%;
  font-weight:normal;
}
ul,li{
  list-style:none;
}
ul{
  overflow:hidden;
  padding:3em;
}
ul li a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
  -moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  -webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}
ul li{
  margin:1em;
  float:left;
}
ul li h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
ul li p{
  font-family:"Reenie Beanie",arial,sans-serif;
  font-size:180%;
}
ul li a{
  -webkit-transform: rotate(-6deg);
  -o-transform: rotate(-6deg);
  -moz-transform:rotate(-6deg);
}
ul li:nth-child(even) a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
ul li:nth-child(3n) a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}
ul li:nth-child(5n) a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
ul li a:hover,ul li a:focus{
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}
ol{text-align:center;}
ol li{display:inline;padding-right:1em;}
ol li a{color:#fff;}
</style>


  
  <ul>
      @foreach ($data['pending'] as $row)
	  <li>
        <a href="#">
         <h2>Pending</h2>
         <p>{{$row->form}}  from {{$row->fid}}</p>
        </a>
      </li>
	  @endforeach
	
	  
    
	
  </ul>
  <button class="sun-flower-button" style="position:absolute;top:90%;left:40%;width:20%;" onclick="download('{{$data['form']}}')">Download</button>
  <button class="sun-flower-button" style="position:absolute;top:10%;left:40%;width:20%;" onclick="redir('/welcome/student/0/formlist/bonafide/upload')">Upload</button>

