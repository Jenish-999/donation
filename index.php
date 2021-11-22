<!doctype html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>KIND-HEARTED</title>
     <!-- External CSS -->
     <link rel="stylesheet" href="style/style.css">
</head>


<?php 

    include 'config.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']); 
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);

        $select = "Select * from user_data where email='$email'";
        $select_query = mysqli_query($conn, $select);
        $total_rows = mysqli_num_rows($select_query);

        if(!$total_rows > 0){
                $insert = "Insert into user_data(name,email,mobile,amount) Values('".strtoupper($name)."','".strtoupper($email)."','".strtoupper($mobile)."','".strtoupper($amount)."')";
                $insert_query = mysqli_query($conn, $insert);

                if(!$insert_query){
                    echo "<script>alert('Data is not submitted.');</script>";
                }
        }else{
            echo "<script>alert('This email is already exists!!');</script>";
        }
    }

?>

<body>
    <img id="trans_img" src="images/logo_transparent.png" alt="trans_logo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"><img src="images/logo.jpeg" alt="logo" width="50"
                                height="50"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="schedule.php">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="staff.php">Staff</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="trust.php">Trust</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2 search-box" type="search" placeholder="Search"
                                    aria-label="Search">
                                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row my-5  p-2">
            <div class="col-7 text-center ">
                <!-- <h1>LEFT</h1> -->
                <div class="offer  text-center">
                    <div class="circle">
                        <h4>HaPpY DoNaTiOn</h4>
                    </div>
                </div>
            </div>
            <div class="col-5 p-2 border border-dark rounded">
                <div class="text-center p-2 ">
                    <h1>☺ Donation ☺</h1>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Enter name"
                                autocomplete="off">
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                                autocomplete="off">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="mobile" placeholder="Enter mobile"
                                maxlength="10" autocomplete="off">
                            <label for="floatingInput">Mobile</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="amount" placeholder="Enter amount"
                                autocomplete="off">
                            <label for="floatingInput">Amount /-</label>
                            <div id="emailHelp" class="form-text llb-txt">$100 - $10,000</div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-color fs-5"><span class="spin">☞</span> ⓈⓊⒷⓂⒾⓉ ☜</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <p class="para-footer">&copy 2021 Kind-Hearted, Inc</p>
    </footer>

<script src="script/script.js"></script>

</body>

</html>