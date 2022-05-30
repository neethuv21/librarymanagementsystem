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
		
	<form action="/issuebookinsert" method="post">
		@csrf
		<table>			
				<tr>
					<td>Student Name</td>
			
				 <td>
				
				   @foreach($student as $value)                                                                                                                                  


							<select name="sname" id="name">
       <option value="{{$value->name}}">{{$value->name}}</option>
      
 
        </select>
         @endforeach
        </td>

      </tr>

               
     <tr>
      @foreach($book as $value)
      
							 
     <tr> <td>Book No:</td>
    <td > {{$value->bookno}}</td>
    <input type="hidden" name="bookno" value="{{$value->bookno}}">
  </tr>
					 <tr>
      <td>Name:</td>
  <td name="name"> {{$value->name}}</td>
  <input type="hidden" name="name" value="{{$value->name}}">
</tr>
					 
					 <tr>
       <td>Auther</td>
     <td name="auther">{{$value->auther}}</td>
     <input type="hidden" name="auther" value="{{$value->auther}}">
   </tr>
					<tr>
       <td >Edition</td>
     <td name="edition">{{$value->edition}}</td>
     <input type="hidden" name="edition" value="{{$value->edition}}">
   </tr>
					 <tr>
    <td>Publisher</td>
     <td name="Publisher">{{$value->publisher}}</td>
     <input type="hidden" name="publisher" value="{{$value->publisher}}"> 
   </tr>
				 
				
				@endforeach
				<tr>
					<td>Issue Date</td>
					<td><input type="Date" name="issuedate"></td>
				</tr>
				<tr>
					<td>Return Date</td>
					<td><input type="Date" name="returndate"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"></td>
				</tr>
				
		</table>  
		
	
	</form>
	</center>
</div>
</body>


</html>