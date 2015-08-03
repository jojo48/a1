<!DOCTYPE html>
<html>
<head>
	<meta http-equip="Content-Type" content="text/html;
	charset=utf-8"/>
	<title>OOP in PHP</title>
	<?php include("class_lib.php");?>
</head>
<body>
	<?php
	/*
		$stefan = new person();
		$jimmy = new person;
		
		$stefan->set_name("Stefan Mischook");
		$jimmy->set_name("Nick Waddles");
		
		echo "Stefan's full name:".$stefan->get_name()."</br>";
		echo "Nick's full name:".$jimmy->get_name()."</br>";
		
		$name=$stefan->name; //example access to property (is not prefer to access). But prefer access to methode
		echo $name;
	
		
		$stefan=new person("Stefan Mischook");
		//echo "Stefan's full name:".$stefan->get_name();
		
		//echo "Tell me private staff: ".$stefan->pinn_number; //*****error cannot access private property
		
		//$james=new employee("Johnie Finger"); //test extends class
		//echo $james->get_name();
		
		employee::$foo="foobar"; //static access
		echo employee::$foo;
	*/	
	
/*** PDO ***/	
	$hostname='localhost'; /*** mysql hostname ***/
	$username='root'; /*** mysql username ***/
	$password='1234'; /*** mysql password ***/
	
	try{
		$dbh=new PDO("mysql:host=$hostname;dbname=trainingdb",$username,$password);
		/*** echo message saying we have connected ***/
		echo "<font color='blue'>Connected to Database</font></br>";
		echo "<hr>";
		}

	catch(PDOException $e)
	{
	echo $e->getMessage();
	}
		
	/*** Insert database ***/
/*	$count=$dbh->exec("INSERT INTO animals(animal_type,animal_name) VALUES('kiwi','troy')"); 
	 echo 'Count: '.$count.'</br>';
	 
	 if($count>0){
		echo "Insert complete!!!";
		}else{
		echo "Can not insert???";
		}
	 
	$sdh=null; //*** close database connection ***
	
	catch(PDOException $e){
	echo $e->getMessage();
	}
	*/
	
	/*** The SQL SELECT statement ***/
	$sql="SELECT *FROM animals";
	foreach($dbh->query($sql) as $row)
	{
	print $row['animal_type'].'-'.$row['animal_name'].'</br>';
	}
	
	/*** The SQL UPDATE statement ***/
	$count=$dbh->exec("UPDATE animals SET animal_name='bruce' WHERE animal_name='troy'");
	echo "count:$count<hr></br>"; //check command is execute complete
	
	/*
	PDO::FETCH_ASSOC	//return value => index_field
	PDO::FETCH_BOTH  	//return value => index_field, index_array
	PDO::FETCH_NUM  	//return value => array_number
	PDO::FETCH_OBJ  	//return value => return_object
	*/
	
	/*** The SQL FETCH_ASSOC statement ***/
	$sql="SELECT *FROM animals";
	$stmt=$dbh->query($sql);
	$result=$stmt->fetch(PDO::FETCH_ASSOC);
	foreach($result as $key=>$val)
	{
	print_r($result);
	echo'</br>';
	}
	echo '<hr>'
	
	/*** The SQL FETCH_ASSOC statement ***/
	$sql="SELECT *FROM animals";
	$stmt=$dbh->query($sql);
	//$result=$stmt->fetch(PDO::FETCH_ASSOC);
	while($fetchresult=$stmt->fetch(PDO::FETCH_BOTH)){
		print_r($fetchresult);
		echo '</br>';
		}
	echo '<hr>'
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>
</body>
</html>