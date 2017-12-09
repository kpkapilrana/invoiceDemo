<?php
    session_start();
    require_once './template/config.php';

    // if(isset($_POST['btn-login'])){
            $user_email=trim($_POST['user_email']);
            $user_password=trim($_POST['password']);

            //$password=md5($user_password);

            try{
                $stmt="select * from tbl_users where user_email='$user_email'";
                $result=$conn->query($stmt);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        if($row['user_password']==$user_password){
                                echo 'ok';
                                $_SESSION['user_name']=$row['user_name'];
                            }else{
                                echo 'email or password does not exist';
                            }
                    }
                }
            }catch(Exception $e){
                echo $e->getMessage();
            }




    // }
?>