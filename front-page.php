<?php 
get_header();


//Nội dung của trang chủ
?> 
<div id="primary" class="site-main pt-4">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div> -->
      <div class="carousel-inner rounded-3">
        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri(  ).'/images/slide-1.jpg'; ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(  ).'/images/slide-2.jpg'; ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>
</div>

<!-- Section popular product -->
<section class="container pt-4">
  <div class="product__row-heading text-center">
    <h2>Popular Products</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, id!</p>
  </div>

  <div class="product__row-content">
    <?php echo do_shortcode( '[products limit="4" columns="4"]' ) ?>
  </div>
</section>


<!-- Section categories product --> 
<section class="container pt-4">
  <div class="category__row-heading text-center">
    <h2>Categories</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, id!</p>
  </div>

  <div class="category__col">
    <div class="row">
        <div class="col-md-4 col-12 p-3 p-md-3">
          <div class="category__col-content position-relative">
            <a href="#">
              <img class="w-100 rounded-3" src="<?php echo get_theme_file_uri(  ).'/images/toys.jpg' ?>" alt="" srcset="">
              <h2 class="border-25 position-absolute bottom-0 w-100 text-center text-white bg-primary-opacity-8 mb-0 pt-2 pb-2">Toys</h2>
            </a>
          </div>
        </div>

      <div class="col-md-4 col-12 p-3 p-md-3">
        <div class="category__col-content position-relative">
          <a href="#">
          <img class="w-100 rounded-3" src="<?php echo get_theme_file_uri(  ).'/images/food.jpg' ?>" alt="" srcset="">
          <h2 class="border-25 position-absolute bottom-0  w-100 text-center text-white bg-primary-opacity-8 mb-0 pt-2 pb-2">Food</h2>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-12 p-3 p-md-3">
        <div class="category__col-content position-relative">
          <a href="#">
          <img class="w-100 rounded-3" src="<?php echo get_theme_file_uri(  ).'/images/care.jpg' ?>" alt="" srcset="">
          <h2 class="border-25 position-absolute bottom-0  w-100 text-center text-white bg-primary-opacity-8 mb-0 pt-2 pb-2">Care</h2>
          </a>
        </div>
      </div>
    </div>

    <div class="row pt-4">
      <div class="col-md-4 col-12 p-3 p-md-3">
        <div class="category__col-content position-relative">
          <a href="http://">
            <img class="w-100 rounded-3" src="<?php echo get_theme_file_uri(  ).'/images/food.jpg' ?>" alt="" srcset="">
            <h2 class="border-25 position-absolute bottom-0  w-100 text-center text-white bg-primary-opacity-8 mb-0 pt-2 pb-2">Food</h2>
          </a>
        </div>
      </div>

      <div class="col-md-8 col-12 p-3 p-md-3">
          <div class="category__col-content position-relative">
          <a href="http://">
            <div class="category__col-background position-absolute w-100 h-100 bg-primary-opacity-8 rounded-3"></div>
          <img class="w-100 rounded-3" src="<?php echo get_theme_file_uri(  ).'/images/special-offers.jpg' ?>" alt="" srcset="">
          <h2 class="border-25 position-absolute top-50  w-100 text-center text-white mb-0 pt-2 pb-2">Special Offers <br> up to 40% Off</h2>
          </a>  
        </div>
      </div>
    </div>
  </div>


</section>


<!-- Section Special Offers -->
<section class="container pt-4">
  <div class="specials__row-heading text-center">
    <h2>Speicals Offers</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, id!</p>
  </div>

  <div class="product__row-content">
    <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]' ) ?>
  </div>
</section>

<?php 


get_footer();