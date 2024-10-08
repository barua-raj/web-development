<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student-database-management";

    // Create connection
    $conn = new mysqli(localhost, root, , student-database-management);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png" type="logo">
    <title>Student Database Management</title>
    <!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
      
    <header>
        <nav class="navbar navbar-expand-lg navbar-success bg-info p-1">
            <div class="container">
                
                <!---
                <a class="navbar-brand" href="#">
                    
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                --->
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><b>HOME</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>STUDENT LIST</b></a>
                    </li>
                      
                    <!--- Dropdown  
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    --->
                      
                  </ul>
                  
                  <!--- Search Bar
                  <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
                  --->
                    
                </div>
                
            </div>
        </nav>
    </header>
    
    <!--- Form Section --->
    <section class="form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-box">
                        
                        <?php
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                            
                        $course = $_POST['stu_course'];
                        echo $course;
                        $batch = $_POST['stu_batch'];
                        echo $batch;
                        $name = $_POST['stu_name'];
                        echo $name;
                        $phone = $_POST['stu_phone'];
                        echo $phone;
                        $email = $_POST['stu_email'];
                        echo $email;
                        $address = $_POST['stu_address'];
                        echo $address;
                            
                        $sql = INSERT INTO student_info()values();
    
                        }
                                                    
                        ?>
                        
                        <form action="" method="POST">
                            
                          <div class="mb-3">
                            <label class="form-label">Course Name</label>
                            <input type="text" class="form-control" name="stu_course">
                          </div>
                            
                          <div class="mb-3">
                            <label class="form-label">Batch No.</label>
                            <input type="text" class="form-control" name="stu_batch">
                          </div>
                            
                          <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="stu_name">
                          </div>
                            
                          <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" name="stu_phone">
                          </div>
                            
                          <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control" name="stu_email">
                          </div>
                          
                          <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="stu_address">
                          </div>
                          
                          <div class="mb-3">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </section>
      
    <footer class="bg-dark footer-section mt-3">
        <div class="text-center">
            <p class="text-white">Developed by Joyraz Barua</p>
        </div>
    </footer>
      
      
      
    <!--- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --->
    <script src="js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
