<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@600&family=Roboto:wght@400;500;700&family=Sarabun:ital,wght@1,300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php if (isset($_GET['id'])) {
    $id = $_GET['id'];} 
    $conn = mysqli_connect("localhost","root","","basket");
    $sql="SELECT * from teams  where id='$id'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    echo($count);
    $row = $result -> fetch_assoc();
    $team=$row["name"];
    $win=$row["win"];
    $lose=$row["lose"];
     $result -> free_result();
    ?>














    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li>
                    <a href="Status.html"> Status </a>
                </li>
                <li>
                    <a href="history.html">Schedule/History</a>
                </li>
                <li>
                    <a href="statistics.html">Team Statistics</a>
                    
                </li>

                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="#">Sample</a>
                </li>
                <li>
                    <a href="#">Sample</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 " style="color:white;" id="scores">
                        <h2 class="record">Record:</h2>

                        <div class="dropdown">
                            <button class="dropbtn">Choose Team</button>
                            <div class="dropdown-content">
                              <a href="index.php?id=13" id="thirteen">U13</a>
                              <a href="index.php?id=16" id="thirteen">U16</a>  
                              <a href="index.php?id=19" id="thirteen">U19</a>
                            </div>
                        </div>

                        <p style="font-family: courier; font-size: 24px" id="choice-team"> 
                            <h3><?php echo($team);?></h3>
                        </p>


                        <div class="score-board-wrapper">
                            <div class="sb-1-1">
                                <p id="win-text">Win</p>
                            </div>
                            <div class="sb-1-1">
                                <p>Loss</p>
                            </div>
                        </div>

                        <div class="score-board-wrapper">
                            <div class="sb-1-2">
                                <p id="win-text"></p><?php echo($win);   ?></p>
                            </div>
                            <div class="sb-1-2" id="loss-num">
                                <p><?php echo($lose);?></p>
                            </div>
                        </div>




                        <br><br>

                        <div class="Highscoreplayer">
                            <table class="content-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>ppg</th>    
                                    </tr>
                                </thead>  
                                <tbody>
                                    <tr>
                                        <th>Steph Curry</th>
                                        <th>27.5</th>
                                    </tr>
                                    <tr>
                                        <th>Tim Duncan</th>
                                        <th>23.8</th>
                                    </tr>
                                    <tr>
                                        <th>Kawhi Leonard</th>
                                        <th>22.2</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <br><br><br>
 <!-- <table class="table3" >
    <th class="th2 text-center">
            <tr><th class="text-center"> Upcoming Games</th></tr>
        <tr><th class="text-center">match on 24 November</th></tr>
        <tr><th class="text-center">match on 25 November</th></tr>
        <tr><th class="text-center">match on 26 Novemb</th></tr>
        <tr><th class="text-center">match on 27 November</th></tr>
        <tr><th class="text-center">match on 28 November</th></tr>
        <tr><th class="text-center">match on 29 November</th></tr>
         </marquee>
    </th>
 </table> --><div class = "table4">
    <div class="mtt1">Up coming games</div>
    <marquee class="marq" bgcolor = "white" direction = "up" loop="" >
        
        <div class="mtt-2">match on 24 November</div>
        <div class="mtt-2">match on 25 November</div>
        <div class="mtt-2">match on 26 Novemb</div>
        <div class="mtt-2">match on 27 November</div>
        <div class="mtt-2">match on 28 November</div>
        <div class="mtt-2">match on 29 November</div>
       
        
    </marquee>
    </div>
<br><br><br><br><br><br>
    <div class="n1"><p> website link1</p></div>
    <div class="n1"><p> website link1</p></div>
    <div class="n1"><p> website link1</p></div>
    <div class="n1"><p> website link1</p></div>



                    </div>
                </div>
                <!-- /#wrapper -->


            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</body>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>




</html>