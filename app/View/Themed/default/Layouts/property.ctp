<!-- end main nav-->
<?php echo $this->element('meta'); ?>
<!-- end main nav -->
<body class="off">
  <!-- main nav-->
  <?php echo $this->element('main-nav'); ?> 
  <!-- / main nav -->

  <!-- canvas content -->
  <div class="canvas-content">

    <!-- wrapper -->
    <div class="wrapper">
     <!-- header -->
     <?php echo $this->element('header'); ?> 
     <!--/ header -->
   </div>
   <!-- / wrapper -->

   <!-- section -->
   <section>
    <div class="row">
      <!-- begin left -->
      <div class="small-24 medium-17 large-18 columns">
        <nav>
          <div class="block theme-b show-for-medium-down">
            <p><a href="#"> < Back to search results</a></p>
          </div>  
        </nav>

        <!-- listing-block -->
          <div class="listing-block">
           <!-- listing-content -->
           <div class="listing-content">

            <div class="row"> 
              <div class="small-24 medium-24 large-24 columns">   
                <div class="property">
                  <div class="property-image-wrap">
                    <?php echo $this->Html->image('property.jpg', array('alt' => '', 'width'=>'100%')); ?>
                    <h3 class="property-label featured">Featured Property</h3>
                  </div>
                </div>
              </div>
            </div>

            <div class="row"> 
              <div class="small-24 medium-12 large-12 columns">   
                <h2>House name</h2>
                <h4>Manchester</h4>
              </div>
              <div class="small-24 medium-12 large-12 columns">  
                <span class="price">from &pound;370pw</span>
              </div>
            </div>

            <hr class="show-for-medium-up" />

            <div class="row"> 
              <div class="small-24 medium-8 large-6 columns">
                <aside> 
                  <dl class="listing-details">
                    <dd><span>Bedrooms:</span> 4</dd>
                    <dd><span>Property Sleeps:</span> 7</dd>
                    <dd><span>Bathrooms:</span> 3</dd>
                    <dd><span>Property ID:</span> 3</dd>
                  </dl>
                </aside>
              </div>
              <div class="small-24 medium-16 large-18 columns">
                <p>Romantic style house in small town San Marcos near regional center Icod de los Vinos. Close to beach. 3 bedrooms, 1 living room with kitchen, 2 bathrooms and 3 WC. Patio and great terrace. Nice neighbourhood (Spanish people only). </p>
                <p>La Playa de San Marcos is mildest beach in North Tenerife. You can swim and surf the whole year. Many nice restorans are located on the beach. Closest mini-supermarket 100m from the house. Excelent bus communication from San Marcos to Icod de los Vinos – the town of Drago.</p>
              </div>
            </div> 
          </div>
          <!-- /listing-content -->
        </div>
        <!-- /listing-block -->


      <div class="row"> 
        <!-- property listing tabs -->
        <div class="small-24 medium-8 margintop20 columns show-for-medium-up">
          <aside>
            <ul class="listing-sidenav tabs">
              <li class="active" data-tab="introduction"><a href="#introduction">Introduction <i class="icon-play right arrow"></i></a></li>
              <li data-tab="availability"><a href="#availability">Availability <i class="icon-play right arrow"></i></a></li>
              <li><a href="#">Facilities <i class="icon-play right arrow" ></i></a></li>
              <li><a href="#">Location <i class="icon-play right arrow"></i></a></li>
              <li><a href="#">Reviews <i class="icon-play right arrow"></i></a></li>
            </ul>
          </aside>
        </div>
        <!-- / property listing tabs -->

        <!-- property listing tab content -->
        <div class="small-24 medium-16 margintop20 columns">
          <div class="listing-block tab-content" id="introduction">
            <h3>Introduction</h3>
            <p>Romantic style house in small town San Marcos near regional center Icod de los Vinos. Close to beach. 3 bedrooms, 1 living room with kitchen, 2 bathrooms and 3 WC. Patio and great terrace. Nice neighbourhood (Spanish people only). Free parking.</p>
            <p>La Playa de San Marcos is mildest beach in North Tenerife. You can swim and surf the whole year. Many nice restorans are located on the beach. Closest mini-supermarket 100m from the house. Excelent bus communication from San Marcos to Icod de los Vinos – the town of Drago.
              <p>The house is fully equiped by furniture, kitchen equipment, plates, glases and other.<br />
                Large LCD TV, DVD with ASTRA connection and printer. Quiet and nice neighbourhood.</p>
              </div>
              <div class="listing-block tab-content show-for-small" id="availability">
                <h3>Availability</h3>
                <p>Romantic style house in small town San Marcos near regional center Icod de los Vinos. Close to beach. 3 bedrooms, 1 living room with kitchen, 2 bathrooms and 3 WC. Patio and great terrace. Nice neighbourhood (Spanish people only). Free parking.</p>
                <p>La Playa de San Marcos is mildest beach in North Tenerife. You can swim and surf the whole year. Many nice restorans are located on the beach. Closest mini-supermarket 100m from the house. Excelent bus communication from San Marcos to Icod de los Vinos – the town of Drago.
                  <p>The house is fully equiped by furniture, kitchen equipment, plates, glases and other.<br />
                    Large LCD TV, DVD with ASTRA connection and printer. Quiet and nice neighbourhood.</p>
                  </div>
                </div>
                <!-- / property listing tab content -->
              </div>

            </div>
            <!-- end left -->

            <!-- begin right -->
            <div class="small-24 medium-7 large-6 columns">

              <div class="block theme-b show-for-medium-up">
                <p><a href="#"> &lt; Back to search results</a></p>
              </div>  

              <div class="block theme-e">
                <p><a href="#"><i class="icon-envelope"></i> Enquire</a></p>
              </div>  

              <!-- social media links -->
              <?php echo $this->element('block-social'); ?> 
              <!-- / social media links -->

              <!-- testimonial -->
              <?php echo $this->element('block-testimonial'); ?> 
              <!-- / testimonial -->

              <!-- properties -->
              <?php echo $this->element('block-properties'); ?> 
              <!-- / properties -->

            </div>
            <!-- /end right -->
     </div>
   </section>
  <!-- /section -->



 <!-- content output -->
 <?php //echo $this->fetch('content'); ?>
 <!-- / content output -->

 <!-- footer -->
 <?php echo $this->element('footer'); ?>
 <!-- / footer -->

 <?php echo $this->element('sql_dump'); ?>

</div>
<!-- /canvas content -->

<?php echo $this->element('footer-scripts'); ?>
</body>
</html>
