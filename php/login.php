<?php
session_start();
if(isset($_POST['submit'])){
    $email =$_POST['email']; //finish this line
    $password = $_POST['password']; //finish this
 
loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    
if (($handle = fopen("../storage/users.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        	if($email==$data[1] AND $password==$data[2]){
        	$_SESSION['user'] = $data[0];
        	header("location:../index.php");	
        	} else{
        	header("location:../forms/login.html");	
        	}
    }
    fclose($handle);
}
}
echo "HANDLE THIS PAGE";

