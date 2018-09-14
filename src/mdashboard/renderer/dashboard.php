<?php

	namespace src\mdashboard\renderer;

	use \src\mdashboard\config\Config as cfg;
	use \zil\factory\View;
	use \zil\factory\Session;
	use \zil\factory\Redirect;
	
	use src\mdashboard\service\dashboardService;

	class dashboard
	{

		public function __construct()
		{	
			
			$cfg = new cfg;

			$this->doc_root = $_SERVER['DOCUMENT_ROOT'].'/'.$cfg->getAppPath();

			if(strlen(Session::getSession('App_Cert')) !== 64){
				new Redirect($cfg->getAppInit());
			}
			
		}

		public function index()
		{
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl() , 'user'=>(new dashboardService())->getUser(10), 'allcount'=>(new dashboardService())->getTotalUserCount()];
			View::render('dashboard/index.php',$data);	
		
		}

		public function add()
		{

			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl() ];
			View::render('dashboard/addUser.php',$data);	
		
		}
		
		public function view()
		{
			
			$cfg = new cfg;

			$data = [$cfg->getAppPath(), $cfg->getAppUrl(), 'user'=>(new dashboardService())->getUser() ];
			View::render('dashboard/viewUser.php',$data);	
			
		}

		public function update($param)
		{
			
			$cfg = new cfg;

			$key = $param[0];

			$data = [$cfg->getAppPath(), $cfg->getAppUrl(), 'user'=>(new dashboardService())->getUser(1, $key), 'key'=>$key ];
			View::render('dashboard/updateUser.php',$data);	
			
		}


	}

?>