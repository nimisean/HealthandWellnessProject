
        <?php

session_start();
require 'connect.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
	 $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
     $id=$_SESSION['id'];
	
       $sql = "UPDATE info SET name=:name,email=:email,phone=:phone WHERE id = :id";
         $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
         $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();

        if ($result) {
            header('Location: orderchange.html');
        exit;
        } else {
            echo "Error updating info table: ";
        }
	
   
 
  

       
   
   
	
           
    
    }


?>