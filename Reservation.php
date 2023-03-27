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
            left: 0;
            width: 100%;
           
            
        }

        div{
            margin-bottom: 10px;
        }
        label{
            display: inline-block;
            width: 150px;
        }
        h2{
            text-align: left;
        }
 
        a{
            text-align: center;
        }
        
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Reservation</title>

    </head>

    <body>

        <h1>Aaron Manalili's Resort</h1>

    <nav class="navbar navbar-expand-md bg-success navbar-dark">

        <img src="msu-ccis.png" alt="MSU CCIS logo" width="92" height="92"/>

        <!-- hamburger icon -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon">  
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

    <h2>Reservation at Aaron Manalili's Resort</h2>

<div class="container">

    <form class="form-horizontal" action="ProcessedReservation.php" method="POST">

    <div class = "form-group row">
        <label class = "col-sm-2 col-form-label" for = "firstName">First Name: </label>
        
        <div class="col-sm-10">
            <input type="text" name = "firstName" id="firstName" required class="form-control">
        </div>
    </div>

<div class = "form-group row">
    <label class = "col-sm-2 col-form-label" for = "lastName">Last Name: </label>

    <div class="col-sm-10">
    <input type="text" name = "lastName" id="lastName" required class="form-control">
    </div>
</div>

<div class = "form-group row">
    <label class = "col-sm-2 col-form-label" for = "NumberandStreet">Number and Street: </label>
    
    <div class="col-sm-10">
    <input type="text" name = "NumberandStreet" id="NumberandStreet" required class="form-control">
    </div>
</div>

<div class = "form-group row">
     <label class = "col-sm-2 col-form-label" for = "City">City: </label>

      <div class="col-sm-10">
     <input type="text" name = "City" id="City" required class="form-control">
    </div>
</div>

<div class = "form-group row">
      <label class = "col-sm-2 col-form-label" for = "State">State: </label>

      <div class="col-sm-10">
      <input type="text" name = "State" id="State" required class="form-control">
      </div>
</div>

<div class = "form-group row">
     <label class = "col-sm-2 col-form-label" for = "Zip_Code">Zip Code: </label>
     
     <div class="col-sm-10">
     <input type="text" name = "ZipCode" id="Zip_Code" required class="form-control">
    </div>
</div>

<div class = "form-group row">
     <label class = "col-sm-2 col-form-label" for = "Check_in_Date">Check-in Date: </label>

     <div class="col-sm-10">
     <input type="date" name = "Check_in" id="Check_in_Date" required placeholder = "mm/dd/yyyy"
     class="form-control">
    </div>
</div>

<div class = "form-group row">
     <label class = "col-sm-2 col-form-label" for = "Check_out_Date">Check-out Date: </label>

     <div class="col-sm-10">
     <input type="date" name = "Check_out" id="Check_out_Date" required placeholder = "mm/dd/yyyy"
     class="form-control">
    </div>
</div>

<div class = "form-group row">
     <label class = "col-sm-2 col-form-label" for = "Num_of_People">Number of People: </label>

     <div class="col-sm-10">
        <input type="text" name = "People" id="Num_of_People" required class="form-control">
    </div>
</div>

<div class = "form-group row">
    <label class = "col-sm-2 col-form-label" for = "Room_Type">Room Type: </label>

    <div class="col-sm-10">
        <select name = "Room_Type" name = "Room_Type">
            <option value="King">King</option>
            <option value="Queen">Queen</option>
            <option value="Suite">Suite</option>   
        </select>
    </div>
</div>

<div class = "form-group row">
      <label class = "col-sm-2 col-form-label" for = "Phone">Phone: </label>

      <div class="col-sm-10">
        <input type="tel" name = "PhoneNum" id="Phone" required placeholder="(###) ###-####"
        class="form-control">
    </div>
</div>

<div class = "form-group row">
      <label class = "col-sm-2 col-form-label" for = "Email-Address">Email-Address: </label>

      <div class="col-sm-10">
        <input type="text" name = "Email_Address" id="Email-Address" required placeholder="name@domain.com"
        class="form-control">
    </div>
</div>

<div class = "form-group row">
<label class = "col-sm-2 col-form-label" for = "Payment_Method">Payment Method: </label>

    <div class="col-sm-10">
        <select name = "CardOptions">
            <option value="MC">Mastercard</option>
            <option value="VISA">VISA</option>
            <option value="AMEX">AMEX</option>
            <option value="Discover">Discover</option>
        </select>
    </div>
</div>

<div class = "form-group row">
    <label class = "col-sm-2 col-form-label" for="Card_Number">Card Number: </label>

    <div class="col-sm-10">
        <input type="text" id="Card_Number" required name="Card_Num"
        class="form-control">
    </div>
</div>

<div class = "form-group row">
    <label class = "col-sm-2 col-form-label" for=" Special_Requests">Special Requests: </label>
   
    <div class="col-sm-10">
        <textarea name="SpecialRequests" 
        rows="4" cols="122"></textarea>
    </div>
</div>

  
    <div class="form-group row">
    
        <div class= "col-sm-10 offset-md-2">
            <button class="btn btn-primary " type="submit">Reserve a Room</button>
            <button class = "btn btn-success" type="reset">Clear</button>
        </div>
    </div>
    


        <br>



    </form>

</div>
 


    <footer>
         <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
         <p>email: manalilia2@mail.montclair.edu</p>
    </footer>
 
</body>

</html>


