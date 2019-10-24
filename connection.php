<?php

//error_reporting(E_ALL);

	class dbo {

		private $host = "localhost";
		private $user = "root";
		private $pswd = "root";
		private $dbnm = "notes_db";

		private $link;

		function __construct() {
			$this->link = mysqli_connect($this->host, $this->user, $this->pswd, $this->dbnm) or die( mysqli_connect_error() );
		}

		function dml($q) {
			mysqli_query($this->link, $q) or die( mysqli_error($this->link) );
			return mysqli_insert_id($this->link); 
		}

		function get($q) {
			$res = mysqli_query($this->link, $q) or die( mysqli_error($this->link) ); 
			return $res;
		}
	}

	$db = new dbo();

	
?>
