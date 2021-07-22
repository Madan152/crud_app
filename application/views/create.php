<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD APPLICATION----CREATE USER HERE----</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container pt-4"> <!-- pt-4 is used for padding on the top 5*4=20px-->
			<h1>CREATE USER</h1>
			<marquee>............*Create User Form......</marquee>
     
		<form name="createUser" action="<?php echo base_url().'index.php/User/create';?>" method="POST"  enctype="multipart/form-data">  
			<div class="form-group">	
				<table class="table table-bodered">
				<tr>
					<th>User Name:</th>
					<td>
                        <input type="text" class="form-control" placeholder="Enter User Name" name="name" id ="name" value="<?php echo set_value('name');?>">
                         <?php echo form_error('name'); ?>   <!-- show error if not field-->
                    </td>
				</tr>
				<tr>
					<th>User Email:</th>
					<td>
                        <input type="email" class="form-control" placeholder="Enter User Email Id" name="email" id ="email" value="<?php echo set_value('email');?>">
                        <?php echo form_error('email'); ?>        <!-- show error if not field-->
                    </td>
				</tr>	
						
						<tr>
							<td><button class="btn btn-primary">Create</td>
							<td>
                                <a href="<?php echo base_url().'index.php/User/index';?>" class="btn btn-danger">Cancel</a>
                            </td>
							
							
						</tr>
				</table>	
			
				</div>	
			
			
		</form>

	</div>
</body>
</html>


