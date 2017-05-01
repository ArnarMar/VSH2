<?php
	$title = "Contact us";
	include ("header.php");
?>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header"><h1><?=$title?></h1></div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="col-xs-12">
							<form method="POST">
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" placeholder="John Doe" required name="name">
								</div>
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" placeholder="example@example.com" required name="email">
								</div>
								<div class="form-group">
									<label>Message</label>
									<textarea class="form-control" required name="message"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</body>
<?php include ("footer.php") ?>