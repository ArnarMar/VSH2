<?php
   $title = "Sign up";
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
                     <div class="form-group">
                        <label>Act</label>
                        <input type="text" class="form-control" placeholder="Crazy Dancing Performance" required name="act">
                     </div>
                     <div class="form-group">
                        <label>Time</label>
                        <input type="text" class="form-control" placeholder="7:24pm" required name="time">
                     </div>
                     <button type="submit" name ="save" class="btn btn-primary">Register</button>
                     <?php
                        if(isset($_POST['save']))
                        {
                        				$con=mysqli_connect("tsuts.tskoli.is","1505982309","arnarmar1","1505982309_vsh");
                        					// Check connection
                        					if (mysqli_connect_errno())
                        					{
                        					echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        					}
                        
                        $sql = "INSERT INTO events (name, act, time, password)
                        VALUES ('".$_POST["name"]."', '".$_POST["act"]."','".$_POST["time"]."', '".$_POST["password"]."')";
                        
                        $result = mysqli_query($con,$sql);
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