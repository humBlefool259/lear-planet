<?php
	/* File : ajax.php
	 * Author : Piya
	*/
	class AJAX {
		
		private $database = NULL;
		private $_query = NULL;
		private $_fields = array();
		public  $_index = NULL;
		const DB_HOST = "localhost";
		const DB_USER = "mylearni_plan";
		const DB_PASSWORD = "123456";
		const DB_NAME = "mylearni_planet";
		
		
		public function __construct(){
			$this->db_connect();					// Initiate Database connection
			$this->process_data();
		}
		
		/*
		 *  Connect to database
		*/
		private function db_connect(){
			$this->database = mysql_connect(self::DB_HOST,self::DB_USER,self::DB_PASSWORD);
			if($this->database){
				$db =  mysql_select_db(self::DB_NAME,$this->database);
			} else {
				echo mysql_error();die;
			}
		}
		
		private function process_data(){
			$this->_index = ($_REQUEST['index'])?$_REQUEST['index']:NULL;
			$id = ($_REQUEST['id'])?$_REQUEST['id']:NULL;
			switch($this->_index){
				case 'student':
					$this->_query = "SELECT * FROM child_registration";
					$this->_fields = array('id','child_name');
					break;
				case 'course':
					$this->_query = "SELECT child_registration.*,add_service.new_service FROM child_registration left join add_service on add_service.s_id=child_registration.id WHERE s_id='$id'";
					$this->_fields = array('id','course1','course2','course3','course4','course5','course6','course7','course8','course9','course10','new_service');
					break;
				/* case 'city':
					$this->_query = "SELECT * FROM cities WHERE stateID=$id";
					$this->_fields = array('cityID','cityName');
					break; */
				default:
					break;
			}
			$this->show_result();
		}
		
		public function show_result(){
			echo '<option value="">--Please Select '.$this->_index.'--</option>';
			$query = mysql_query($this->_query);
			if($query === FALSE) {
				die(mysql_error()); // TODO: better error handling
			}
			while($result = mysql_fetch_array($query)){
				$entity_id = $result[$this->_fields[0]];
				$enity_name = $result[$this->_fields[1]];
				$enity_name1 = $result[$this->_fields[2]];
				$enity_name2 = $result[$this->_fields[3]];
				$enity_name3 = $result[$this->_fields[4]];
				$enity_name4 = $result[$this->_fields[5]];
				$enity_name5 = $result[$this->_fields[6]];
				$enity_name6 = $result[$this->_fields[7]];
				$enity_name7 = $result[$this->_fields[8]];
				$enity_name8 = $result[$this->_fields[9]];
				$enity_name9 = $result[$this->_fields[10]];
				$enity_name10 = $result[$this->_fields[11]];
				$resultstring='';
				if($enity_name != null && $enity_name!='' ){
					$resultstring=$resultstring."<option id='$entity_id' value='$entity_id'>$enity_name</option>";
				}
				if($enity_name1 != null && $enity_name1!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name1'>$enity_name1</option>";
				}
				if($enity_name2 != null && $enity_name2!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name2'>$enity_name2</option>";
				}
				if($enity_name3 != null && $enity_name3!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name3'>$enity_name3</option>";
				}
				if($enity_name4 != null && $enity_name4!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name4'>$enity_name4</option>";
				}
				if($enity_name5 != null && $enity_name5!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name5'>$enity_name5</option>";
				}
				if($enity_name6 != null && $enity_name6!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name6'>$enity_name6</option>";
				}
				if($enity_name7 != null && $enity_name7!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name7'>$enity_name7</option>";
				}
				if($enity_name8 != null && $enity_name8!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name8'>$enity_name8</option>";
				}
				if($enity_name9 != null && $enity_name9!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name9'>$enity_name9</option>";
				}
				if($enity_name10 != null && $enity_name10!='' ){
					$resultstring = $resultstring."<option id='$entity_id' value='$enity_name10'>$enity_name10</option>";
				}
				echo $resultstring;
					
				/*"<option id='$entity_id' value='$enity_name'>$enity_name</option>
				<option id='$entity_id' value='$enity_name1'>$enity_name1</option>
				<option id='$entity_id' value='$enity_name2'>$enity_name2</option>
				<option id='$entity_id' value='$enity_name3'>$enity_name3</option>
				<option id='$entity_id' value='$enity_name4'>$enity_name4</option>
				<option id='$entity_id' value='$enity_name5'>$enity_name5</option>";*/
				
			}
		}
	}
	
	$obj = new AJAX;
	
?>