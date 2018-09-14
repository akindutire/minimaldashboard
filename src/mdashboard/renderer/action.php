<?php

	namespace src\mdashboard\renderer;

	use \src\mdashboard\config\Config as cfg;
	use \zil\factory\View;
	use \zil\factory\Session;
	use \zil\factory\Redirect;
	
	use src\mdashboard\service\dashboardService;
	
	class action
	{

		public function __construct()
		{	
			
			$cfg = new cfg;

			$this->doc_root = $_SERVER['DOCUMENT_ROOT'].'/'.$cfg->getAppPath();
		}

		public function index()
		{
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl(),  ];
			new Redirect($cfg->getAppInit());	
		
        }
        
        public function login(){

            $cfg = new cfg;

			if($_SERVER['REQUEST_METHOD'] == 'POST'){

				if( !empty($_REQUEST['username']) && !empty($_REQUEST['password']) ){

					$u = htmlentities(strip_tags($_REQUEST['username']));
					$p = htmlentities(strip_tags($_REQUEST['password']));

					if ( (new dashboardService())->auth($u, $p) ){

						if(Session::buzzSession('error'))
							Session::deleteSession('error');

						new Redirect($cfg->getAppInit().'dashboard');

					} else{ 

						Session::buildSession([ ['error', 'Incorrect Login Details'] ]);
						new Redirect($cfg->getAppInit());
					}


				}else{

					Session::buildSession([ ['error', 'Empty field(s)'] ]);
					new Redirect($cfg->getAppInit());
				}
			}
			
		}

		public function adduser(){

			$cfg = new cfg;
			
			if($_SERVER['REQUEST_METHOD'] == 'POST'){

				if( !empty($_REQUEST['fname']) && !empty($_REQUEST['sex']) && !empty($_REQUEST['address']) && !empty($_REQUEST['phone']) && !empty($_REQUEST['email']) && !empty($_REQUEST['birthday'])){

					$f = htmlentities(strip_tags($_REQUEST['fname']));
					$s = htmlentities(strip_tags($_REQUEST['sex']));
					$a = htmlentities(strip_tags($_REQUEST['address']));
					$p = htmlentities(strip_tags($_REQUEST['phone']));
					$e = htmlentities(strip_tags($_REQUEST['email']));
					$b = htmlentities(strip_tags($_REQUEST['birthday']));
					$abt = htmlentities(strip_tags($_REQUEST['aboutme']));

					if ( (new dashboardService())->createUser($f, $s, $a, $p, $e, $b, $abt) ){

						
						Session::buildSession([ ['error', 'Successfully added a user'] ]);

						new Redirect($cfg->getAppInit().'dashboard/add');

					} else{ 

						Session::buildSession([ ['error', 'Error: Couldn\'t create user'] ]);
						new Redirect($cfg->getAppInit().'dashboard/add');
					}


				}else{

					Session::buildSession([ ['error', 'Empty field(s)'] ]);
					new Redirect($cfg->getAppInit().'dashboard/add');
				}

			}
		}

		public function updateuser($param){

			$cfg = new cfg;
			
			if($_SERVER['REQUEST_METHOD'] == 'POST'){

				if( !empty($_REQUEST['fname']) && !empty($_REQUEST['address']) && !empty($_REQUEST['phone']) && !empty($_REQUEST['birthday'])){

					$f = htmlentities(strip_tags($_REQUEST['fname']));
					$a = htmlentities(strip_tags($_REQUEST['address']));
					$p = htmlentities(strip_tags($_REQUEST['phone']));
					$b = htmlentities(strip_tags($_REQUEST['birthday']));
					$abt = htmlentities(strip_tags($_REQUEST['aboutme']));

					if ( (new dashboardService())->updateUser($f, $a, $p, $b, $abt, $param[0] ) ){
						echo "User info updated";
					} else{ 
						echo "User info couldn't  be updated";
					}

				}else{
					echo 'Empty field(s)';
				}

			}
		}

		public function deleteuser($param){
			$cfg = new cfg;

			$email = strip_tags($param[0]);
			if( (new dashboardService())->deleteUser($email) )
				echo "User Deleted";
			else	
				echo "User not Deleted";

		}

	}

?>