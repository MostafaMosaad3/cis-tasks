<!DOCTYPE html>
<html>
 <head>
  <title>     </title>
  <meta charset="utf-8">
  <style>
   p {font-size: 12px;}
  </style>
 </head>
 <body>
  <div>
    <h4>Sign Up</h4>
    <p>"don,t have an account yet? sign up here!</p>
    <form  action ="signup.inc.php"  method ="post">
        <input type= "text"  name = "user_id"  placeholder ="username" >
        <br>
        <input type = "password"  name ="password"  placeholder = "password">
        <br>
        <input type = "password"  name ="password_repeat"  placeholder = "repeat password">
        <br>
        <input type= "text"  name = "email"  placeholder ="e_mail" >
        <br>
        <button type = "submit" name = "submit">Sign Up </button>
    </form>
  </div>

 </body>
</html>