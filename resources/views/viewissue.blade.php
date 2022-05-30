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
      <li><a href="\registerstudent">Register Student</a></li>
  <li ><a  href="\viewstudent">View Student</a></li>
   <li ><a  href="\viewissue">View issue Book</a></li>
</ul>
		
	</div>
	<div style="margin-top:170px;">

	<center>
		<h1>View issuebook Details</h1>
	<form>
		<table border="10">
			<tr>
				<th>id</th>
				<th>Student Name</th>
				<th>Book No</th>
				<th>Name</th>
				<th>Auther</th>
				<th>Edition</th>
				<th>publisher</th>
				<th>Issue Date</th>
				<th>Return Date</th>
					<th>Status</th>
				
							
				</tr>
				   @foreach($result as $value)                                                                                                                                                         

				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->sname}}</td>
					<td>{{$value->bookno}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->auther}}</td>
					<td>{{$value->edition}}</td>
					<td>{{$value->publisher}}</td>
					<td>{{$value->issuedate}}</td>
					<td>{{$value->returndate}}</td>
					<td>{{$value->status}}</td>
					
					
					
										
					
					 <td><a href="/reissue/{{$value->id}}">re-issue</a></td>
					<td><a href="/return/{{$value->id}}">return</a></td> 
					
				</tr>
				@endforeach




				
		</table>
	</form>
	</center>
</div>
</body>


</html>