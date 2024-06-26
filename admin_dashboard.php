<?php
session_start();
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    //this calculates values automatically 
    sum();
    $("#num1, #num2").on("keydown keyup", function() {
        sum();
    });
});

function sum() {

            var num1 = document.getElementById('num1').value;
            var num2 = document.getElementById('num2').value;
            if (num1 == "" || num2 == "") {

                num1 = 0;
                num2 = 0;
            
      var result = parseInt(num1) - parseInt(num2);
            if (!isNaN(result) && result >= 0) {
                document.getElementById('subt').value = result;
            }
            else{

                alert("Total amount less than pay amount");
            }
            }

            else{

                var result = parseInt(num1) - parseInt(num2);
            if (!isNaN(result) && result >= 0) {
                document.getElementById('subt').value = result;
            }
            else{

                alert("Total amount less than pay amount");
            }

            }
        }
    </script>

    <style type="text/css">
        @media (min-width: 576px) {
            .h-sm-100 {
                height: 100%;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto">
        <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                <a href="#" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5">STUDENT<span class="d-none d-sm-inline"> Manage</span></span>
                </a>
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-5 bi-cash-coin"></i><span class="ms-1 d-none d-sm-inline">Finance</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#FinanceModal">Finanacial Record</a></li>
                            <li><a class="dropdown-item" href="finance_table.php">Manage Finance</a></li>
                            <li><a class="dropdown-item" href="user_record_report.php">Finance Report</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-5 bi-book-half"></i><span class="ms-1 d-none d-sm-inline">Courses</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="manage_courses.php">Add/Manage Courses</a></li>
                            <li><a class="dropdown-item" href="manage_course_assessment.php">Add/Manage Assessments</a></li>
                        </ul>
                        
                    </li>
                    <li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fs-5 bi-person-lines-fill"></i><span class="ms-1 d-none d-sm-inline">Faculty</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="manage_faculty.php">Add/Manage Faculty</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="nav-link px-sm-0 px-2" data-bs-toggle="modal" data-bs-target="#Admin_Password_Modal">
                            <i class="fs-5 bi-shield-lock"></i><span class="ms-1 d-none d-sm-inline">Change Password</span></a>
                    </li>
                </ul>
                <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="images/user_icon.png" alt="" width="38" height="38" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"><?php echo $_SESSION["username"];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#Admin_Password_Modal">Change Passsword</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#LogoutModal">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100">
            <main class="row overflow-auto">
                <div class="col pt-4">
                    <!-- Breadcrumbs-->
                  <ol class="breadcrumb bg-light p-2">
                    <li class="breadcrumb-item">
                      <a href="admin_dashboard.php" class="text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                  </ol>

                  <!-- Icon Cards-->
                  <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                      <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fs-5 bi-people"></i>
                          </div>
                          <div class="mr-5"></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 text-decoration-none" href="user_table.php">
                          <span class="float-left">View Users</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                      <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                          <div class="card-body-icon">
                            <i class="fs-5 bi-table"></i>
                          </div>
                          <div class="mr-5"></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1 text-decoration-none" href="finance_table.php">
                          <span class="float-left">View Records</span>
                          <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                          </span>
                        </a>
                      </div>
                    </div>
                    


                </div>
            </main>
            <footer class="row bg-light py-2 mt-auto">
                <div class="copyright text-center my-auto">
                  <span>Copyright © 2021</span>
                </div>
            </footer>
        </div>
    </div>
</div>
<!-- Logout Modal-->

    <div class="modal fade" id="LogoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <a href="logout.php" class="btn btn-primary">Logout</a>
          </div>
        </div>
      </div>
    </div>

  <!----------------------------------- Finance Entry Modal------------------------>
    <div class="modal fade" id="FinanceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Record</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
            </button>
          </div>
          <div class="modal-body">
            <section class="form-register">
              <div class="container">
                <form action="finance_entry.php" method="POST" class="form" enctype="multipart/form-data" onsubmit="return validation()">
                  <div class="row">
                    <div class="col-sm-6">

                      <label for="username">UserName</label>
                      <span id="username" class="required"></span><br>
                      <input type="text" id="username" name ="username" placeholder="enter Username"><br><br>
                      
                      <label for="sapid">SapId</label>
                      <span id="sapid" class="required"></span><br>
                      <input type="text" id="sapid" name ="sapid" placeholder="enter sapid"><br><br>

                      <label for="class">Class</label>
                      <span id="class" class="required"></span><br>
                      <input type="text" id="class" name ="class" placeholder="enter class"><br><br>

                      <label for="totalamount">Total Amount</label>
                      <span id="totalamount" class="required"></span><br>
                      <input type="text" id="num1" name ="totalamount" placeholder="enter Total Amount"><br><br>
                      
                      
                    </div>
                    <div class="col-sm-6">

                      <label for="amountpay">Amount Pay</label>
                      <span id="amountpay" class="required"></span><br>
                      <input type="text" id="num2" name ="amountpay" placeholder="enter Amount Pay"><br><br>

                      <label for="remainingamount">Remaining Amount</label>
                      <span id="remainingamount" class="required"></span><br>
                      <input type="text" id="subt" name ="remainingamount" placeholder="Remaining Amount"><br><br>

                      <label for="date">Date</label>
                      <span id="Datebirth" class="required"></span><br>
                      <input type = "date" id="date"  name="date" placeholder = "enter Date" ><br><br>


                      <input type="submit" name="submit" value="Submit">

                    </div>
                  </div>
                </form>
              </div>
            </section>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>
 <!----------------------------------- Modal for Admin Password Change --------------------------------------->
  
    <!-- Modal -->
    <div class="modal fade" id="Admin_Password_Modal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="background: #1f1f2e; height: 100px;">

            <h2 class="fa fa-lock"> Admin Password</h2>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <h4 class="modal-title"></h4>
          </div>
          <div class="modal-body" style="background-image: linear-gradient(#c63939, #024759);">
            
            <section class="logsection">
               <div class="logform">

                  <?php 
                              
                       if(isset($_GET['empty']))
                       {
                                 
                           echo '<script>alert("Please Enter Username and Password")</script>';
                       }

                        if(isset($_GET['notcorrect']))
                        {
                                    
                            echo '<script>alert("Old Password is Incorrect")</script>';
                        }

                        if(isset($_GET['updated']))
                        {
                                    
                            echo '<script>alert("Password Updated Successfully")</script>';
                        }

                        if(isset($_GET['errorupdate']))
                        {
                                    
                            echo '<script>alert("Error")</script>';
                        }
                          
                  ?>

                  <form action="admin_password.php" method="POST">

                  <input type="hidden" name="username" value="<?php echo $_SESSION["username"];?>">

                  <label for=""><b>Old Password</b></label>
                  <span id="" class="require"></span><br>
                  <input type = "password" id  ="" name="oldpass" placeholder = "Enter Old Password" required="value"><br><br>
                  
                  <label for=""><b>Password</b></label>
                  <span id="" class="require"></span><br>
                  <input type = "password" id  ="password" name="newpass" placeholder = "Enter New password" required="value"><br><br>
                  <button type = "submit"id = "submits" name="submit"><b>Change Password</b></button>
                  </form>
                </div>
            </section>

          </div>
          <div class="modal-footer" style="background: #1f1f2e;">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </div>
        
      </div>
    </div>
</body>
</html>