<?php get_header() ?>

  <!--Hero section-->
  <div class ="hero-section">

    <div class="hero-text" id="hero-text">
        <h2>Vanilla Yogurt</h2>
        <p>Yogurt with vanilla and strawberries</p>
    </div>
    <img class="hero-image" id="hero-image" src="<?php echo get_theme_file_uri('images/vanilla-yogurt2.png') ?>" />
    
    <div class="secondary-background">
      <div class="slider-buttons">
          <span class="dot" data-action="circle" data-id="1"></span>
          <span class="dot" data-action="circle" data-id="2"></span>
          <span class="dot" data-action="circle" data-id="3"></span>
      </div>
    </div>
  </div>

  <!--Features -->
  <div class="row py-5" id="feature-container">
      <div class="col-md-4">

        <div class="d-flex justify-content-center flex-column align-items-center text-center">
            <img src="<?php echo get_theme_file_uri('images/yogurts.png') ?>" />
            <h3>Multiple Flavors</h3>
            <p>Large selection of flavors to choose from and add new flavors monthly.</p>
        </div>
        
      
      </div>
      <div class="col-md-4 ">

          <div class="d-flex justify-content-center flex-column align-items-center text-center">
            <img src="<?php echo get_theme_file_uri('images/sprinkles.png') ?>" />
            <h3>Variety of Toppings</h3>
            <p>Large selection of toppings to choose from.</p>
          </div>
        

      </div>
      <div class="col-md-4">

          <div class="d-flex justify-content-center flex-column align-items-center text-center">
            <img src="<?php echo get_theme_file_uri('images/fruit.png') ?>" />
            <h3>Organic Fruits</h3>
            <p>Large selection of organic fruit to choose from and it is delivered fresh.</p>
          </div>

      </div>
  </div>

  <!-- Menu Section -->

  <div class="explanation-section">
    <div class="blue-overlay"></div>
    <div class="explanation-content">
      <h2>Cool Off This Summer with Our Refreshing Yogurt</h2>
      <a href="<?php echo site_url('/menu'); ?>" class="btn button">View Menu</a>
    </div>
  </div>
 
  <div class=" d-flex flex-column justify-content-center align-items-center pt-4" style="background-color: #E8F9FD;">
    <h2 style="color: #28B3C7; font-weight: bold;">Subscribe to Our Newsletter </h2>
    <p>Promotions, news products, and sales. Directly to your inbox.</p>
        <form class="d-flex justify-content-center align-items-center mb-4" style="width:100%;">
          
            
                <input type="text" class="form-control" placeholder="Email" style="max-width:400px; width:100%;">
              
                <input type="submit" class="btn" style="background-color: #0AA1DD; color:white;" value="Subscribe"> 
            

          </form>
  </div>



 


 

<?php get_footer() ?>


