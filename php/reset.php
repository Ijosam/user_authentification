<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $password = $_POST['password']; //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    //if it does, replace the password
    if (($handle = fopen("../storage/users.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {

        if($email==$data[1]){
        	$data[1] = $email;
	        $data[2] = $password;
    	} else {
    		echo "User does not exist";
    	}
    fclose($handle);
	}
	if (($handle = fopen("../storage/users.csv", "w")) !== FALSE) {
		$data=array($data[0], $data[1], $password);
		fputcsv($handle, $data);
	}
}
}
echo "HANDLE THIS PAGE";


