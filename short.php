<!DOCTYPE html>
<?php
include 'connection.php';
$con = OpenConn();
if(isset($_POST['submit']))
{
$url=$_POST['url'];
$sql="insert into url(`url`) values('$url')";
mysqli_query($con,$sql);
$res=mysqli_query($con,$sql);
}
?>

<html>
	<head>
		<style>
		* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
</style>
		
</head>

	<body>
<div class="center"  style="width: 600px; min-width: 150px; top: 4px; z-index: 500 !important; padding-right: 150px;
    position: relative;">

  <form action="#" method="post">
  
  <br><br>
  <!--div class="row">
    <div class="col-25">
      
    </div>
	<h3>Copy shortened url</h3>
    <div>
	
      <input align="center" type="text" id="url" name="url" placeholder="url" required >
    </div>
  </div-->
  <br><br>
 
												<table style="width:100%">
  <tr>
    <th>url name</th>
  <th>Copy shortened url<th>
	<th>status</th>
	

  </tr>
												<?php
												 
												$sql="select * from url";
												$res=mysqli_query($con,$sql);
												$i=1;
												while($row=mysqli_fetch_array($res))
												{
													if($row['status']==1)
													{
														$status='shortlink';
													}
													else
													{
														$status='sorry';
													}
												?>													
													<tr>

														
														<td><?php echo $row['name'];?></td>
														<td><?php echo $row['shortlink'];?></td>
														<td><?php echo $row['status'];?></td>
														
														
														
														
														
														
												 </tr>
												<?php $i++;}?>
												
											</table>
										</div>
  
  
 
  </form>
</div>
</div>
</body>
</html>