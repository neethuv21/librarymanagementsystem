<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style="background-color:blueviolet;">
	<div style="margin-top:200px;">
	<center>
	@foreach($result as $value)
	<form action="/reissueaction/{{$value->id}}" method="post">
		@csrf

New Date:<input type="date" name="newdate"><br><br>
<input type="submit" name="submit" value="submit">

</form>
</center>
</div>
@endforeach
</body>

</html>