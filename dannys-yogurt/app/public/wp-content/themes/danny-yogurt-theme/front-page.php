<?php get_header() ?>

  <!--Hero section-->
  <div class ="hero-section">

    <div class="hero-text" id="hero-text">
        <h2>Vanilla Yogurt</h1>
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
      <div class="col-md-4 d-flex justify-content-center align-items-center">

        <div>
            <img src="<?php echo get_theme_file_uri('images/yogurts.png') ?>" style="object-fit:contain; width:300px; height:300px;" />
            <p class="text-center">Multiple Flavors</p>
        </div>
        
        

      </div>
      <div class="col-md-4 d-flex justify-content-center align-items-center ">

          <div>
            <img src="<?php echo get_theme_file_uri('images/sprinkles.png') ?>" style="object-fit:contain; width:300px; height:300px;" />
            <p class="text-center">Variety of Toppings</p>
          </div>
        

      </div>
      <div class="col-md-4 d-flex justify-content-center align-items-center">

          <div>
            <img src="<?php echo get_theme_file_uri('images/fruit.png') ?>" style="object-fit:contain; width:300px; height:300px;" />
            <p class="text-center">Organic Fruit</p>
          </div>

      </div>
  </div>
 
  <div class=" d-flex flex-column justify-content-center align-items-center pt-4" style="background-color: #E8F9FD;">
    <h3 style="color: #28B3C7; font-weight: bold;">Subscribe to Our Newsletter </h3>
    <p>Promotions, news products, and sales. Directly to your inbox.</p>
        <form class="d-flex justify-content-center align-items-center mb-4" style="width:100%;">
          
            
                <input type="text" class="form-control" placeholder="Email" style="max-width:400px; width:100%;">
              
                <input type="submit" class="btn" style="background-color: #0AA1DD; color:white;" value="Subscribe"> 
            

          </form>
  </div>



 


 

<?php get_footer() ?>


