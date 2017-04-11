<?php
$phone = get_post_meta( get_the_ID(), 'company_phone', true );
$work_hours = get_post_meta( get_the_ID(), 'work_hours', true );
?>
<div class="content-contacts">
    <div class="slide" id="contact-page">
        <div class="container">
            <div class="content col-md-offset-2 col-md-8 contactblock">
                <div class="contact-line"></div>
                <h1>Aдреса</h1>
                <p class="phone">
                    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                </p>
                <p>вул. Волошкова 2, Київ</p>
                <p>(Петропалівсьвка Борщагівка)</p>
                <p>м. Академмістечко, м.т. №903 (кінцева зупинка)</p>
                <p>м. Нивки, м.т. №473д (зупинка Садова)</p>
                <div class="hours">
                    <p>ГРАФІК РОБОТИ</p>
                    <p><?php echo $work_hours; ?></p>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.344520587294!2d30.31969785495955!3d50.43405794262117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cb403935539f%3A0x3a2a87e8996b1154!2z0KHQsNC70L7QvSDQutGA0LDRgdC4ICLQnCfRj9GC0LAi!5e0!3m2!1sen!2sca!4v1487366732833" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>