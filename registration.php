<!DOCTYPE html>
<html>

<head>
    <title>form</title>]
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style type="text/css">
    .container {
        margin-top: 2%;
        width: 400px;
        border: ridge 1.5px white;
        padding: 10px;
    }

    body {
        background: #E0EAFC;
        background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
        background: linear-gradient(to right, #CFDEF3, #E0EAFC);

    }
    </style>

</head>

<body>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="" method="post" name="form-group" class="myform">


            <div class="form-group">
					<label for="user"> Username: </label>
					<input type="text" name="username" id="username" class="form-control" >
					<span id="username" > </span>
				</div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <p class="error-message"></p>
            </div>
            <div class="form-group">
                <label for="">Confirm Passwoprd</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" >
                <p class="error-message"></p>
            </div>
            <div class="form-group">
                <label for="">Mobile No</label>
                <input type="number" class="form-control" id="mobileno" name="mobileno" >
                <p class="error-message"></p>
            </div>
            <div class="form-group">
                <label for="">E-mai</label>
                <input type="email" class="form-control" id="email" name="email" >
                <p class="error-message"></p>

            </div>
            <input type="submit" value= "sign up"class="btn btn-primary" name="create" id="submit"  onclick="onmyFunction()">Sign up</input>
            
            already have a account!<a href="signin.php">( sign in)</a>

        </form>
    </div>

    
<script>
 
  function onmyFunction() {
  
        var firstname = document.getElementById('username').value;
        var lastname = document.getElementById('password').value;
        var phoneno = document.getElementById('cpassword').value;
        var email = document.getElementById('mobileno').value;
        var password = document.getElementById('email').value;
        console.log(firstname)
        if(firstname == " " || firstname == null)
        {
           alert();
       
         
        }
  }
</script>


    <form action="" method="POST" name="getuser">
        <input type="submit" value="Get Users" class="btn btn-outline-secondary" name="users">
    </form>

    <!----------------------------------------Validation -------------------------------->
   
 

    <?php
    //--------------------------database connection  include once --------------------->
  
    include_once "dbconnection.php";

    // ----------------------------fetching data from database---------------------->


    if(isset($_POST['users']))
{
    $in = "SELECT * from user";
    $connection = db_connection();
    $res = mysqli_query($connection,$in);
    $records = [];
    while ($row = mysqli_fetch_assoc($res))
    {
		$records[] = $row;
    }
}

    ?>

        <?php if(count($records)>0){?>
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Confirm Password</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>

                <tbody>
               <?php foreach($records as $record){?>

                <tr>

                        <td> <?php echo $record['id'] ?></td>
                        <td> <?php echo $record['username'] ?></td>
                        <td> <?php echo $record['password'] ?></td>
                        <td> <?php echo $record['confirm_password'] ?></td>
                        <td> <?php echo $record['mobile_no'] ?></td>
                        <td> <?php echo $record['email'] ?></td>

                        <?php }?>
                     </tbody>
                </table>

<?php }?>
</body>
</form>

</html>