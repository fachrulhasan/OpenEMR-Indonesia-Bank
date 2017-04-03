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
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th> No. </th>
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
                                            <td>".$id."</td>
                                            <td>".$patientcredentials."</td>
                                            <td>".$transactiondate."</td>
                                            <td>".$roomcharges."</td>
                                            <td>".$doctorfees."</td>
                                            <td>".$therapyfees."</td>
                                            <td>".$totalfees."</td>
                                            <td>".$status."</td>
                                            <td>
                                                <button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal'>Pay</button>

                                                  <div class='modal fade' id='myModal' role='dialog'>
                                                    <div class='modal-dialog'>

                                                      <!-- Modal content-->
                                                      <div class='modal-content'>
                                                        <div class='modal-header'>
                                                          <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                          <h4 class='modal-title'>Payment Options</h4>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class='modal-footer'>
                                                         <div class='col-sm-6' style='text-align:left;'>
                                                            <div class='thumbnail'>
                                                              <div class='caption'>
                                                                <h4>Bank Transfer</h4>
                                                                <img src='images/card-logo.jpg' style='width:100%; height:auto;'>
                                                                <p style='display: -webkit-box; overflow : auto; text-overflow: ellipsis; -webkit-line-clamp: 3; -webkit-box-orient: vertical;'>Please transfer your totalfees and confirm your payment.</p>
                                                                <p><a href='https://goo.gl/forms/2AVTJz4ipDygF94l1' target='_blank' class='btn btn-primary' role='button'>Confirmation Page</a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          
                                                          <div class='col-sm-6' style='text-align:left;'>
                                                            <div class='thumbnail'>
                                                              <div class='caption'>
                                                                <h4>Cash</h4>
                                                                <p style='display: -webkit-box; overflow : auto; text-overflow: ellipsis; -webkit-line-clamp: 3; -webkit-box-orient: vertical;'>Please go to our hospital and provide us your payment number.</p>
                                                                 <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63458.71986995298!2d106.57889868723177!3d-6.241314102082738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe9e6a9c1b4f%3A0x6a246e02359bc382!2sPerumahan+RS+Jantung+Harapan+Kita!5e0!3m2!1sid!2sid!4v1490857309211' width='100%' height='auto' frameborder='0' style='border:0' allowfullscreen></iframe>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        
                                                          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                        </div>
                                                      </div>

                                                    </div>
                                                  </div>
                                                
                                                
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
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

    </html>