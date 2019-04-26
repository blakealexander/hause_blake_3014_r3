<?php 
function createUser($fname, $username, $password, $email){
    include('connect.php');

   // the following query will create a new row in the tbl_user table
   //with user_fname = $fname
   // user_name = $username
   // user_pass = $password
   // user_email = $email

   try{
    $create_user_query = 'INSERT INTO tbl_user(user_fname, user_name, user_pass, user_email)';
    $create_user_query .= ' VALUES(:fname,:username,:password,:email )';

    $create_user_set = $pdo->prepare($create_user_query);
    $create_user_set->bindParam(":fname", $fname);
    $create_user_set->bindParam(":username", $username);
    $create_user_set->bindParam(":password", $password);
    $create_user_set->bindParam(":email", $email);

    $results = $create_user_set->execute();
 
   }catch(Exception $e){
       $message = $e->getMessage();
       return $message;
   }
   
   redirect_to('index.php');
    // if($create_user_set->rowCount())
    //     echo "This is a thing $create_user_set->rowCount()";
    // else
    //     echo "This is NOT a thing $create_user_set->rowCount()";

    // if($create_user_set->rowCount()){
        
    // }else{
    //     $message = 'Your hiring practices have failed you... this individual sucks...';
    //     return $message;
    // }

}


function editUser($id,$fname,$username,$password,$email){
    include('connect.php');
    
    // the following query will create a new row in the tbl_user table
    //with user_fname = $fname
    // user_name = $username
    // user_pass = $password
    // user_email = $email
    
    $create_user_query = 'UPDATE tbl_user SET user_fname=:fname, user_name=:username, ';
    $create_user_query .= 'user_pass=:password, user_email=:email WHERE user_id=:id';
    
    $update_user_set = $pdo->prepare($create_user_query);

    /**
     * array(
     *   ':fname'=>$fname,
     *   ':username'=>$username,
     *   ':password'=>$password,
     *   ':email'=>$email,
     *   ':id'=>$id,
     *)
     */
    $update_user_set->bindParam(":fname", $fname);
    $update_user_set->bindParam(":username", $username);
    $update_user_set->bindParam(":password", $password);
    $update_user_set->bindParam(":email", $email);
    $update_user_set->bindParam(":id", $id);


    $update_user_set->execute();
    
     if($update_user_set->rowCount()){
         redirect_to('index.php');
     }else{
         $message = 'Guess you get canned....';
         return $message;
     }
    }