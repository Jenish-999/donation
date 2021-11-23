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

<body>
    <!-- <img id="trans_img" src="images/logo_transparent.png" alt="trans_logo"> -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php"><img
                                src="images/logo.jpeg" alt="logo" width="50" height="50"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"
                                        href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Schedule</a>
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
        <div class="row my-5 p-2">
            <div class="col-12 border3d">
                <div class="container">
                    <!-- Codrops top bar -->

                    <header>
                        <h1>Animated <span>Donation</span> 3D Bar Chart</h1>
                        <h2 class="ie-note ie-note-1">Please view this in a modern browser.</h2>
                        <h2 class="ie-note ie-note-2">CSS3 Transitions don't work in Internet Explorer &lt; 10</h2>
                    </header>

                    <section class="main">

                        <span class="button-label">Size:</span>
                        <input type="radio" name="resize-graph" id="graph-small" /><label
                            for="graph-small">Small</label>
                        <input type="radio" name="resize-graph" id="graph-normal" checked="checked" /><label
                            for="graph-normal">Normal</label>
                        <input type="radio" name="resize-graph" id="graph-large" /><label
                            for="graph-large">Large</label>

                        <span class="button-label">Color:</span>
                        <input type="radio" name="paint-graph" id="graph-blue" checked="checked" /><label
                            for="graph-blue">Blue</label>
                        <input type="radio" name="paint-graph" id="graph-green" /><label for="graph-green">Green</label>
                        <input type="radio" name="paint-graph" id="graph-rainbow" /><label
                            for="graph-rainbow">Rainbow</label>

                        <span class="button-label">Continant:</span>
                        <!-- <input type="radio" name="fill-graph" id="f-none" /><label for="f-none">None</label> -->
                        <input type="radio" name="fill-graph" id="f-product1" checked="checked" /><label
                            for="f-product1">America</label>
                        <input type="radio" name="fill-graph" id="f-product2" /><label for="f-product2">Asia</label>
                        <input type="radio" name="fill-graph" id="f-product3" /><label for="f-product3">Europe</label>

                        <ul class="graph-container">
                            <li>
                                <span>Old Age</span>
                                <div class="bar-wrapper">
                                    <div class="bar-container">
                                        <div class="bar-background"></div>
                                        <div class="bar-inner">25</div>
                                        <div class="bar-foreground"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Disable</span>
                                <div class="bar-wrapper">
                                    <div class="bar-container">
                                        <div class="bar-background"></div>
                                        <div class="bar-inner">50</div>
                                        <div class="bar-foreground"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Children</span>
                                <div class="bar-wrapper">
                                    <div class="bar-container">
                                        <div class="bar-background"></div>
                                        <div class="bar-inner">75</div>
                                        <div class="bar-foreground"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Poor</span>
                                <div class="bar-wrapper">
                                    <div class="bar-container">
                                        <div class="bar-background"></div>
                                        <div class="bar-inner">100</div>
                                        <div class="bar-foreground"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span>Animal</span>
                                <div class="bar-wrapper">
                                    <div class="bar-container">
                                        <div class="bar-background"></div>
                                        <div class="bar-inner">50</div>
                                        <div class="bar-foreground"></div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="graph-marker-container">
                                    <li style="bottom:25%;"><span>25%</span></li>
                                    <li style="bottom:50%;"><span>50%</span></li>
                                    <li style="bottom:75%;"><span>75%</span></li>
                                    <li style="bottom:100%;"><span>100%</span></li>
                                </ul>
                            </li>
                        </ul>

                    </section>

                </div>
            </div>
            <div class="col-12 text-center my-2 rounded border3d border border-dark">
                <h1>Daily Activities</h1>
                <h4 id="demo">hi</h4>
                <table class="table table-striped table-bordered border-dark" onClick="myDate()">
                    <thead>
                        <tr>
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">Time</th>
                            <th scope="col">Task</th>
                            <th scope="col">Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <th scope="row">1</th> -->
                            <td>9:00AM-10:00AM</td>
                            <td>ChildCare Hospital</td>
                            <td colspan="2">Participants have to present in main ground on time</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>10:30AM-11:30AM</td>
                            <td>School Donation</td>
                            <td colspan="2">Participants can bring their gifts for students</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>12:00PM-01:30PM</td>
                            <td>Lunch Break</td>
                            <td colspan="2">All participants lunch break will take place in gorge farm</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>2:00PM-03:30PM</td>
                            <td>Social Welfare</td>
                            <td colspan="2">Kind-Hearted will provide happy tasks to the participants</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>04:00PM-04:30PM</td>
                            <td>Nap Break</td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>04:30PM-05:30PM</td>
                            <td>Old Age Treatment</td>
                            <td colspan="2">Participants will be assign with tools for regular checkup</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>06:00PM-07:30PM</td>
                            <td>Happy Message Spreading</td>
                            <td colspan="2">Team will given task to spread happy & faithful message to public</td>
                        </tr>
                        <tr>
                            <!-- <th scope="row">2</th> -->
                            <td>07:30PM-08:30PM</td>
                            <td>Seminar & management</td>
                            <td colspan="2">Team will know the pre-preparation for upcoming events</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <p class="para-footer2">&copy 2021 Kind-Hearted, Inc</p>
    </footer>

    <script src="script/modernizr.custom.04022.js"></script>
    <script>
    window.onload = ()=> {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = dd + '/' + mm + '/' + yyyy;
        document.querySelector("#demo").innerHTML = today;
        console.log(today);
    };
    </script>
</body>

</html>