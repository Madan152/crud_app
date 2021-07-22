<?php
    class User extends CI_Controller
    {
            
        function index()
        {
            $this->load->model('User_model');
            $users=$this->User_model->all();//from this all data of 'all function' will store
                                            //$users variable.
            $data=array();  //here $data array variable initialisation for storing all data
            $data['users']=$users;//

            $this->load->view('list',$data);//it will load 'list view ' with all records
            //because '$data' array variable stored all records in it.

        }

        function create()
        {
            //first of all we have to call our model  here i.e 'User_model' kept inside 'models' folder
            $this->load->model('User_model');

        //here we are going to be validate name and email.
        $this->form_validation->set_rules('name','Name','required');       
        $this->form_validation->set_rules('email','Email','required|valid_email');   

            if($this->form_validation->run()== false)
            {
                $this->load->view('create');
            }
            else
            {
                //save data in database 'crud_in_ci' and table name is 'users'
                $formArray=array();
                $formArray['name']=$this->input->post('name');
                $formArray['email']=$this->input->post('email');
                $formArray['created_at']=date('Y-m-d');

                $this->User_model->create($formArray); //here we are calling create function of
                //User_model and passing '$formArray' array variable which contain forms data.

                $this->session->set_flashdata('success','Record Added Successfully');//here we are
                //addind session variable and set_flashdata() and assing here ' session index' 
                //and 'index value'

                redirect(base_url().'index.php/User/index');

            }           
        }

        function edit($userId)//$userId is a parameter of edit() function which receives 'user_id'
        {
            $this->load->model('User_model');
           // $this->Use_model->getUser($userId);//calling 'getUser()' function of User_model for
                                               //fetching one row of user.And passed '$userId' variable 

            $user=$this->User_model->getUser($userId); //here one record stored in '$user' variable.
                                          
            $data=array();
            $data['user']=$user;//here 'user' is array index of '$data' which can be used in 'edit view' 


             
            //here we are going to be validate name and email.
             $this->form_validation->set_rules('name','Name','required');       
             $this->form_validation->set_rules('email','Email','required|valid_email');  


             if($this->form_validation->run()== false)
             {
                $this->load->view('edit',$data);
             }
             else
             {
                 //Update Records in database 'crud_in_ci' and table name is 'users'
                 $formArray=array();
                 $formArray['name']=$this->input->post('name');
                 $formArray['email']=$this->input->post('email');
                 
 
                 $this->User_model->updateUser($userId,$formArray); //here we are calling create function of
                 //User_model and passing '$formArray' array variable which contain forms data.
 
                 $this->session->set_flashdata('success','Record Updated Successfully');//here we are
                 //addind session variable and set_flashdata() and assing here ' session index' 
                 //and 'index value'
 
                 redirect(base_url().'index.php/User/index');
             }             
        }

        function delete($userId)
        {
            $this->load->model('User_model');
            $users=$this->User_model->getUser($userId);

            //check whether data found in database or not
            if(empty($users))
            {
                $this->session->set_flashdata('failure','Record Not Found');//here we are
                 //addind session variable and set_flashdata() and assing here ' session index' 
                 //and 'index value' 
                 redirect(base_url().'index.php/User/index');
            }
            $this->User_model->deleteUser($userId);
            $this->session->set_flashdata('success','Record is deleted successfully');//here we are
                 //addind session variable and set_flashdata() and assing here ' session index' 
                 //and 'index value' 
            redirect(base_url().'index.php/User/index');

        }


    }
?>