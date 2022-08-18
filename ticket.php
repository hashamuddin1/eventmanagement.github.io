<?php
include  'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link rel="stylesheet" href="ticket.css" />
</head>

<body>
    <div id="ticket">
        <div>Your Ticket</div>
    </div>
    <div id="ticket1">
    <?php
                
                    $sql='select * from `user1` WHERE userid=(SELECT max(userid) FROM `user1`)';
                    $result=mysqli_query($con,$sql);
                    if ($result) {
                        $row=mysqli_fetch_assoc($result);
                        $fname=$row['fullname'];
                        $id=$row['userid'];
                        $email=$row['email'];
                        $rollno=$row['rollno'];
                        $cnic=$row['cnic'];
                        $contact=$row['contact'];
                        $event=$row['event'];
                        $tickettype=$row['tickettype'];
                        $date=$row['date'];
                        $ticketnumber=$row['ticketnumber'];
                        echo '<div class="ticketdata">FULL NAME: '.$fname.'</div>';
                        echo '<div class="ticketdata">USER ID: '.$id.'</div>';
                        echo '<div class="ticketdata">EMAIL: '.$email.'</div>';
                        echo '<div class="ticketdata">ROLL NUMBER: '.$rollno.'</div>';
                        echo '<div class="ticketdata">CNIC: '.$cnic.'</div>';
                        echo '<div class="ticketdata">CONTACT: '.$contact.'</div>';
                        echo '<div class="ticketdata">EVENT: '.$event.'</div>';
                        echo '<div class="ticketdata">TICKET TYPE: '.$tickettype.'</div>';
                        echo '<div class="ticketdata">DATE: '.$date.'</div>';
                        echo '<div class="ticketdata">TICKET NUMBER: '.$ticketnumber.'</div>';
                    }
    ?>

    
    </div>
    <div id="btndownload">
        <button id="download">Download</button>
    </div>

    
</body>


</html>