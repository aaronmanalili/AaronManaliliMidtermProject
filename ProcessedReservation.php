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
            left: 0;
            width: 100%;    
            height: 60px;
            margin-top: auto;
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

        body{
            margin: 0;
            padding: 0;
            height: 100%;
            position: relative;
            min-height: 120vh;
            display: flex;
            flex-direction: column;
        }

        tr{
            position: relative;
        }
      
        a{
            text-align: center;
        }
        
    </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>ProcessedReservation</title>


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

    <?php
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $NumberandStreet = $_POST['NumberandStreet'];
        $City = $_POST['City'];
        $State = $_POST['State'];
        $ZipCode = $_POST['ZipCode'];
        $Checkin = $_POST['Check_in'];
        $Checkout = $_POST['Check_out'];
        $NumofPeople = $_POST['People'];
        $RoomType = $_POST['Room_Type'];
        $PhoneNumber = $_POST['PhoneNum'];
        $email = $_POST['Email_Address'];
        $PaymentMethod = $_POST['CardOptions'];
        $CardNum = $_POST['Card_Num'];
        $SpecialRequests = $_POST['SpecialRequests'];
        
        if(isset($_POST['firstName'])){
            $firstName = $_POST['firstName'];
        }
        if(isset($_POST['lastName'])){
            $lastName = $_POST['lastName'];
        }
        if(isset($_POST['NumberandStreet'])){
            $NumberandStreet = $_POST['NumberandStreet'];
        }
        if(isset($_POST['City'])){
            $City = $_POST['City'];
        }
        if(isset($_POST['State'])){
            $State = $_POST['State'];
        }
        if(isset($_POST['ZipCode'])){
            $ZipCode = $_POST['ZipCode'];
        }
        if(isset($_POST['Check_in'])){
            $Checkin = $_POST['Check_in'];
        }
        if(isset($_POST['Check_out'])){
            $Checkout = $_POST['Check_out'];
        }
        if(isset($_POST['People'])){
            $NumofPeople = $_POST['People'];
        }
        if(isset($_POST['Room_Type'])){
            $RoomType = $_POST['Room_Type'];
        }
        if(isset($_POST['PhoneNum'])){
            $PhoneNumber = $_POST['PhoneNum'];
        }
        if(isset($_POST['Email_Address'])){
            $email = $_POST['Email_Address'];
        }
        if(isset($_POST['CardOptions'])){
            $PaymentMethod = $_POST['CardOptions'];
        }
        if(isset($_POST['Card_Num'])){
            $CardNum = $_POST['Card_Num'];
        }
        if(isset($_POST['SpecialRequests'])){
            $SpecialRequests = $_POST['SpecialRequests'];
        }

        if($RoomType == 'King'){
            $RoomPrice = 200;
        }
        elseif($RoomType == 'Queen'){
            $RoomPrice = 150;
        }
        elseif($RoomType == 'Suite'){
            $RoomPrice = 300;
        }

        $dStart = new DateTime($Checkin);
        $dEnd = new DateTime($Checkout);
        $NumberofDays = $dEnd->diff($dStart)->format("%a");     

        if($NumberofDays == 0){
            $NumberofDays = 1;
        }

        $total = ($RoomPrice * $NumberofDays) * 1.07;
    ?>

    <h2>Thank you <?php echo "$firstName $lastName"?> for your reservation</h2>
    <p>The followings are the information that you entered: </p>
    <table class="table table-striped "> 
   
        <tr>
            <th>Number & Street </th>
            <td><?php echo " $NumberandStreet"?></td>
        </tr>
       

        <tr>
            <th>City</th>
            <td><?php echo " $City"?></td>
        </tr>

        <tr>
            <th>State</th>
            <td><?php echo " $State"?></td>
        </tr>

        <tr>
            <th>Zip Code</th>
            <td><?php echo " $ZipCode"?></td>
        </tr>

        <tr>
            <th>Check-in Date</th>
            <td><?php echo " $Checkin"?></td>
        </tr>

        <tr>
            <th>Check-out Date</th>
            <td><?php echo " $Checkout"?></td>
        </tr>

        <tr>
            <th>Room Type</th>
            <td><?php echo " $RoomType"?></td>
        </tr>

        <tr>
            <th>Number of People</th>
            <td><?php echo " $NumofPeople"?></td>
        </tr>

        <tr>
            <th>Number of Days</th>
            <td><?php echo "$NumberofDays" ?></td>
        </tr>
        
        <tr>
            <th>Email</th>
            <td><?php echo " $email"?></td>
        </tr>

        <tr>
            <th>Phone Number</th>
            <td><?php echo " $PhoneNumber"?></td>
        </tr>

        <tr>
            <th>Credit Card</th>
            <td><?php echo " $PaymentMethod"?></td>
        </tr>

        <tr>
            <th>Card Number</th>
            <td><?php echo " $CardNum"?></td>
        </tr>

        <tr>
            <th>Special Request</th>
            <td><?php echo " $SpecialRequests"?></td>
        </tr>

        <tr>
            <th>Total Charge</th>
            <td>$<?php echo "$total"?></td>
        </tr>

    </div>

   



    <br>

    <footer>
        <p>Copyright &copy; <?php echo date ('Y'); ?> Aaron Manalili's Resort</p>
        <p>email: manalilia2@mail.montclair.edu</p>
    </footer>

    
</body>

</html>



