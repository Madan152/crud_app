<!DOCTYPE html>
<html lang="en">
<head>
  <title>Read User From users table from the 'crud_in_ci' database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
<div class="container pt-4">    <!-- pt-4 is used for padding on the top 5*4=20px-->
     <div class="row">
           <div class="col-md-12">
                <?php   //For showing success message after inserted or updated data using session variable
                    $success=$this->session->userdata("success");//
                    if($success != '')
                    {

                   
                ?>
                        <div class="alert alert-success">
                                <?php 
                                    echo $success;
                                ?>
                        </div>
                <?php
                    }
                   
                ?>
               

                 <?php  //For showing failure message after inserted or updated data using session variable
                    $failure=$this->session->userdata("failure");
                    if($failure != '')
                    {                   
                 ?>
                    <div class="alert alert-failure">
                                <?php 
                                    echo $failure;
                    
                                ?>
                    
                    </div>
                    <?php 
                    }                    
                     ?>
                 
                        
                
           </div> 
     </div>
    <div class="row">
        <div class="col-6">
            <h2>Read All Users</h2> 
        </div>
        <div class="col-6 text-right">
           <a href="<?php echo base_url().'index.php/User/create' ?>"  class="btn btn-primary">
           Create User
        </a>
        </div>

    </div>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>User ID</th>
		<th>User Name</th>
		<th>User Email</th>				
		<th width="60">Edit</th>
        <th width="100">Delete</th>
      </tr>
    </thead>
    <?php  if(!empty($users)) //$users variable contains all records in it .
            { 
                foreach($users as $user) //here '$user' is the type of object of '$users'
                {       
    ?>
    <tr>
        <td><?php echo $user['user_id'] ?></td> <!-- here 'user_id' is the field name of 'users' table-->
        <td><?php echo $user['name'] ?></td>    <!-- here 'name' is the field name of 'users' table-->
        <td><?php echo $user['email'] ?></td>   <!-- here 'email' is the field name of 'users' table-->

        <td>
            <a href="<?php echo base_url().'index.php/User/edit/'.$user['user_id'];  ?>" class="btn btn-primary">Edit</a>
        </td>

        <td>
            <a href="<?php echo base_url().'index.php/User/delete/'.$user['user_id'];  ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php  
                }
            }
            else
                {
    ?>
                    <tr>
                        <td colspan="5">Records are not found</td>
                    </tr>



            <?php 
                }
            ?>        
  


		
	</table>
</div>

</body>
</html>	
		
		
		
		