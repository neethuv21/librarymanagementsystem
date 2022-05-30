<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color:blueviolet;">
<center>	
@foreach($result as $value)
<form action="/seditaction/{{$value->id}}" method="post" style="margin-top:100px;">
	@csrf
	<table>
		<tr>
		<td>Roll No</td>	
		<td><input type="number" name="rollno" value="{{$value->rollno}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$value->name}}"></td>
		</tr>
		<tr>
			<td>Course</td>
			<td><input type="text" name="course" value="{{$value->course}}"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="update"></td>
		</tr>

</form>
@endforeach
</table>
</center>
</body>
</html>