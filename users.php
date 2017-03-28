<?php

include_once("adb.php");

class users extends adb{
	function users(){
	}

function getParts($pno){
		$strQuery="select pno, pname, qoh, price, olevel from Parts where pno=$pno";
		
		//echo $strQuery;
		return $this->query($strQuery);
	}

	function getItems(){
		$strQuery="select pno, pname, qoh, price, olevel from Parts";
		return $this->query($strQuery);
	}

//function for getting the customer details from the database
	function getCustomers($cno){
		$strQuery="select cno, fname, lname,  street, phone , email_address from Customers  where cno=$cno";
		return $this->query($strQuery);
	}


//function for getting the employee details from the database
function getEmployees($eno){
		$strQuery="select eno, fname, lname, email_address, phone_number, home_address, hdate from Employees  where eno=$eno";
		return $this->query($strQuery);
	}


//function for getting the shipping details of an item from the database
function getShippingDetails($sno){
		$strQuery="select sno, Customer_name, Item, Price, Delivery_method, Payment_method, Address, Phone_number , Country from Shipping_Details  where sno=$sno";
		return $this->query($strQuery);
	}

	function searchParts($text=false){
		$filter=false;
		if($text!=false){
			$filter=" pname like '$text'";
		}
		
		return $this->getParts($filter);
	}

	function addCustomers($fname, $lname, $street, $phone, $email){
		$query="insert into Customers set
								fname='$fname',
								lname='$lname',
								street= '$street',
								phone= '$phone',
								email_address='$email'";
		return $this->query($query);
	}

	function addEmployee($fname, $lname, $email, $phone, $home, $hdate){
		$query="insert into Employees set
								fname='$fname',
								lname='$lname',
								email_address='$email',
								phone_number= '$phone',
								home_address='$home',
								hdate= '$hdate'
								";
		return $this->query($query);
	}

	function searchCustomers($cname){
	$strQuery="select cno, cname, street, phone from Customers where cname='$cname'";
		
		return $this->query($strQuery);
	}


		function searchEmployees($ename){
	$strQuery="select eno, ename, hdate, zip from Employees where ename='$ename'";
		
		return $this->query($strQuery);
	}

	function usergroup($pname,$qoh, $price, $olevel){
		$query= "insert into Parts set 
							pname=' $pname', 
							qoh='$price'
							price= 'price'
							olevel= 'olevel'";
		return $this->query($query);
	}

//takes in usercode to search for a user
	

function editParts($pno,$pname,$qoh, $price,$olevel){
		$query= "UPDATE Parts set
							pname='$pname',
							qoh='$qoh',
							price='$price',
							olevel='$olevel'";
		$result=$this->query($query);
		return $result;
	}

//function for editing the detains of an employee
	function editEmployee($eno,$fname, $lname, $email_address, $phone_number, $home_address,  $hdate){
		$query= "UPDATE Employees set
							fname='$fname',
							lname= '$lname',
							email_address='$email_address',
							phone_number='$phone_number',
							home_address='$home_address',
							hdate='$hdate'
							where eno=$eno
							";
		$result=$this->query($query);
		return $result;
	}
//this function edits the customer details 
		function editCustomer($cno,$fname, $lname, $street, $phone, $email_address){
		$query= "UPDATE Customers set
							fname='$fname',
							lname= '$lname',
							street='$street',
							phone='$phone',
							email_address='$email_address'
							where cno=$cno
							";
		$result=$this->query($query);
		return $result;
	}
//function for editting the shipping details of an item bought
		function editShippingDetails($sno, $Customer_name,$Item, $Price, $Delivery_method, $Payment_method, $Address, $Phone_number, $Country){
		$query= "UPDATE Shipping_Details set
							Customer_name='$Customer_name',
							Item= '$Item',
							Price='$Price',
							Delivery_method='$Delivery_method',
							Payment_method='$Payment_method',
							Address='$Address',
							Phone_number='$Phone_number',
							Country='$Country'
							where sno=$sno
							";
		$result=$this->query($query);
		return $result;
	}

	function getOrders_of_Customers(){
		$query= "SELECT Customers.cname , ODetails.qty, Parts.pname FROM Customers INNER JOIN Orders on Customers.cno= Orders.cno INNER JOIN ODetails on ODetails.ono=Orders.ono INNER JOIN Parts on ODetails.pno=Parts.pno";
		$result=$this->query($query);
		return $result;
	}

}
?>