

<?php
	 $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $address = $_POST['address'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $conn = new mysqli('localhost','root','','test');

     if($conn->connect_error){
         die('Connection Failed :' .$conn->connect_error);
     }else{
         $stmt = $conn->prepare("insert into registration(firstName,lastName,address,email,password)
         values(?,?,?,?,?)");
         $stmt->bind_param("sssss",$firstName,$lastName,$address,$email,$password);
         $stmt->execute();
         header("Location: success.html");
exit();
        //echo "registration Sucsessfully";
        
         $stmt->close();
         $conn->close();
     }


 ?>
 