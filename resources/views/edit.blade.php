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
<form action="/editaction/{{$value->id}}" method="post" style="margin-top:100px;">
	@csrf
	<table>
		<tr>
		<td>Book No</td>	
		<td><input type="number" name="bookno" value="{{$value->bookno}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$value->name}}"></td>
		</tr>
		<tr>
			<td>Auther</td>
			<td><input type="text" name="auther" value="{{$value->auther}}"></td>
		</tr>
		<tr>
			<td>Edition</td>
			<td><input type="text" name="edition" value="{{$value->edition}}"></td>
		</tr>
		<tr>

			<td>Publisher</td>
			<td><input type="text" name="publisher" value="{{$value->publisher}}"></td>
			
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