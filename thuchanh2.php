<!DOCTYPE HTML>
<html>
<style type="text/css">
.login {
  height:200px; width:250px;
  margin:0;
  padding:10px;
  border:1px #CCC solid;
}
.login input {
  padding:5px; margin:5px
}
</style>  
<body>

  <form method = "post">
    <div class="login">
     <h2>Login</h2>
     <input type="text" name="username" size="30"  placeholder="username" />
     <input type="password" name="password" size="30" placeholder="password" />
     <input type="submit" value="Sign in"/>
   </div>
 </form>
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST["username"]; 
 $password = $_POST["password"];

 if ($username === "admin" && $password === "admin") {   
 echo "<h2>Welcome <span style='color:red'>" .$username. "</span> to website</h2>";
} else{
echo "<h2><span style='color:red'>Login Error</span></h2>";
}
}
?>
</body>
</html>