<?php
   $title = "Login";
   include ("header.php");


   ?>
<body>
   <div class="container">
      <div class="row">
         <div class="page-header">
            <h1><?=$title?></h1>
         </div>
         <div class="panel panel-default">
            <div class="panel-body">
               <div class="col-xs-12">
                  <form method="POST">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="John Doe" required name="name">
                     </div>
						<div class="form-group">
							<label>Password</label>
                        <input type="password" class="form-control" placeholder="fatcat3" required name="password">
                     </div>
                     <button type="submit" name ="save" class="btn btn-primary">Login</button>
                     <?php
                        if(isset($_POST['save']))
                        {


                        				$conn=mysqli_connect("tsuts.tskoli.is","1505982309","arnarmar1","1505982309_vsh");
                        					if (mysqli_connect_errno())
                        					{
                        					echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        					}

 //sql query to fetch information of registerd user and finds user match.
 
$user=$_POST['name'];
 $pass=$_POST['password'];
 $query = mysqli_query($conn, "SELECT * FROM events WHERE password='$pass' AND name='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){

                    session_start();
	 $_SESSION['sess_user']=$user;
	 header("Location:index.php");
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }

					


?>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<?php include ("footer.php") ?>