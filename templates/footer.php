<?php
$phone = get_post_meta( get_the_ID(), 'company_phone', true );
?>
<footer class="content-info">
  <div class="container">
    <div class="content col-md-12">

      <div class="col-md-4 col-xs-12 a-left">
        <p class="phone">
          <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        </p>
      </div>
      <div class="col-md-4 col-xs-12 a-center">
        <p>&copy; 2017 Салон краси "М'ята"</p>
      </div>
      <div class="col-md-4 col-xs-12 a-right">
        <p class="site">Site by <a href="http://hryshkova.com">Hryshkova</a></p>
      </div>

    </div>
  </div>
</footer>
