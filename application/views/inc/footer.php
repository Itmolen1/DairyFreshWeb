  <footer>
    <div class="container">
      
      <p class="footer-main">
        <span>"Dairy Fresh"</span> In addition to its own stores, Dairy Fresh is also present on third party food delivery platforms like Swiggy, Uber Eats and Zomato. Yet another touch-point in the online domain is the company’s website and app. These two platforms enjoy a loyal base of followers who regularly order their favorite dessert from these touch-points. The company has also launched an innovative ‘Order on Whatsapp’ channel to further reduce the friction in ordering and ensure that the company’s patrons never without their favorite delicacies from Dairy Fresh.</p>
      
      <div class="w3l-grids-footer">
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-map-marker" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Track Your Order</h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-refresh" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Free & Easy Returns</h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-times" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Online cancellation </h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      
      <div class="footer-info w3-agileits-info">
       
        <div class="col-sm-5 address-right">
          <div class="col-xs-6 footer-grids">
            <h3>Categories</h3>
            <ul>
              <?php for($i=0;$i<count($categories);$i++){  ?>
              <li>
                <a href="<?php echo base_url().'Category/'.$categories[$i]['item_category_name']; ?>"><?php echo $categories[$i]['item_category_name']; ?></a>
              </li>
              <?php } ?>
            </ul>
          </div>
         
          <div class="clearfix"></div>
        </div>
        
        <div class="col-sm-5 address-right">
          <div class="col-xs-6 footer-grids">
            <h3>Quick Links</h3>
            <ul>
              <li>
                <a href="<?=base_url().'About';?>">About Us</a>
              </li>
              <li>
                <a href="<?=base_url().'Contact';?>">Contact Us</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Faqs</a>
              </li>
              <li>
                <a href="#">Terms of use</a>
              </li>
              <li>
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
          </div>
          <div class="col-xs-6 footer-grids">
            <h3>Get in Touch</h3>
            <ul>
              <li>
                <i class="fa fa-map-marker"></i> 13 Kamalpark Soc. Nr. Kapodra Police Station, Varachha Main Road, Surat.</li>
              <li>
                <i class="fa fa-mobile"></i> +91 84695 24955 </li>
              <li>
                <i class="fa fa-envelope-o"></i>
                <a href="mailto:info@soordairyfresh.com"> info@soordairyfresh.com</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-2 footer-grids  w3l-socialmk">
          <h3>Follow Us on</h3>
          <div class="social">
            <ul>

              <li>
                <a class="icon fb" href="https://fb.me/Soordairyfreshofficial" target="_blank">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>

              <li>
                <a class="icon tw" href="https://twitter.com/DairySoor" target="_blank">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              
            </ul>
          </div>
          <div class="agileits_app-devices">
            <h5>Download the App</h5>
            <a href="#">
              <img src="<?=base_url().'assets/';?>images/1.png" alt="">
            </a>
            <a href="#">
              <img src="<?=base_url().'assets/';?>images/2.png" alt="">
            </a>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      
      <div class="agile-sometext">
        <div class="sub-some">
          <h5>Online Cake Shopping</h5>
          <p>Order online. All your favourite Cakes from our website or mobile application and you will get atractive discount each time we will deliver your order direct to your door step on time.</p>
        </div>
        
        <div class="sub-some">
          <h5>Popular Categories</h5>
          <ul>
            <?php for($i=0;$i<count($categories);$i++){  ?>
            <li>
              <a href="<?php echo base_url().'Category/'.$categories[$i]['item_category_name']; ?>"><?php echo $categories[$i]['item_category_name']; ?></a>
            </li>
            <?php } ?>
          </ul>
        </div>
        
        <div class="sub-some child-momu">
          <h5>Payment Method</h5>
          <ul>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay2.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay5.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay1.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay4.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay6.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay3.png" alt="">
            </li>
            <li>
              <img src="<?=base_url().'assets/';?>images/pay7.png" alt="">
            </li>
          </ul>
        </div>
        
      </div>
      
    </div>

    <div class="fixed_button" style="cursor: pointer;"><a href="https://wa.me/918469524955" target="_blank"><img src="<?php echo base_url().'assets/images/wp.png'; ?>" alt="Soor Dairy Fresh"></a></div>
  </footer>
  
  <div class="copy-right">
    <div class="container">
      <p>© 2020 Soor Dairy Fresh. All rights reserved
      </p>
    </div>
  </div>
    
  <script src="<?=base_url().'assets/';?>js/jquery.magnific-popup.js"></script>
  <script>
    $(document).ready(function () {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

    });
  </script>
  

  
  <script src="<?=base_url().'assets/';?>js/jquery-ui.js"></script>
  
  <script type="text/javascript">
    $(window).on('scroll', function () {
    if ($(window).scrollTop() > 50) {
      $('.header').addClass('fixed-menu');
    } else {
      $('.header').removeClass('fixed-menu');
    }
  });
  </script>

  <script type="text/javascript">
    $('#soorsearch').bind('keyup blur', function(){
      var keyword=$('#soorsearch').val();
        $.ajax({
              url: '<?php echo base_url().'Search/soorsearch'; ?>',
              type: 'post',
              data: {data:keyword},
              success: function(json) {
                $('#search_result').html('');
                $('#search_result').html(json);
              }
            }); 
    });
  </script>
 
  <script src="<?=base_url().'assets/';?>js/jquery.flexisel.js"></script>
  <script>
    $(window).load(function () {
      $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint: 480,
            visibleItems: 1
          },
          landscape: {
            changePoint: 640,
            visibleItems: 2
          },
          tablet: {
            changePoint: 768,
            visibleItems: 2
          }
        }
      });

    });
  </script>
  
  <script>
    window.onload = function () {
      document.getElementById("password1").onchange = validatePassword;
      document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
      var pass2 = document.getElementById("password2").value;
      var pass1 = document.getElementById("password1").value;
      if (pass1 != pass2)
        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
      else
        document.getElementById("password2").setCustomValidity('');
      //empty string means no validation error
    }
  </script>
  
  <script src="<?=base_url().'assets/';?>js/SmoothScroll.min.js"></script>
  <script src="<?=base_url().'assets/';?>js/move-top.js"></script>
  <script src="<?=base_url().'assets/';?>js/easing.js"></script>
  <script>
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();

        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $().UItoTop({
        easingType: 'easeOutQuart'
      });

    });
  </script>
  <script src="<?=base_url().'assets/';?>js/bootstrap.js"></script>
</body>

</html>