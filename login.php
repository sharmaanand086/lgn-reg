<?php

session_start();
$conn = mysqli_connect('localhost', 'worldsuc_assign', 'asdf1234', 'worldsuc_stftitle');
if(isset($_POST['login_user']))
{

                         $email = $_POST['email'];
                         $password = $_POST['password'];
                         
                        $sql2 = "SELECT * FROM 2_user where username = '$email' AND password='$password'"; 
                        $result2 = mysqli_query($conn,$sql2);
                        $count_id2 = mysqli_num_rows($result2);
                        $row2 =  mysqli_fetch_assoc($result2);
                   
                        $id=$row2["id"];
                        $_SESSION["id"] = $row2["id"];
                        $_SESSION["name"] =$row2["name"];
                        $_SESSION["username"] =$row2["username"];
                        if(mysqli_num_rows($result2) > 0){
                            ?>
                                     <script type="text/javascript">
                                       window.location.href = "moblogin_server.php";
                                    </script> 
                                    <?php
                        }else{
                             $error = "Your Login Username or Password is invalid"; 
                             $_SESSION["error"] = $error;
                            ?>
                             <script type="text/javascript">
                                       window.location.href = "http://www.speaktofortune.com/niche/index.php";
                                    </script> 
                            <?php
                        }
                        
                    
         
}
