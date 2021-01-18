<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<h1 class="text-white text-center font-weight-bold bg-success" style="font-size: 30px;"> Registration Form</h1>

	<div class="container"><br>
		
		<div class="col-lg-6 m-auto d-block">
			
			<form action="#"  method="post" name="form-group" class="myform"  class="bg-light" onsubmit = "return validation()">
				
				<div class="form-group">
					<label for="user" class="font-weight-bold"> Username: </label>
					<input type="text" name="username" class="form-control" id="user" >
					<span id="username" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Password: </label>
					<input type="text" name="password" class="form-control" id="pass" autocomplete="off">
					<span id="passwords" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Confirm Password: </label>
					<input type="text" name="cpassword" class="form-control" id="conpass" autocomplete="off">
					<span id="confrmpass" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Mobile Number: </label>
					<input type="text" name="mobileno" class="form-control" id="mobileNumber" autocomplete="off">
					<span id="mobileno" class="text-danger font-weight-bold"> </span>
				</div>

				<div class="form-group">
					<label class="font-weight-bold"> Email: </label>
					<input type="text" name="email" class="form-control" id="emails" autocomplete="off">
					<span id="emailids" class="text-danger font-weight-bold"> </span>
				</div>

				<input type="submit" name="create" value="sign up" class="btn btn-success"  id="submit" onclick="onmyFunction()"	autocomplete="off">
				<input type="submit" name="create" value= "sign up"class="btn btn-primary"  id="submit"  onclick="onmyFunction()"></input>


			</form><br><br>


			<form action="" method="POST" name="getuser">
                <input type="submit" value="Get Users" class="btn btn-outline-secondary" name="users">
			</form> 
			
		</div>
	</div>

	<script type="text/javascript">
		

		function validation(){

			var user = document.getElementById('user').value;
			var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
			var mobileNumber = document.getElementById('mobileNumber').value;
			var emails = document.getElementById('emails').value;



			if(user == ""){
				document.getElementById('username').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) {
				document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(!isNaN(user)){
				document.getElementById('username').innerHTML =" ** only characters are allowed";
				return false;
			}







			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}


			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}



			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}




			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=10){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}
		}

	</script>


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
</html>