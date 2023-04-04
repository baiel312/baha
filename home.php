<?php 
  
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:index.php');
  }
?>



<html>
<head>
<title> Home Page </title>

</head>   
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Poppins', sans-serif;



}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-position: center;
    background-size: cover;
    
   
}

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 150px;
 
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}

.baha{
    font-size: 2em;
    color: #fff;
    user-select: none;

}
.navigation a {
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;

}
.navigation a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin:right;
    transform: scaleX(0);
    transition: transform .5s;



}

.navigation a:hover::after{
    transform-origin:left;
    transform: scaleX(1);
}

.navigation .btnLogin-popup{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;

}

.navigation .btnLogin-popup:hover{
    background: #fff;
    color: #162938;



}
h1{
  color:#fff;
}
</style> 
<body background="portfolio5.jpg" no-repeat>

    <header>
        <h2 class="baha">baha</h2>
        <nav class="navigation">
         <a href="#">Home</a>
         <a href="#">About</a>
         <a href="#">Services</a>
         <a href="#">Contact</a>
         <button class="btnLogin-popup"> <a class="float-right" href="logout.php">Login  </a></button>
        </nav>
    </header>
    <a class="float-right" href="logout.php">  </a>
    <h1> hello <?php echo $_SESSION['username']; ?> </h1>
    <script src="js/java.js"></script>
</body>




</html>