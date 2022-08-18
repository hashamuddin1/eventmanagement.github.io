<?php
include  'connect.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ADMIN PANEL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" />
    </head>

    <body>
        <div id="adminheading">
            <h5>Admin Panel</h5>
        </div>
        <div id="userentry">

            <table class="table" id="entrytable">
                <thead>
                    <tr>
                        <th scope="col">USER ID</th>
                        <th scope="col">USER NAME</th>
                        <th scope="col">CNIC NUMBER</th>
                        <th scope="col">CONTACT</th>
                        <th scope="col">EMAIL</th>
                            <th scope="col">ROLL NUMBER</th>
                            <th scope="col">EVENT</th>
                            <th scope="col">TICKET TYPE</th>
                            <th scope="col">TICKET NUMBER</th>
                            <th scope="col">DATE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                
                    $sql='select * from `user1`';
                    $result=mysqli_query($con,$sql);
                    if ($result) {
                      while($row=mysqli_fetch_assoc($result)){
                        $fname=$row['fullname'];
                        $email=$row['email'];
                        $rollno=$row['rollno'];
                        $cnic=$row['cnic'];
                        $contact=$row['contact'];
                        $email=$row['email'];
                        $event=$row['event'];
                        $tickettype=$row['tickettype'];
                        $date=$row['date'];
                        $ticketnumber=$row['ticketnumber'];
                        $userid=$row['userid'];
                        echo '<tr>
                        <td scope="col">'.$userid.'</td>
                        <td scope="col">'.$fname.'</td>
                        <td scope="col">'.$cnic.'</td>
                        <td scope="col">'.$contact.'</td>
                        <td scope="col">'.$email.'</td>
                        <td scope="col">'.$rollno.'</td>
                        <td scope="col">'.$event.'</td>
                        <td scope="col">'.$tickettype.'</td>
                        <td scope="col">'.$ticketnumber.'</td>
                        <td scope="col">'.$date.'</td>
                        
                      </tr>';
                      }
                        
                    }
                
                    ?>

                </tbody>
            </table>


        </div>

    </body>

    </html>