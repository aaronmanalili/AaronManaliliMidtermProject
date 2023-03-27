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

    <div class="container">
        <h2>We treasure your comments</h2>

        <form class="form-horizontal" action="ProcessedComments.php" method="POST">

        
    <div class = "form-group row">
        <label class = "col-sm-2 col-form-label" for = "Name">Name: </label>

        <div class="col-sm-10">
             <input type="text" name = "Name" id="Name" class="form-control">
        </div>
    </div>

    <div class = "form-group row">
          <label class = "col-sm-2 col-form-label" for = "Phone">Phone: </label>

          <div class="col-sm-10">
             <input type="tel" name = "Phone" id="Phone" placeholder="(###) ###-####" class="form-control">
          </div>
    </div>

    <div class = "form-group row">
          <label class = "col-sm-2 col-form-label" for = "email">Email-Address: </label>

          <div class="col-sm-10">
            <input type="text" name = "emailAddress" id="email" placeholder="name@domain.com" class="form-control">
         </div>
    </div>

    <div class = "form-group row">
        <label class = "col-sm-2 col-form-label" for = "Your Comments">Your Comments: </label>

        <div class="col-sm-10">
             <textarea name="Your_Comments" name="Your_Comments"
        rows="8" cols="72"></textarea class="form-control">
        </div>
    </div>
    
    

<div class="form-group row">
    
    <div class= "col-sm-10 offset-md-2">
        <button class="btn btn-primary" type="submit">Submit Comments</button>
    </div>
</div>
       
   

 

        </form>
    </div>


    <footer>
        <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
        <p>email: manalilia2@mail.montclair.edu</p>
    </footer>
    
</body>

</html>



