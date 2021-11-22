<!doctype html>
<html lang="en">

<head>
    <?php include 'links.php';?>
    <title>KIND-HEARTED</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style2.css">
    <link rel="stylesheet" href="style/demo.css">
    <link rel="stylesheet" href="style/graph.css">
    <link rel="stylesheet" href="style/normalize.css">

</head>
<style>
.fa-edit {
    color: blue;
}

.fa-trash {
    color: brown;
}
</style>

<body>
    <!-- <img id="trans_img" src="images/logo_transparent.png" alt="trans_logo"> -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="http://localhost/PHP_Projects/Donaiton/index.php"><img
                                src="images/logo.jpeg" alt="logo" width="50" height="50"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="http://localhost/PHP_Projects/Donaiton/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Trust</a>
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

    </div>
    <div class="col-12 text-center my-2 rounded border3d border border-dark">
        <h1>Community Members List</h1>
        <table class="table table-striped table-bordered border-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">MOBILE</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col">DATE</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>
            <tbody>

                <?php 
        include 'config.php';

        $select = "Select * from user_data";
        $query_fire = mysqli_query($conn, $select);

        while($res = mysqli_fetch_array($query_fire)){
            ?>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><?php echo $res['id'];?></td>
                    <td><?php echo $res['name'];?></td>
                    <td><?php echo $res['email'];?></td>
                    <td><?php echo $res['mobile'];?></td>
                    <td><?php echo $res['amount'];?>/-</td>
                    <td><?php echo $res['date'];?></td>
                    <td><a href="update.php?ids=<?php echo $res['id'];?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete.php?ids=<?php echo $res['id'];?>"><i class="fas fa-trash"></i></a></td>
                </tr>
                <?php
        }

    
    ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    <footer>
        <p class="para-footer2">&copy 2021 Kind-Hearted, Inc</p>
    </footer>

    <script src="script/modernizr.custom.04022.js"></script>

</body>

</html>