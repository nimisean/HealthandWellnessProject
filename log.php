    <?php

session_start();
require 'connect.php';

//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	

	
    //Retrieve the field values from our login form.
    $name = $_POST['name'];
    $email = $_POST['email'];
    
  

       $sql = "INSERT INTO leads ( Name,Email) VALUES (:name,:email)";
        
    $stmt = $pdo->prepare($sql);   
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email); 
    $result = $stmt->execute();     
            
    
    //If the signup process is successful.
    
    if($result){
        
    header('Location: land.php');
            exit;
    }
    else{
        echo "error";
    }

   
   
	
           
    
    }


?>