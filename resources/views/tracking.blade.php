<html>
<body bgcolor="black">
<div id="pic" style="position:absolute;top:0%;left:9%;width:80%;height:128%;background-image:url('{{ URL::to('/') }}/icecave.jpg');">
<ul style="position:absolute;left:30%;top:30%">
@foreach ($rows as $row)
@if($row->status==1)
  <li>{{$row->form}}  (due by {{$row->deadline}}) => Signed </li>
@else
  <li>{{$row->form}}  (due by {{$row->deadline}}) => Not signed<br> </li>
  @endif
  @endforeach
</ul>

</div>
</body>
</html>