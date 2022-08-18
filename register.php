<?php
include  'connect.php';
if(isset($_POST['Submit'])){
  $fullname=$_POST['fullname'];
  $cnic=$_POST['cnic'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
  $rollno=$_POST['rollno'];
  $event=$_POST['drop-down1'];
  $ticketype=$_POST['drop-down2'];
  $ticketnumer=rand();

  // jo cheeezain single inverted may likha hay usko wese hi likho

  $sql="insert into `user1`(fullname,cnic,email,rollno,contact,event,tickettype,ticketnumber) values('$fullname','$cnic','$email','$rollno','$contact','$event','$ticketype',$ticketnumer)";
  // to execute the query
  $result=mysqli_query($con,$sql);
  if($result) {
      // echo "Data Inserted Successfully";
      //data insert krne k baad index.php may redirect hojai
      header('Location:ticket.php');
  }else{
      die(mysqli_error($con));
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css" />
</head>

<body id="body">
    <form method="post">

    <div id="regform">
        <div id="regdetail">
            <div>
                <span id="regtitle">Registration Form</span>
            </div>
            <div>
                <input type="text" class="reginp" autocomplete="off" name="fullname" placeholder="Fullname">
            </div>
            <div>
                <input type="text" class="reginp" autocomplete="off" name="cnic" placeholder="CNIC">
            </div>
            <div>
                <input type="text" class="reginp" autocomplete="off" name="contact" placeholder="Contact">
            </div>
            <div>
                <input type="email" class="reginp" autocomplete="off" name="email" placeholder="Email">
            </div>
            <div>
                <input type="text" class="reginp" autocomplete="off" name="rollno" placeholder="Roll Number">
            </div>
            <div class="formdrop">

                <select name="drop-down1" id="drop-down1" class="dropdown">
                    <option value="" disabled selected hidden>Select Event</option>
  <option value="Atif Concert">Atif Concert</option>
  <option value="Independence Celebration">Independence Celebration</option>
  <option value="Sports Festival">Sports Festival</option>
</select>
            </div>
            <div class="formdrop">

                <select name="drop-down2" id="drop-down2" class="dropdown">
                    <option value="" disabled selected hidden>Select Ticket Type</option>
  <option value="Classic">Classic</option>
  <option value="Silver">Silver</option>
  <option value="Gold">Gold</option>
  <option value="Diamond">Diamond</option>
  <option value="Platinum">Platinum</option>
  <option value="Premium">Premium</option>
  <option value="VIP">VIP</option>
  <option value="VVIP">VVIP</option>
  <option value="Black Diamond">Black Diamond</option>
</select>
            </div>
            <div>
                <button type="submit" name="Submit" id="regbtn">Submit</button>
            </div>


        </div>
        </form>
        <div id="regformanimate">
            <div>
                <span id="letsmeet">Lets Meet On</span>
                <span class="event"></span>
            </div>
        </div>
    </div>


    <script src="typed.js"></script>
    <script>
        var typed = new Typed('.event', {
            strings: [' The Biggest Concert Ever', ' Independence Event', 'Biggest Sports Festival'],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true
        });
    </script>

</body>

</html>