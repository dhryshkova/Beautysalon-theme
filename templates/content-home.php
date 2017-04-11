<?php
$phone = get_post_meta( get_the_ID(), 'company_phone', true );
$work_hours = get_post_meta( get_the_ID(), 'work_hours', true );
?>
<div class="content-home">

    <div class="slide" id="intro">
        <div class="container clearfix">
            <div class="content col-lg-12">

            </div>
        </div>
    </div>

    <div class="slide" id="services">
        <div class="container clearfix">
            <div class="content col-lg-offset-1 col-lg-10">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail1 mint">
                            <div class="services-line"></div>
                            <p>Брови</p>
                            <a href="#x">Послуги ></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail2">
                            <img src="http://salonmyata.local/wp-content/themes/sage/assets/images/eyebrows.png">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail1 black">
                            <div class="services-line-white"></div>
                            <p>Макіяж</p>
                            <a href="#x">Послуги ></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail2">
                            <img src="http://salonmyata.local/wp-content/themes/sage/assets/images/makeup.png">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail2">
                            <img src="http://salonmyata.local/wp-content/themes/sage/assets/images/hair.png">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail1">
                            <div class="services-line"></div>
                            <p>Волосся</p>
                            <a href="#x">Послуги ></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail2 mint">
                            <img src="http://salonmyata.local/wp-content/themes/sage/assets/images/manicure.png">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
                        <div class="dummy1"></div>
                        <div class="thumbnail1 mint">
                            <div class="services-line"></div>
                            <p>Манікюр</p>
                            <a href="#x">Послуги ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slide" id="contacts">
        <div class="container">
            <div class="content col-md-offset-3 col-md-6 contactblock">
                <div class="contact-line"></div>
                <h1>Ласкаво Просимо</h1>

                <p class="phone">
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </p>

                <p>вул. Волошкова 2, Київ</p>
                <p>(Петропалівсьвка Борщагівка)</p>
                <p>м. Академмістечко, м.т. №903 (кінцева зупинка)</p>
                <p>м. Нивки, м.т. №473д (зупинка Садова)</p>

                <p class="hours">ГРАФІК РОБОТИ</p>
                <p><?php echo $work_hours; ?></p>
            </div>
        </div>
    </div>

    <div class="slide" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.344520587294!2d30.31969785495955!3d50.43405794262117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cb403935539f%3A0x3a2a87e8996b1154!2z0KHQsNC70L7QvSDQutGA0LDRgdC4ICLQnCfRj9GC0LAi!5e0!3m2!1sen!2sca!4v1487366732833" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>