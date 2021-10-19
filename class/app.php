<?php

namespace App;

use App\{DBConnect, Validator, Calculation};

class App
{

	public $root_dir;
	public $root_path;
	public $base_url;
	public $uri;
	public $param;

	public static $delivery_days = [
		1 => 'Daily',
		2 => 'Every 2 days',
		3 => 'Every 3 days'
	];	

	public function __construct($config = []){
		extract($config);
		$this->root_dir = $root_dir;
		$this->root_path = $root_path;
		$this->base_url = ((isset($_SERVER['HTTPS'])) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/'. $this->root_dir;
		$this->uri = ltrim( $_SERVER['REQUEST_URI'] , $this->root_dir);
		$this->param = explode( '/' , $this->uri );

		$this->load_dependencies();
	}

	private function load_dependencies(){
		require_once $this->root_path . 'class'. DS . 'database.php';
		require_once $this->root_path . 'class'. DS . 'Validator.php';
		require_once $this->root_path . 'class'. DS . 'calculation.php';
	}

	public function run(){
		switch($this->param[0]){
			case 'step1' :	
			case 'step2' :
			case 'step3' :
			case 'step4' :
				//$this->get_template($this->param[0]);

				include $this->root_path . 'include'. DS . 'header.inc.php';
				include $this->root_path . ((file_exists($this->root_path . $this->param[0] . '.php')) ? $this->param[0] . '.php' : 'include'. DS . 'error.inc.php');
				include $this->root_path . 'include'. DS . 'footer.inc.php';

				break;
			case 'dashboard' :

				$this->userAuth();
								
				//$connection = new DBConnect();
				//App::dd($connection->get_user(['user_id' => 1s]));

				$days_of_subscription = App::getData('subscription_days');
				$days_of_delivery = App::getData('delivery_days');
				
				$mealsdays = Calculation::getDays(date('Y-m-d'), $days_of_subscription, $days_of_delivery);
				//App::dd($mealsdays); exit();

				$this->get_template('dashboard', compact('mealsdays'));
				break;
			case 'signout' :
				$this->userSignout();
				break;
			case 'validation' :
				$this->validation();
				break;
			default :
				$this->get_template('home');
				break;
		}
	}

	public function get_template($filePath, $variables = [], $print = true){
		$output = NULL;

		// Extract the variables to a local namespace
		extract($variables);

		// Start output buffering
		ob_start();

		// Include the template file
		include $this->root_path . 'include'. DS . 'header.inc.php';
		/*
		if(file_exists($this->root_path . $filePath . '.php')){
			include $this->root_path . $filePath . '.php';
		}else{
			include $this->root_path . 'include'. DS . 'error.inc.php';
		}
		*/
		include $this->root_path . ((file_exists($this->root_path . $filePath . '.php')) ? $filePath . '.php' : 'include'. DS . 'error.inc.php');
		include $this->root_path . 'include'. DS . 'footer.inc.php';

		// End buffering and return its contents
		$output = ob_get_contents();
		ob_end_clean();
		ob_flush();
		
		if ($print) {
			print $output;
		}
		return $output;
	}

	public function userAuth(){
		if($_SESSION['loggedin'] !== true) {
			header('Location: ' . $this->base_url);
			exit();
		}
	}

	public function userSignout(){
		session_destroy();
		// Redirect to the login page:
		$this->redirect();
		exit();
	}

	private function validation(){
		//App::dd($_POST);
		
		$validator = new Validator();

		if(!empty($_POST)){
			extract($_POST);

			// you can store the values to the db during the production version. 
			// im here storing values to the session for DEMO version.

			switch($step){
				case 'calculation' :
					$this->storeData($validator->validateCalculation($form));
					$this->redirect('step2');
				break;
				case 'meals' :
					$this->storeData(['meals' => $validator->validateMeals($form)]);
					$this->redirect('step3');
				break;
				case 'subscribe' :
					$this->storeData($validator->validateSubscribe($form));
					$this->redirect('step4');
				break;
				case 'checkout' :
					$_SESSION['loggedin'] = true;
					$this->storeData($validator->validateCheckout($form));
					$this->redirect('dashboard');
				break;
			}
		}
	}

	public function storeData($data){
		$session_data = ($_SESSION['session_data']) 
			? array_merge(unserialize($_SESSION['session_data']), $data)
			: $data;

		$_SESSION['session_data'] = serialize($session_data);
    }

    public static function viewData($unserialize = false){
    	return ($unserialize) ? unserialize($_SESSION['session_data']) : $_SESSION['session_data'];
    }

    public static function getData($key){
    	$session_data = App::viewData(true);
    	return $session_data[$key];
    }

	public function redirect($url = ''){
		header('Location: ' . $this->base_url . $url);
       	exit();
	}

	# function to view the dump file
	public static function dd($data){
		echo '<pre>';
		print_r($data);
		//var_dump($data);
		//die();
	}

}