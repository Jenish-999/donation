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
                    In the United States, in 2007, the Bureau of Labor Statistics found that American households in the lowest fifth in terms of wealth, gave on average a higher percentage of their incomes to charitable organizations than those households in the highest fifth.[1] Charity Navigator writes that, according to Giving USA, Americans gave $298 billion in 2011 (about 2% of GDP).[2] The majority of donations were from individuals (73%), then from bequests (about 12%), foundations (2%) and less than 1% from corporations. The largest sector to receive donations was religious organizations (32%), then education (13%). Giving has increased in 3 out of 4 years since 1971 (with the occasional declines occurring around recession years).[2]
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
