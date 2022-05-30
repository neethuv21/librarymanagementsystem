<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: violet;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 35px 46px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: violet;
}
</style>
<body style="margin:0px; background-image: url(image1.jpg);" >
	<div style="width:100%;height:100px;background-color: violet;border: 1px solid;">
		<ul>
  <li><a href="\addbook">Add Book</a></li>
  <li><a href="\viewbook">View Book Details</a></li>
  <li><a href="\viewissue">View Issue Book</a></li>
    <li><a href="\registerstudent">Register Student</a></li>
  <li ><a  href="\viewstudent">View Student</a></li>
</ul>
		
	</div>
	<div style="margin-top: 50px; margin-left: 230px;">

	<center>
    <form action="/studentinsert" method="post">
    	@csrf
	<table>
		<tr>
			<td style="color:white;"><h1>Roll No</h1></td>
			<td><input type="number" name="rollno"></td>
		</tr>
		<tr>
			<td style="color:white;"><h1>Name</h1></td>
			<td>

        <input type="text" name="name">
    </td>
		</tr>
		<tr>
		<td style="color:white;"><h1>Course</h1></td>
		<td >
		<select name="course" id="course">
    <option value="Dca">Dca</option>
     <option value="pgdca">pgdca</option>
    
   </select>
   </td>
	</tr>
	
	<tr>
		<td></td>
		<td style="color:white;"><input type="submit" name="submit"></td>
	</tr>
	</table>
</form>
</center>
</div>
</body>
</html>