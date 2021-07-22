<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD APPLICATION----EDIT/UPDATE USER HERE----</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container pt-4"> <!-- pt-4 is used for padding on the top 5*4=20px-->
			<h1>EDIT/UPDATE USER</h1>
			<marquee>............*Edit User Form......</marquee>
     
		<form name="editUser" action="<?php echo base_url()."index.php/User/edit/".$user['user_id'];?>" method="POST"  enctype="multipart/form-data">  
			<div class="form-group">                                       <!--$user is index or object -->	
				<table class="table table-bodered">
				<tr>
					<th>User Name:</th>
					<td>
                        <input type="text" class="form-control" name="name" id ="name" value="<?php echo set_value('name',$user['name']);?>">
                         
                    </td>
				</tr>
				<tr>
					<th>User Email:</th>
					<td>
                        <input type="email" class="form-control" name="email" id ="email" value="<?php echo set_value('email',$user['email']);?>">
                       
                    </td>
				</tr>	
						
						<tr>
							<td><button class="btn btn-primary">Edit/Update</td>
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


