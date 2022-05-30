<!doctype html>
<html>
<head>
	<body>
	
      <center>
      	<h3 style="color: white;" >Registration Form</h3>

		<form action="\insert" method="post" >
			@csrf

			<table cellpadding="10">
				<tr>
					<td> Name</td>
					<td><input type="text" name="name" ></td>
					</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" ></td>
					</tr>
				
					<td>Password</td>
					<td><input type="text" name="password" ></td>
				</tr>
								
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
				</tr>
				</table>
				</form>
			</center>
		</body>

		</html>