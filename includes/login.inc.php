<?php

session_start();



if (isset($_POST['submit'])){
    
    include_once 'dbh.inc.php';
    
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    
    
    //error handlers
    //check for empty fields
    if(empty($username)||empty($password)){
          $_SESSION['errors'] = array("Your username or password was incorrect.");
               
        
        header("Location: ../index.php?login=empty");
        exit();
    }else{
        
        $sql = "SELECT * FROM users WHERE username ='$username'";
        
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck<1){
            
        $_SESSION['errors'] = array("Your username or password was incorrect.");
        
            
         header("Location: ../index.php?login=error");
        exit();
        } else{
            if($row=mysqli_fetch_assoc($result)){
                
            $hashedPwdCheck = password_verify($password, $row['password']);    


                if($hashedPwdCheck==false){
                    $_SESSION['errors'] = array("Your username or password was incorrect.");
               
                     header("Location: ../index.php?login=error");
                        exit();
                    
                } elseif($hashedPwdCheck == true){
                    // log in the user here 
                    $_SESSION['u_id']=$row['userID'];
                    $_SESSION['u_user']=$row['username'];
                    $_SESSION['u_first']=$row['firstName'];
                    $_SESSION['u_last']=$row['lastName'];
                        
                     header("Location: ../index.php?login=success");
                        exit();
                    
                    
                }
                
                
            }
        }
        
    }
    
   
}else{
   header("Location: ../index.php?login=error");
        exit();
}