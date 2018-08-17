<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Rohan</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- FONTS ONLINE -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <!--MAIN STYLE-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" href="css/ycp.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }

        .goog-te-menu-frame {
            max-width:100% !important;
        }
        .goog-te-menu2 {
            max-width: 100% !important;
            overflow-x: scroll !important;
            box-sizing:border-box !important;
            height:auto !important;
        }
    </style>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false,
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
            function changeGoogleStyles() {
                if($('.goog-te-menu-frame').contents().find('.goog-te-menu2').length) {
                    $('.goog-te-menu-frame').contents().find('.goog-te-menu2').css({
                        'max-width':'100%',
                        'overflow-x':'auto',
                        'box-sizing':'border-box',
                        'height':'auto'
                    });
                } else {
                    setTimeout(changeGoogleStyles, 50);
                }
            }
            changeGoogleStyles();
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


</head>

<?php include "nav.php";?>


<body>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h4>Message for us</h4>

                <!--======= CONTACT FORM =========-->
                <div class="contact-form">
                    <!--======= Success Msg =========-->
                    <!--======= FORM  =========-->
                    <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                    <form role="form" id="contact_form" class="contact-form" method="post" action="contactSubmit.php" onSubmit="return false">
                        <ul class="row">
                            <li class="col-sm-6">
                                <label>full name *
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-6">
                                <label>Email *
                                    <input type="text" class="form-control" name="email" id="email" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-6">
                                <label>Phone *
                                    <input type="text" class="form-control" name="company" id="company" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-6">
                                <label>Department
                                    <input type="text" class="form-control" name="website" id="website" placeholder="">
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <label>Message
                                    <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                                </label>
                            </li>
                            <li class="col-sm-12">
                                <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">Submit</button>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>


            <div class="col-md-4">
                <h4>W Pratiksha Hospital</h4>
                <!-- Timing -->

                    <p>Golf Course Extension Road</p>
                    <p>Sector 56, Sushant Lok II</p>
                    <p>Gurgaon – 122011</p>
                    <p><a href="tel:+911244131091" style="color: red;">+91 124 4131091</a></p>
                    <p><a href="mailto:rohankhandelwal@gmail.com" style="color: orange;">rohankhandelwal@gmail.com</a></p>
                    <p><a href="http://www.w-hospital.in/" target="_blank" style="color: blue;">Visit Website</a></p>


                <h4>Vardaan Hospital</h4>
                <!-- Timing -->

                <p>B-100, Malviya Nagar</p>
                <p>New Delhi – 110017 (India)</p>
                <p><a href="tel:+911146018201" style="color: red;">+91 11 46018201</a>, &nbsp;<a href="tel:+91126689911" style="color: red;">26689911</a>, &nbsp;<a href="tel:+911266823381" style="color: red;">266823381</a></p>
                <p><a href="mailto:vardaanhospital@gmail.com" style="color: orange;">vardaanhospital@gmail.com</a></p>
                <p><a href="http://www.vardaan.net/" target="_blank" style="color: blue;">Visit Website</a></p>

                <!-- Follow Us -->
                <h4>Follow Us</h4>

                <ul class="social_icons">

                    <li class="facebook"><a href="https://www.facebook.com/Dr-Rohan-Khandelwal-311806469024765/?fref=ts" target="_blank"><i class="fa fa-facebook"></i> </a></li>
                    <li class="twitter"><a href="http://twitter.com/docrohan" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li class="instagram"><a href="https://www.instagram.com/docrohan83/" target="_blank"><i class="fa fa-instagram"></i> </a></li>

                </ul>
            </div>
        </div>
    </div>
</div>

<section class="row map_row">
    <div class="container">
        <h3 class="contact_section_title">Direction</h3>
    </div>
</section>
<br>



<?php include "footer.php";?>



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
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>

<script type="text/javascript">
    /*==========  Map  ==========*/
    var map;
    function initialize_map() {
        if ($('#map').length) {
            var myLatLng = new google.maps.LatLng(-37.814199, 144.961560);
            var mapOptions = {
                zoom: 17,
                center: myLatLng,
                scrollwheel: false,
                panControl: false,
                zoomControl: true,
                scaleControl: false,
                mapTypeControl: false,
                streetViewControl: false
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                tittle: 'Envato',
                icon: './images/map-locator.png'
            });
        } else {
            return false;
        }
    }
    google.maps.event.addDomListener(window, 'load', initialize_map);
</script>
</body>

</html>