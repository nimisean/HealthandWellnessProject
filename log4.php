    <?php

session_start();
require 'connect.php';

//If the POST var "login" exists (our submit button), then we can
//assume that the user has submitted the login form.
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	

	
    //Retrieve the field values from our login form.
    $id = $_POST['id'];
     $_SESSION['id']=$id;
  

       $sql = "SELECT * FROM orders WHERE id=:id ";
        
    $stmt = $pdo->prepare($sql);   
    $stmt->bindValue(':id', $name);
 
    $result = $stmt->execute();     
            
    
    //If the signup process is successful.
    
    if($result){
     
    header('Location: ordernew.html');
            exit;
    }
    else{
        echo "error";
    }

   
   
	
           
    
    }


?>