
    <?php
      function db_connection()
      {
        $link = mysqli_connect("localhost","root","","sessionaltwo");
          if($link)
          {
          return $link;
        
        }
        else{
          return FALSE;
          
        }
      }
    //<!------------insert data in database---------------->

    $records = [];
    if(isset($_POST['create']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
      
        $connection = db_connection();
        $in = "INSERT INTO user (username,password,confirm_password,mobile_no,email)
        values('$username','$password','$cpassword','$mobileno','$email')";
        $res = mysqli_query($connection,$in);
    }
