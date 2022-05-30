<html>
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
  background-color: blueviolet;
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
  background-color: blueviolet;
}
</style>
<body style="background-color: violet;margin: 0px;">
	<div style="width:100%;height:100px;background-color: blueviolet;border: 3px solid;">
		<ul>
  <li><a href="\addbook">Add Book</a></li>
  <li><a href="\viewbook">View Book Details</a></li>
  <li><a href="\viewissue">View Issue Book</a></li>
    <li><a href="\registerstudent">Register Student</a></li>
  <li ><a  href="\viewstudent">View Student</a></li>
</ul>
		
	</div>
	<div style="margin-top:170px;">

	<center>
		<h1>View student Details</h1>
	<form>
		<table border="10">
			<tr>
				<th>id</th>
				<th>Roll No</th>
				<th>Name</th>
				<th>Course</th>
				
							
				</tr>
				   @foreach($result as $value)                                                                                                                                                         

				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->rollno}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->course}}</td>
					
					
					
										
					
					<td><a href="/sedit/{{$value->id}}">Update</a></td>
					<td><a href="/sdelete/{{$value->id}}">Delete</a></td>
					
				</tr>
				@endforeach




				
		</table>
	</form>
	</center>
</div>
</body>


</html>