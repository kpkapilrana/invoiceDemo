
<?php
    session_start();
    if(!isset($_SESSION['user_session'])){
        header("Location:index.php");
    }

    include_once './template/config.php';
?>
<html>
    <title>Invoice Demo</title>
    <head>
            <link rel="stylesheet" href="./css/bootstrap.min.css">
            <script src="./js/jquery-3.2.1.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <div class="container">  
        <?php include './template/navbar.php' ?> 
        <strong>Hello , <?php echo $_SESSION['user_name'] ?></strong>      
        Welcome to the Member Page
        </div>
    </body>
</html>