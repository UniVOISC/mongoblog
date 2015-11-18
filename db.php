<?php namespace Blog\DB;

class DB
{
	private $db;
	public $limit = 5;

	public function __construct($config){
		$this->connect($config);
	}

	private function connect($config){
		try{
			if ( !class_exists('Mongo')){
	            echo ("The MongoDB PECL extension has not been installed or enabled");
	            return false;
	        }
			$connection=  new \MongoClient(); //$config['connection_string'],array('username'=>$config['username'],'password'=>$config['password'])
	    	return $this->db = $connection->selectDB($config['dbname']);
		}catch(Exception $e) {
			return false;
		}
	}

	
}
