<?php

	namespace src\mdashboard\renderer;

	use \src\mdashboard\config\Config as cfg;
	use \zil\factory\View;
	use \zil\factory\Session;
	use \zil\factory\Redirect;
	use \zil\factory\Authentication;
	
	
	class home
	{

		public function __construct()
		{	
			
			$cfg = new cfg;

			$this->doc_root = $_SERVER['DOCUMENT_ROOT'].'/'.$cfg->getAppPath();
		}

		public function index()
		{
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl()  ];
			View::render('home/auth_login.php',$data);	
		
		}

		public function register()
		{
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl()  ];
			new Redirect($cfg->getRootPath());
		
		}

		public function dashboard()
		{
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl()  ];
			View::render('dashboard/index.php',$data);	
		
		}

		public function logout(){

			$cfg = new cfg;
			
			if(Session::deleteSession('op'))
				new Redirect($cfg->getAppInit());
		
		}
	}

?>
