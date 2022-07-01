<?php get_header() ?>

<!--Hero section-->
<div class="hero-section">

  <div class="hero-text" id="hero-text">
    <h2>Vanilla Yogurt</h2>
    <p>Yogurt with vanilla and strawberries</p>
  </div>
  <img class="hero-image" id="hero-image" src="<?php echo get_theme_file_uri('images/vanilla-yogurt2.png') ?>" />

  <div class="secondary-background">
    <div class="slider-buttons" id="slider-buttons">
      <span class="dot" data-action="circle" data-id="1"></span>
      <span class="dot" data-action="circle" data-id="2"></span>
      <span class="dot" data-action="circle" data-id="3"></span>
    </div>
  </div>
</div>

<!--Features -->
<div class="row py-5" id="feature-container">

  <?php
  $features = array('feature1', 'feature2', 'feature3');

  foreach ($features as $feature) {
    if (have_rows($feature)) :
      while (have_rows($feature)) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
  ?>
        <div class="col-md-4">

          <div class="d-flex justify-content-center flex-column align-items-center text-center">
            <img src="<?php echo esc_url($image); ?>" />
            <h3><?php echo $title ?></h3>
            <p><?php echo $description ?></p>
          </div>
        </div>

  <?php
      endwhile;
    endif;
  }

  ?>

</div>

<!-- Menu Section -->



<?php
$callouts = array('callout1');

foreach ($callouts as $callout) {
  if (have_rows($callout)) :
    while (have_rows($callout)) : the_row();
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $label = get_sub_field('label');
?>
      <div class="explanation-section" style="background-image:url(<?php echo $image ?>);">
        <div class="blue-overlay"></div>
        <div class="explanation-content">
          <h2><?php echo $title ?></h2>
          <a href="<?php echo site_url('/menu'); ?>" class="btn button"><?php echo $label ?></a>

    <?php
    endwhile;
  endif;
}

    ?>











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

      <script type="text/javascript">
        // title, description, image
        let heroText = null;
        let heroImage = null;
        let sliderButtons = null;

        let data = null;
        document.addEventListener("DOMContentLoaded", function() {

          heroText = document.getElementById("hero-text");
          heroImage = document.getElementById("hero-image");
          sliderButtons = document.getElementById("slider-buttons");
          data = getData();
          initSlider();

        });

        // Get data in json from ACF
        function getData() {

          <?php
          $slideItems = array('product1', 'product2', 'product3');
          $payload = array();

          $i = 0;
          foreach ($slideItems as $slideItem) {
            if (have_rows($slideItem)) :
              while (have_rows($slideItem)) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $item = array("image" => $image['url'], "title" => $title, "description" => $subtitle, "id" => $i++);

                if ($image == false || $title == "" || $subtitle == "")
                  continue;

                array_push($payload, $item);

              endwhile;
            endif;
          }

          ?>

          return <?php echo json_encode($payload);  ?>;


        }

        // Initialize slider
        function initSlider() {
          let str = ``;
          for (let obj of data) {
            str += `<span class="dot" data-action="circle" data-id="${obj.id}"></span>`
          }

          sliderButtons.innerHTML = str;

          if (data.length > 0) {
            let result = changeSlider(data[0]);
            heroText.innerHTML = result.text;
            heroImage.setAttribute("src", result.image);
          }
        }


        function changeSlider(data) {
          let text = `<h2>${data.title}</h2>
    <p>${data.description}</p>`;

          let image = data.image;

          return {
            text: text,
            image: image
          };
        }

        function handleClick(evt) {
          let {
            action,
            id
          } = evt.target.dataset;

          if (action) {
            if (action == "circle") {
              let item = data.filter((element) => element.id == id);
              let result = changeSlider(item[0]);
              heroText.innerHTML = result.text;
              heroImage.setAttribute("src", result.image);
            }
          }
        }



        document.addEventListener("click", handleClick);
      </script>






      <?php get_footer() ?>