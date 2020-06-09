<?php
	function connect()
	{
		$dbserver = "localhost";
		$username = "root";
		$password = "";
		$dbname = "icspro";
		
		$link = mysqli_connect($dbserver, $username, $password, $dbname);
		//or die("Could not connect");
		return $link;
	}
	
	function setData($sql)
	{
		$link = connect();
		if(mysqli_query($link,$sql)){
			return true;
		}
		else{
			//$err = $link->error;
			return false;
			// false;
			
		}
	}

	function getData($sql)
	{
		$link = connect();
		$result = mysqli_query($link,$sql);
		$rowData = array();
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$rowData[]= $row;
		}
		return $rowData;
		
	}

	//Get categories listed in the jobs table
	function getCategories(){
		$sql = "SELECT jobCategory FROM jobs GROUP BY jobCategory ASC";
		$link = connect();
		$result = mysqli_query($link,$sql);
		$rowData = array();
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$rowData[]= $row;
		}
		return $rowData;
	}

	//Get the locations listed in the jobs table
	function getLocations(){
		$sql = "SELECT jobLocation FROM jobs GROUP BY jobLocation ASC";
		$link = connect();
		$result = mysqli_query($link,$sql);
		$rowData = array();
		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
			$rowData[]= $row;
		}
		return $rowData;
	}
?>






