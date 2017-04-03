<?php
    if(isset($_POST["submit"])){
    include "db/koneksi.php";

    $sql = "INSERT INTO admin_payment_give (patientcredentials, transactiondate, roomcharges, doctorfees, therapyfees, totalfees, status)
    VALUES ('".$_POST["patientcredentials"]."','".$_POST["transactiondate"]."','".$_POST["roomcharges"]."','".$_POST["doctorfees"]."','".$_POST["therapyfees"]."','".$_POST["totalfees"]."','".$_POST["status"]."')";

    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }

    $conn->close();
    }
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
        <title>Input Payment for Patient</title>
    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="page-header">
                        <h3>Insert New Payment</h3>
                        <a href="read_payment.php" class="btn btn-info" role="button">View Payment</a>
                    </div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="patientcredentials">Patient Credentials</label>
                            <?php
                              mysql_connect("localhost", "root","") or die(mysql_error());
                              mysql_select_db("openemr") or die(mysql_error());
                              $query = "SELECT * FROM patient_data";
                              $result = mysql_query($query) or die(mysql_error()."[".$query."]");
                            ?>

                                <div class="form-group">
                                    <select name="patientcredentials" id="patientcredentials" class="selectpicker" data-width="100%" data-show-subtext="true" data-live-search="true">
                      <?php
                        while ($row = mysql_fetch_array($result))
                        {
                            $fname = $row['fname'];
                            $mname = $row['mname'];
                            $lname = $row['lname'];
                            $sex = $row['sex'];
                            $DOB = $row['DOB'];
                            
                            
                          echo "<option value='".$fname." ".$mname." ".$lname." - ".$sex." - ".$DOB."'>";
                              
                              echo ($row["fname"]." ".$row['mname']." ".$row['lname']." - ".$row['sex']." - ".$row['DOB']);
                            
                          echo "</option>";
                        }
                      ?>
                      </select>
                                </div>
                        </div>


                        <div class="form-group">
                            <label for="transactiondate">Transaction Date</label>
                            <input type="text" id="datepicker" name="transactiondate" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="roomcharges">Room Charges</label>
                            <input onblur="findTotal()" type="number" min="0" max="any" name="roomcharges" id="roomcharges" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="doctorfees">Doctor Fees</label>
                            <input onblur="findTotal()" type="number" min="0" max="any" name="doctorfees" id="doctorfees" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="therapyfees">Therapy Fees</label>
                            <input onblur="findTotal()" type="number" min="0" max="any" name="therapyfees" id="therapyfees" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="totalfees">Total Fees</label>
                            <input type="number" min="0" max="any" name="totalfees" id="totalfees" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="status">Payment Status</label>
                            <br>
                            <input type = 'Radio' name ='status' value= 'succeed'>Succeed
                            <br>
                            <input type = 'Radio' name ='status' value= 'pending'>Pending
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="js/datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/totalfees.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>