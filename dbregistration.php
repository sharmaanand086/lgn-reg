<?php
$con = mysqli_connect('localhost', 'worldsuc_assign', 'asdf1234', 'worldsuc_stftitle');

	if (!$con)
  {
  die("Connection error: " . mysqli_connect_error());
  }
  	$name = $_POST["name"];
	$username = $_POST["email"];
	$password= $_POST["password"];
	$sql2 = "select * from 2_user where username ='".$username."' AND password='".$password."'";
	$result2 = mysqli_query($con,$sql2);
     $id = mysqli_fetch_array($result2);
     $person = $id['id']; 
  if(mysqli_num_rows($result2)> 0){
               ?>
            	     <script> window.location.href = 'http://www.speaktofortune.com/niche/registration.php?id='+<?php echo $person ?>;</script>
            	    
<?php
  }else{
    $query = "INSERT INTO `2_user`(`id`, `username`, `password`, `name`) VALUES ('','$username','$password','$name')";	
	$result3 = mysqli_query($con,$query);
			 if($result3== 'true'){
            	     ?>
            	     <script> window.location.href = 'http://www.speaktofortune.com/niche/';</script> 
            	      <?php
            	 }else{
            	     ?>
            	     <script> window.location.href = 'http://www.speaktofortune.com/niche/registration.php';</script>
            	     <?php
            	 }
  }
  
  ?>