<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<input type="text" name="firstname" id="firstname" >

<input type="submit" name="btn" onclick="myfunction()">


<script>
function myfunction() {

var fname = document.getElementById('firstname').value;
var password = document.getElementById('Password').value;

if(fname == "" || fname == null)
{
  document.getElementById('error1').innerHTML = "please enter user name";
  
}
}
</script>
<p id="error1"></p>
</body>
</html>