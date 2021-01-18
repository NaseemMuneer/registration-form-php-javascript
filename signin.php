
<?php include_once "dbconnection.php"; ?>
<!DOCTYPE html active>
<html>

<head>
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style type="text/css">
    .container {
        margin-top: 8%;
        width: 400px;
        border: ridge 1.5px white;
        padding: 20px;
    }

    body {
       
        background: #E0EAFC;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #CFDEF3, #E0EAFC);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    </style>

    
</head>

<body>
    <div class="container">

        <h2>sign in Form</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>User name / E-mail</label>
                <input type="text" class="form-control" id="email" name="email">
                <p id="error1"></p>
            </div>

            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="login_btn" onclick = "myFunction()">Sign in</button>
            <a href="registration.php"> not yet, a member!</a>
        </form>
    </div>


    <?php 

//-----------------------------login  to site ----------------------------------------->


?>


<script>
 
function myFunction() {

      var firstname = document.getElementById('email').value;
      var password = document.getElementById('Password').value;

      if(firstname == "" || firstname == null)
      {
        document.getElementById('error1').innerHTML = 'please enter user name';
        
      }
}
</script>
</body>

</html>