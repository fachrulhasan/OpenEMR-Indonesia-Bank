<?php
    include "db/koneksi.php";
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.1.1/jquery-confirm.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <title>View Payment for Patient</title>
    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>View Payment</h3>
                        <a href="input_payment.php" class="btn btn-info" role="button">Input Payment</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th> Patient Credentials </th>
                                <th> Transaction Date </th>
                                <th> Room Charges </th>
                                <th> Doctor Fees </th>
                                <th> Therapy Fees </th>
                                <th> Total Fees </th>
                                <th> Status </th>
                                <th> Action </th>

                            </tr>

                            <?php  
                            
                                mysql_connect("localhost", "root","") or die(mysql_error());
                                mysql_select_db("openemr") or die(mysql_error());
                                $query = "SELECT * FROM admin_payment_give";
                                $result = mysql_query($query) or die(mysql_error()."[".$query."]");
                                
                                while ($row = mysql_fetch_array($result))
                                { 
                                    $id = $row['id'];
                                    $patientcredentials = $row['patientcredentials'];
                                    $transactiondate = $row['transactiondate'];
                                    $roomcharges = $row['roomcharges'];
                                    $doctorfees = $row['doctorfees'];
                                    $therapyfees = $row['therapyfees'];
                                    $totalfees = $row['totalfees'];
                                    $status = $row['status'];
                              
                                        echo "    
                                            <tr>

                                            <td>".$patientcredentials."</td>
                                            <td>".$transactiondate."</td>
                                            <td>".$roomcharges."</td>
                                            <td>".$doctorfees."</td>
                                            <td>".$therapyfees."</td>
                                            <td>".$totalfees."</td>
                                            <td>".$status."</td>
                                            <td>
                                                <a href=\"delete.php?id=".$row['id']."\"><i class='fa fa-trash-o'></i></a> |
                                                <a href=\"approved.php?id=".$row['id']."\"><i class='fa fa-check'></i></a> |
                                                <a href=\"pending.php?id=".$row['id']."\"><i class='fa fa-close'></i></a>
                                                
                                            </td>

                                            </tr> 
                                            ";
                                          
                                   
                                    
                                 
                                }

                                ?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="js/datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>