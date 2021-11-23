<!doctype html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>KIND-HEARTED</title>
    <!-- External CSS -->
   
</head>
<style>
.staff-img{
    background-position: center;
background-size: cover;
object-fit: cover;
}
.person-dec li{
    margin-top: 1rem;
    margin-bottom: 2rem;
    list-style: none;
}
.social-links{
    display:flex;
    justify-content:center;
    align-items: center;
    position: relative;
    /* margin-bottom:2rem; */
}
.social-links p{
    margin-right:1rem;
}
.underline{
    height: 1px;
    margin-bottom:2rem;
    width: 60px;
    margin:auto;
    background-color:#34343A;
    border-radius:10px;
}
.fab{
    font-size:1.1rem;
}
.fa-facebook-f:hover{
    transition: .3s ease-in;
    color: #4267B2;
    cursor: pointer;
}
.fa-twitter:hover{
    transition: .3s ease-in;
    color: #1DA1F2;
    cursor: pointer;
}
.fa-google-plus-g:hover{
    transition: .3s ease-in;
    color: #db4a39;
    cursor: pointer;
}
</style>

<body>
    <!-- <img id="trans_img" src="images/logo_transparent.png" alt="trans_logo"> -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.jpeg" alt="logo" width="50"
                                height="50"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="schedule.php">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Staff</a>
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
        <div class="row my-5">
            <div class="col-3">
                <img class="staff-img " src="images/st1.jpg" alt="st1" height="300" width="300">
            </div>
            <div class="col-3 text-center txt-area border border-secondary" style="height:300px;">
                
                <ul class="person-dec">
                    <li><h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>

            <div class="col-3">
                <img class="staff-img " src="images/st2.jpg" alt="st1" height="300"  width="300"> 
            </div>
            <div class="col-3 text-center txt-area border border-secondary"  style="height:300px;">
            
                <ul class="person-dec">
                    <li> <h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>
            

        </div>

        <div class="row my-5">
        <div class="col-3 text-center txt-area border border-secondary"  style="height:300px;">
                
                <ul class="person-dec">
                    <li><h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <img class="staff-img " src="images/st3.jpg" alt="st3" height="300" width="300">
            </div>
            
            <div class="col-3 text-center txt-area border border-secondary"  style="height:300px;">
                
                <ul class="person-dec">
                    <li><h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <img class="staff-img " src="images/st4.jpeg" alt="st4" height="300"  width="300"> 
            </div>
           
            

        </div>

        <div class="row my-5">
            <div class="col-3">
                <img class="staff-img " src="images/st5.jpg" alt="st5" height="300" width="300">
            </div>
            <div class="col-3 text-center txt-area border border-secondary"  style="height:300px;">
               
                <ul class="person-dec">
                    <li> <h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>

            <div class="col-3">
                <img class="staff-img " src="images/st6.jpg" alt="st6" height="300"  width="300"> 
            </div>
            <div class="col-3 text-center txt-area border border-secondary"  style="height:300px;">
                
                <ul class="person-dec">
                    <li><h4>DIANA DOE</h4></li>
                    <li class="des">Project Manager</li>
                    <li class="description">Donec varius ultrices purus. ullam sit amet sapien tortor.</li>
                    <li class="underline"></li>
                    <li class="social-links">
                    <p><i class="fab fa-facebook-f"></i></p>
                    <p><i class="fab fa-twitter"></i></p>
                    <p><i class="fab fa-google-plus-g"></i></p>
                    </li>
                </ul>
            </div>
            

        </div>
    </div>

    <footer>
        <p class="para-footer">&copy 2021 Kind-Hearted, Inc</p>
    </footer>


</body>

</html>