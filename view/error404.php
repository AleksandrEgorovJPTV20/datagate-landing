<?php 
	ob_start();
 ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" style="width:100%;" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex justify-content-center">
            <!-- Updated link with target="_blank" -->
			<h1 style="text-align: center;">Error 404</h1>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
<?php 
	$content = ob_get_clean(); 
	include "view/templates/layout.php";
?>