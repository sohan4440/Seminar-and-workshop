<?php

	class database{

		private $hostname ="localhost";
		private $username ="root";
		private $password ="";
		private $databasename ="seminar";
	
		protected $databasequery;
		protected $error = "Connection Not Successful";
		public $usertype="";

		public function __construct(){
			return $this->connectdatabase();
		}
		public function connectdatabase(){

			$this->databasequery = mysqli_connect($this->hostname,$this->username,$this->password,$this->databasename);		
		}
	
	}

	class registration extends database{

		public function reg($insertquery){

			Parent::connectdatabase();

			$inserts = $this->databasequery->query($insertquery) or die ($this->databasequery->error);
			
			if ($inserts) {
				include "index.php";
			}
		}

	}


	class login extends database{

		public function signIn($selectquery){
			
			Parent::connectdatabase();

			$selects = $this->databasequery->query($selectquery) or die ($this->databasequery->error);
			$row=$selects->fetch_assoc(); 
			
			if ($row['email']==$_POST['email'] && $row['password']==$_POST['password']) {
				$usertype=$row['Usertype'];
				
				if ($usertype=="Admin") {
					$_SESSION['email'] = $row['email'];
					header("Location:AdminHome.php") ;
				}else{
					//include "home.php";
					header("Location:home.php") ;
				}

			}else{
				
				?>

				<script type="text/javascript">alert("Enter The Right Username / Password")</script>
				
				<?php
				
				include "index.php";
			}

		}

	}

?>