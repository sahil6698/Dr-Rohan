<?php
include "head.php";

include "nav.php";

?>

<!--======= RECENT CASES =========-->
<section class="gallery-pages">
    <div class="portfolio-wrapper">
        <div class="container popup-gallery">
            <!--======= GALLERY ROW =========-->
            <ul class="items gallery-item row">
                <?php
                $fi = new FilesystemIterator('images/gallery/', FilesystemIterator::SKIP_DOTS);
                $fileCount= iterator_count($fi);
                for ($index=1;$index<=$fileCount;$index++){
                    ?>
                    <li class="col-sm-4 item cardiology ophthalmology">
                        <section> <img class="img-responsive" src="images/gallery/<?php echo $index;?>.jpg" alt="">
                            <div class="item-over"> <a href="images/gallery/<?php echo $index;?>.jpg" class="item-in pa-20">
                                </a> </div>
                        </section>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</section>

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
