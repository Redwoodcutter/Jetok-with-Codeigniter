<?php

class Auth extends CI_Controller{
    
    public function login(){
              $this->form_validation->set_rules('username','Username','required');
              $this->form_validation->set_rules('password','Password','required|min_length[5]');
              if($this->form_validation->run()==TRUE){
                 
                  $username=$_POST['username'];
                  $password=md5($_POST['password']);
                  
                    //kontrol et user'i
                    $this->db->select('*');
                    $this->db->from('users');
                    $this->db->where(array('username' => $username , 'password' => $password));
                    $query=$this->db->get();
                    
                    $user=$query->row();
                        //cikiş
                    if($user->email){
                        $this->session->set_flashdata("Giriş Başarili","devam et");
                        //oturum degişkenleri
                        $_SESSION['user_logged']=TRUE;
                        $_SESSION['username']=$user->username;
                        
                        redirect("user/profile","refresh");
                    }else
                        $this->session->set_flashdata("hata","böyle bir şahsiyet bulunamadı");
                    redirect("auth/login","refresh");
              }
        
        $this->load->view('login');
    }
    
      public function register(){
          
          
          if(isset($_POST['register'])){
              $this->form_validation->set_rules('username','Username','required');
              $this->form_validation->set_rules('email','Email','required');
              $this->form_validation->set_rules('password','Password','required|min_length[5]');
              $this->form_validation->set_rules('password','Confrim Password','required|min_length[5]|matches[password]');
              
              //kayit işlemi dogruysa
              if($this->form_validation->run()==TRUE){
                 
                  //database' kayit ekleme
                  $data=array(
                      'username'=>$_POST['username'],
                      'email'=>$_POST['email'],
                      'password'=>md5($_POST['password']),
                      'gender'=>$_POST['gender'],
                      'created_date'=> date('y-m-d')
                  );
                  
                  $this->db->insert('users',$data);
                  $this->session->set_flashdata("succes","Kayit Başarili");
                  redirect("auth/register","refresh");
                  
              }
          }

          $this->load->view('register.php');
          
      }
}
