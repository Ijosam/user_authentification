<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $fp = fopen('../storage/users.csv', 'w');
    $inputArray[] = array($username, $email, $password);
    foreach ($inputArray as $csv) {
        $csvRow[] = fputcsv($fp,$csv);
    }
    $csvData = implode("\n", $csvRow);
    if($csvData){
    echo "User Successfully Registered". "<a href='../index.php'>Go to Home Page</a>";
}


}



