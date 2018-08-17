<?php include "head.php";?>


<?php include "nav.php";?>

<body>
<div class="dep-detail-page blog single-post">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <!--======= Deneral Information =========-->
                <div class="detail-sec" style="padding-left: 5%; padding-right: 5%;">

                    <!--======= Images =========-->
                    <div class="img-single"> <img class="img-responsive" src="../images/blog/2/blog2_1.jpg" alt="" ></div>

                    <!--======= Deneral Information =========-->
                    <div class="detail-sec">
                        <h4>Breast Cancer Treatment Completion</h4>
                        <span class="dat-sec">post by <strong>Rohan Khandelwal</strong> on <strong>November 5th, 2017</strong></span>
                        <p>The incidence of breast cancer in India is increasing at an alarming rate and more and more ladies are being detected with this disease in their 30’s and 40’s. </p>
                        <p>Breast cancer not only affects the physical appearance of the patient but also has a huge impact on their mental and psychological well being. In addition to the patient, the family also becomes part of the treatment.</p>
                        <!--======= Details Sec =========-->
                        <p>Once patients finish their treatment, it is important for them to get back to their daily routine, so that they can keep their mind off the disease. Family, friends and strong support group play a huge role in this aspect of a breast cancer warrior’s journey.</p>
                        <p>To celebrate these warriors, we recently organised a support group meeting at W Pratiksha Hospital, Gurgaon, which was well attended by many breast cancer patients and their families. </p>
                        <!--======= BLOCKQUOTE =========-->

                        <?php
                        $fi = new FilesystemIterator('../images/blog/1/', FilesystemIterator::SKIP_DOTS);
                        $fileCount= iterator_count($fi);
                        for ($index=2;$index<=$fileCount;$index++){
                            ?>
                            <li class="col-sm-12 item cardiology ophthalmology" style="margin: 5px;">
                                <section> <img class="img-responsive" src="../images/blog/2/blog2_<?php echo $index;?>.jpg" alt="">
                                    <div class="item-over"> <a href="../images/blog/2/blog2_<?php echo $index;?>.jpg" class="item-in pa-20">
                                        </a> </div>
                                </section>
                            </li>
                            <?php
                        }
                        ?>
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

                    </div>
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

<?php include "../footer.php";?>

<!-- Wrap End -->
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/own-menu.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.superslides.js"></script>
<script src="../js/masonry.pkgd.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.flexslider-min.js"></script>
<script src="../js/appointment.js"></script>
<script src="../js/jquery.downCount.js"></script>
<script src="../js/counter.js"></script>
<script src="../js/main.js"></script>
</body>

</html>
