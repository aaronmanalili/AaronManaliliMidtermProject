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
        a{
            text-align: center;
        }
    </style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>index</title>

       
    </head>

    <body>

        <h1>Aaron Manalili's Resort</h1>

    <nav class="navbar navbar-expand-md bg-success navbar-dark">

        <img src="msu-ccis.png" alt="MSU CCIS logo" width="92" height="92"/>

        <!-- hamburger icon -->
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

<div class = "container">
<p><strong>Aaron Manalili's Resort offers a special lodging experience on the New Jersey Eastern Cost.</strong></P>
    <p><strong>Relax in serenity with Panoramic views of the Atlantic Ocean.</strong></p>
    <ul>
        <li><strong>Private yurts with decks overlooking the ocean</strong></li>
        <li><strong>Activities lodge with fireplace and gift shop</strong></li>
        <li><strong>Nightly fine dining at the Overlook Cafe</strong></li>
        <li><strong>Heated outdoor pool and whirlpool</strong></li>
        <li><strong>Guided hiking tours of the redwoods</strong></li>
    </ul>

    <p><strong>Aaron Manalili's Resort</strong></p>
    <p><strong>One Normal Ave, Montclair</strong></p>
    <p><strong>New Jersey NJ 07043</strong></p>
    <p><strong>973-655-4166</strong></p>

</div>

<footer>
        <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
        <p>email: manalilia2@mail.montclair.edu</p>
    </footer>
</body>

</html>
