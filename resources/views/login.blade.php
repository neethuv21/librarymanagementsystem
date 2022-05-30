<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
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
	<h1>Admin Login</h1>
<form action="/loginaction" method="post" >
	@csrf
	
<table>

<tr>
	<td>email</td>
	<td><input type="text" name="email"></td>
</tr>
<tr>
	<td>password</td>
	<td><input type="text" name="password"></td>
</tr>

<tr>
	<td></td>
	<td><input type="submit" name="submit" value="login"></td>
</tr>

@if(session('error'))
<p style="color: red;">{{session('error')}}</p>
@endif
</table>	
</form>	
</center>
</div>
</body>
</html>
</body>
</html>