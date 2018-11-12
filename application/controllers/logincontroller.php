<?php

class LoginController extends Controller{

   //public function add($num1 = 0,$num2 = 0,$num3 = 0){
		//$sum = $num1+$num2+$num3;
	   //$this->set('numbers',$sum);
   //}
   protected $userObject;

   public function index(){

   }

   public function do_login() {
	   // handles login
		 $this->userObject = new Users();
		 if($this->userObject->checkUser($_POST['email'],$_POST['password'])){
			 $userInfo = $this->userObject->getUserFromEmail($_POST['email']);
			 $_SESSION['uID'] = $userInfo['uID'];

       if(strlen($_SESSION['redirect']) > 0){
			   $view = $_SESSION['redirect'];
			   unset($_SESSION['redirect']);
			   header('Location: '.BASE_URL.$view);
		   } else {
           header('Location: '.BASE_URL);

		   }
       } else {
           $this->set('error','Wrong password / email combination');
       }
   }

    public function logout(){
      unset($_SESSION["uID"]);
      echo "You have successfully logged out";
      session_write_close();
      echo "You have successfully logged out";
      header('Location: ' . BASE_URL);

      if (!isset($_SESSION['uID'])){
        echo "You have successfully logged out";
        echo "<script type='text/javascript'>alert('You have successfully logged out!');</script>";
        echo "<script>alert('You have successfully logged out!');</script>";
      }

}

}
?>
