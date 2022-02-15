<?php

  include('backend.php');

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
}




      $query = "INSERT into users(name, lastName, email, address, city, state, zip, phone, birthdate) VALUES ('$name','$last','$email','$address','$city','$state','$zip','$phone','$birthdate')"; 
     

      $result = mysqli_query($connection, $query);

      if(!$result){
          die('Query Failed');
      }
      echo 'User added!!'
        /*$json_array = array();

        
        while($row = mysqli_fetch_array($result)){
            $json_array[] = array(
                "title" => $row['title'],
                "description" => $row['description'],
                "id" => $row['id']
            );
        };

        
       echo json_encode($json_array, JSON_UNESCAPED_UNICODE);*/

  


?>