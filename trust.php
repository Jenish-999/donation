<!doctype html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>KIND-HEARTED</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>
<style>
body {
    background-color: #E4EFE7;
}
.total-center{
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items: center;
}
.fa-typo3{
    font-size:15rem;
}
.border-right{
    border-right:none;
}
.border-left{
    border-left:none;
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
                                    <a class="nav-link" href="staff.php">Staff</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Trust</a>
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
        <div class="row my-5 text-center p-2">

            <div class="col-6 border border-secondary border-right p-5">
                <h2>Your Trust is our reputation</h2>
                <div class="col py-1">
                    Where does it come from?
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                    Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </div>
               
            </div>
            <div class="col-6  border border-secondary border-left total-center">
                    <i class="fab fa-typo3 bold"></i>
            </div>


        </div>
    </div>

    <footer>
        <p class="para-footer">&copy 2021 Kind-Hearted, Inc</p>
    </footer>


</body>

</html>