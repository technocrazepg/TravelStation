<!DOCTYPE html>
<html>
    <head>
        <title>Travel Station</title>
        <link rel="icon" href="images/travel1.png" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/packages.css">
        <link rel="stylesheet" type="text/css" href="css/planning.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/videos.css">
    </head>
    <style>
        .top{
            background-color: rgb(241, 63, 92); 
            color: white; 
            font-weight: 1000;
            border-radius: 50%;
            font-size: 30px;
            width: 50px;
            height: 50px;
            position: fixed;
            right: 20px;
            bottom: 20px;
            cursor: pointer;
            border: none;
            text-align: center;
            text-justify: justify;
            padding-bottom: 7px;
        }
        .top:hover{
            box-shadow: 0 0 5px 4px gray;
            background-color: rgb(247, 9, 48);
            transform: scale(1.15);
        }
        /* mobile */
        @media only screen and (max-device-width: 650px), only screen and (max-width: 650px){
            .top{
                width: 120px;
                height: 120px;
                font-size: 2em;
            }
        }
    </style>
    <script>
        document.getElementById('playVid').onclick = function () {
            document.getElementById('video').play();
        };
    </script>
    <body>
        <!-- header -->
        <?php include 'header.php' ?>
        <!-- Packages -->
        <?php include 'packages.php' ?>
        <!-- Planning -->
        <?php include 'planning.php' ?>
        <!-- videos -->
        <?php include 'videos.php' ?>
        <!-- Contact -->
        <?php include 'footer.php' ?>
        <!-- top navigator button -->
        <a href="#header"><button class="top" title="Navigate to top">&uarr;</button></a>
    </body>
</html>
