<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">

        h1
        {
            text-align: center;
            text-shadow: -4px 4px 6px dimgrey;
        }
        footer{
            text-align: center;
            background: gray;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
        }

        div{
            margin-bottom: 10px;
        }

        label{
            display: inline-block;
            width: 150px;
        }
   
        p{
            display: block;
        }

        a{
            text-align: center;
        }
        
    </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      

        <title>ProcessedComments</title>

    </head>

    <body>

        <h1>Aaron Manalili's Resort</h1>

        <nav class="navbar navbar-expand-md bg-success navbar-dark">

        <img src="msu-ccis.png" alt="MSU CCIS logo" width="92" height="92"/>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Yurts.php">Yurts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Activities.php">Activities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Reservation.php">Reservation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Comments.php">Comments</a>
            </li>
        
          </ul>
        </div>
    </nav>
    <br>

<?php
    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['emailAddress'];
    $Comments = $_POST['Your_Comments'];

    if(isset($_POST['Name'])){
        $Name = $_POST['Name'];
    }

    if(isset($_POST['Phone'])){
        $Phone = $_POST['Phone'];
    }
    if(isset($_POST['email'])){
        $Email = $_POST['email'];
    }
    if(isset($_POST['Comments'])){
        $Comments = $_POST['Comments'];
    }

    if(empty($Name) && empty($Phone) && empty($Email) && empty($Comments))
    {
        echo "<font size= '10'> Dear Guest, please enter your comments.</font>";
    }

    elseif(empty($Name) && empty($Phone) && empty($Email)){
        echo "<font size = '10'>Dear Guest, thank you for your comments.</font>";
    }

    elseif(empty($Phone) && empty($Email)){
        echo "<font size = '10'>Dear  </font>" . "<font size = '10'>$Name</font>" . "<font size = '10'>, thank you for your comments.</font>";
    }

    elseif(empty($Name) && empty($Email)){
        echo "<font size = '10'>Dear Guest, thank you for your comments.</font>";
    }
    elseif(empty($Name) && empty($Phone)){
        echo "<font size = '10'>Dear </font>" . "<font size = '10'>$Email</font>" . "<font size = '10'>, thank you for your comments.</font>";
    }
?>

    </div>


    <footer>
        <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
        <p>email: manalilia2@mail.montclair.edu</p>
    </footer>
    
</body>

</html>



