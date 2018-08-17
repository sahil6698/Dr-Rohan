<?php
if (!isset($_GET['postId'])){
    header("location:index.php");
}else{
    $postId=$_GET['postId'];
    $query="SELECT * from posts where post_id='$postId'";
    include_once "blog/processPHP/db.php";
    $result=$connection->query($query);
    if ($result->num_rows==0){
        header("location:index.php");
    }else{
        while ($row=$result->fetch_assoc()){
            $title = $row['title'];
            $date = $row['date'];
            $tagLine = $row['tagline'];
            $userId = $row['user_id'];
            $postId = $row['post_id'];
            $body=$row['body'];
            $query3 = "SELECT username FROM user WHERE user_id='$userId'";
            $result3 = $connection->query($query3);
            while ($row3 = $result3->fetch_assoc()) {
                $userName = $row3['username'];
                break;
            }
        }
    }
}
?>



<?php
include "head.php";

include "nav.php"
?>
<body>



<!--======= DETAIL PAGE =========-->
<div class="dep-detail-page blog single-post">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">


                <!--======= Deneral Information =========-->
                <div class="detail-sec" style="padding-left: 5%; padding-right: 5%;">
                    <h1><?php echo $title;?></h1>
                    <span class="dat-sec">post by <strong><?php echo $userName?></strong> on <strong><?php echo $date?></strong></span>
                    <p><?php echo $tagLine;?></p>
                    <p><?php echo base64_decode($body);?></p>
                    <!--======= Details Sec =========-->

                </div>

                <!--======= Share Section =========-->
                <div class="stare-ev">
                    <!--======= TAGS =========-->
                    <div class="tags">
                        <ul>
                            <li>
                                <h5>Tags:</h5>
                            </li>
                            <li>Health</li>
                            <li>Medical</li>
                            <li>news</li>
                            <li>Sport</li>
                        </ul>
                    </div>

                    <!--======= SOCIAL ICONS =========-->
                    <ul class="social_icons pull-right">
                        <li>
                            <h5>Share:</h5>
                        </li>
                        <li class="facebook"><a href="#."><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#."><i class="fa fa-twitter"></i></a></li>
                        <li class="googleplus"><a href="#."><i class="fa fa-google-plus"></i></a></li>
                        <li class="instagram"><a href="#."><i class="fa fa-instagram"></i></a></li>
                        <li class="soundcloud"><a href="#."><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>

            </div>

            <!--======= SIDE BAR =========-->
            <div class="col-sm-3">
                <div class="side-bar">



                    <!--======= MAKE AN APPOINTMENT =========-->
                    <div class="appointment margin-t-40">
                        <h5>Make an appointment</h5>
                        <ul>
                            <li>
                                <input type="text" placeholder="Full name *">
                            </li>
                            <li>
                                <input type="text" placeholder="Email * ">
                            </li>
                            <li>
                                <input type="number" placeholder="Contact Number *">
                            </li>
                            <li>
                                <textarea placeholder="Message"></textarea>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-1">Send request</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Side bar end -->
        </div>
    </div>
</div>












<?php include "footer.php";?>






<!-- Wrap End -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/own-menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.superslides.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/appointment.js"></script>
<script src="js/jquery.downCount.js"></script>
<script src="js/counter.js"></script>
<script src="js/main.js"></script>

</body>
</html>
