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
            position: sticky;
            bottom: 0;
            width: 100%;
            height: 60px;
        }

        a{
            text-align: center;
        }
    </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Activities</title>
 
    </head>

    <body>

        <h1>Aaron Manalili's Resort</h1>

        <nav class="navbar navbar-expand-md bg-success navbar-dark">

        <img src="msu-ccis.png" alt="MSU CCIS logo" width="92" height="92"/>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon">
            </span>
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

    <h2><strong>Activities at Pacific Trails</strong></h2>

    <table border = "1px">
    <tr>
        <th>Pool - Free</th>
        <th>Parasailing - $100</th>
    </tr>
    <tr>
        <td><img src="Windsor_Court_Pool_a1361b8c-39a9-4eaf-b119-e4c61ef73ea9.jpg" height="400" width="400" class = ".d-block"></td>
        <td><img src="8b.jpg" height="400" width="400" class=".d-block"></td>
    </tr>

    <tr>
        <th>Golf - $20</th>
        <th>Hiking - Free</th>
    </tr>
        <td><img src="golf.jpg" height="400" width="400" class=".d-block"></td>
        <td><img src="hiking.jpg" height="400" width="400" class= ".d-block"></td>
    </table>
    
    
    <footer>
        <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
        <p>email: manalilia2@mail.montclair.edu</p>
    </footer>
    
</body>

</html>