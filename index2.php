<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
   <link rel="stylesheet" type="text/css" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
    <style>
   body{
  background-image: url('image/3.png');
  
  background-size: 120%;
  background-position: center;
  background-repeat: no-repeat;
}
.login-box{
  max-width: 800px;
  float: none;
  margin: 150px auto;
  margin-left:30%;
}
.login-left{
  background:  rgba(196, 234, 248, 0.5);
  padding: 30px;
  ba
}

.form-control{
  background-color: transparent ! important;
}
.login-submit{
  
  margin-top:35%;
  margin-left:-40%;
  font-weight:400;
  color: #373737;
  

}
.link
{
  
  color: #41BFC0;
}



  </style>
</head>
<body>
  <div class="container">
    <div class="login-box">
    <div class="row">
    
   
    <div class="col-md-6 login-right">
      <h2>LOGIN</h2>
      <form action="validation.php" method="post">
        <?php 
        if(array_key_exists('error',$_GET)){
          echo('<div style="color:red;">Incorrect password!</div>');
        }
        ?>
        <div class="form-group">
          <label>Username</label>
         <input type="text" name="user" class="form-control" required>
        </div> 
        <div class="form-group">
          <label>Password</label>
         <input type="password" name="password"  class="form-control" required>
         <button type="submit" class="btn btn-primary"> login </button>
        
        </div> 
       </form>
    </div>
</div>
  
    </div>
    
  </div>
  
  
</body>
</html>



