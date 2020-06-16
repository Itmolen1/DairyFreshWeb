<div class="page-head_agile_info_w3l">

    </div>
    <div class="services-breadcrumb">
        <div class="agile_inner_breadcrumb">
            <div class="container">
                <ul class="w3_short">
                    <li>
                        <a href="<?=base_url();?>">Home</a>
                        <i>|</i>
                    </li>
                    <li>contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <?php
         if(isset($this->session->userdata['suc_contact'])) { ?>
            <script>
                $(document).ready(function() {
                    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
                      $("#success-alert").slideUp(500);
                    });
                });
            </script>
            <div class="alert alert-success" id="success-alert">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>Success! </strong>We Have Successfully Registered your Query we will contact you ASAP.
            </div>
        <?php
        $this->session->unset_userdata('suc_contact'); 
        } ?>

    <div class="contact-w3l">
        <div class="container">
            
            <h3 class="tittle-w3l">Contact Us
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            
            <div class="contact agileits">
                <div class="contact-agileinfo">
                    <div class="contact-form wthree">
                        <form action="<?php echo base_url().'Contact/add'; ?>" method="post" name="contactform">
                            <div class="">
                                <input type="text" name="name" placeholder="Name" required onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))" maxlength="30">
                            </div>
                            <div class="">
                                <input class="text" type="text" name="mobile_number" placeholder="Mobile" required onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" maxlength="15" >
                            </div>
                            <div class="">
                                <input class="email" type="email" name="email" placeholder="Email" required onkeydown="if(event.keyCode === 32) return false;" maxlength="40">
                            </div>
                            <div class="">
                                <textarea placeholder="Message" name="comments" required maxlength="400"></textarea>
                            </div>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="contact-right wthree">
                        <div class="col-xs-7 contact-text w3-agileits">
                            <h4>GET IN TOUCH :</h4>
                            <p>
                                <i class="fa fa-map-marker"></i> 13 Kamalpark Soc. Nr. Kapodra Police Station, Varachha Main Road, Surat.</p>
                            <p>
                                <i class="fa fa-phone"></i> +91 84695 24955</p>
                            <p>
                                <i class="fa fa-envelope-o"></i> Email :
                                <a href="mailto:info@soordairyfresh.com">info@soordairyfresh.com</a>
                            </p>
                        </div>
                        <div class="col-xs-5 contact-agile">
                            <img src="<?=base_url().'assets/';?>images/contact2.jpg" alt="">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="map w3layouts">
        <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14877.310820274324!2d72.8750191!3d21.2188499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb3ff413c00db9ee!2sSoor%20dairy%20fresh!5e0!3m2!1sen!2sin!4v1579606798664!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    </div>
    <div class="footer-top">
        <div class="container-fluid">
            <div class="col-xs-8 agile-leftmk">
                <h2>Get your Cakes delivered At your Doorstep</h2>
                <p>Free Delivery on your first order!</p>
                <form action="#" method="post">
                    <input type="email" placeholder="E-mail" name="email" required="">
                    <input type="submit" value="Subscribe">
                </form>
                <div class="newsform-w3l">
                    <span class="fa fa-envelope-o" aria-hidden="true"></span>
                </div>
            </div>
            <div class="col-xs-4 w3l-rightmk">
                <img src="<?=base_url().'assets/';?>images/tab3.png" alt=" ">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>