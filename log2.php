    <?php

session_start();
require 'connect.php';

//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	

	
    //Retrieve the field values from our login form.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $plan = 'normal';
    
  

       $sql = "INSERT INTO orders (name,email,phone,plan) VALUES (:name,:email,:phone,:plan)";
        
    $stmt = $pdo->prepare($sql);   
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email); 
     $stmt->bindValue(':phone', $phone); 
     $stmt->bindValue(':plan', $plan); 
    $result = $stmt->execute();     
            
    
    //If the signup process is successful.
    
    if($result){
        
    header('Location: order.php');
            exit;
    }
    else{
        echo "error";
    }

   
   
	
           
    
    }


?>