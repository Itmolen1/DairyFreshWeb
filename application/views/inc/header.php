<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soor Dairy Fresh</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cakes and Bakery Products" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    <script src="<?=base_url().'assets/';?>js/jquery-2.1.4.min.js"></script>

    <link href="<?=base_url().'assets/';?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url().'assets/';?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url().'assets/';?>css/font-awesome.css" rel="stylesheet">
    
    <link href="<?=base_url().'assets/';?>css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/';?>css/jquery-ui1.css">

    <link href="<?php echo base_url(); ?>assets/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
</head>

<body>
	<nav class="header">
    <div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            
            <div class="col-md-4 logo_agile">
                <h1>
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url().'assets/';?>images/logo2.png" alt=" " height="60px;">
                    </a>
                </h1>
            </div>
            
            <div class="col-md-8 header">
                
                <ul>
                    <li>
                        <a href="<?=base_url();?>">
                            <span class="fa fa-home" aria-hidden="true"></span> Home </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle nav-stylehead fa fa-birthday-cake" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu multi-column columns-3" style="padding: 0;min-width: 150px;">
                            <div class="agile_inner_drop_nav_info">
                                <div class="col-sm-3 multi-gd-img">

                                    <?php for($i=0;$i<count($categories);$i++){  ?>
                                    <ul class="multi-column-dropdown" style="width: 335px;">
                                        <li style="border-right: none;">
                                            <a href="<?php echo base_url().'Category/'.$categories[$i]['item_category_name']; ?>"><?php echo $categories[$i]['item_category_name']; ?></a>
                                        </li>
                                    </ul>
                                    <?php } ?>                                                    
                                    
                                </div>
                                
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>

                    <li>
                        <a  href="<?=base_url().'About';?>">
                            <span class="fa fa-building" aria-hidden="true"></span> About Us </a>
                    </li>

                    <?php if(isset($this->session->userdata['user'])) { ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo 'Hello '.$this->session->userdata['user']['name']; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu multi-column columns-3" style="padding: 0;min-width: 150px;">
                                <div class="agile_inner_drop_nav_info">
                                    <div class="col-sm-3 multi-gd-img">
                                        <ul class="multi-column-dropdown" style="width: 335px;">
                                            <li style="border-right: none;">
                                                <a href="<?=base_url()?>OrderDetail/List">My Orders</a>
                                            </li>
                                        </ul>

                                        <ul class="multi-column-dropdown">
                                            <li style="border-right: none;">
                                                <a href="<?=base_url()?>login/getlogout">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>

                        <li>My Account</li>
                    <?php } else { ?>
                    <li>
                        <a href="<?php echo base_url().'login'; ?>">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'register'; ?>">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
                    </li>
                    
                    <?php } ?>
                    <li>
                        <a href="<?=base_url().'Contact';?>">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span> Contact Us</a>
                    </li>
                </ul>
                
                <div class="agileits_search">
                    
                        <input id="soorsearch" name="soorsearch" type="search" placeholder="Which is your favorite cake ?" required="">
                     	<div id="search_result"></div>
                    
                </div>
                    
                <?php
                    if(get_cookie('shopping_cart')!='')
                    {
                        $cookie_data=stripcslashes(get_cookie('shopping_cart'));
                        $cart_data=json_decode($cookie_data,true);
                        $cart_count=count($cart_data);
                    }
                    else
                    {
                        $cart_count=0;
                    }
                ?>

                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                            <a href="<?php echo base_url().'Cart'; ?>"><button class="w3view-cart">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"><?php echo $cart_count;?></i>
                            </button></a>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
  </nav>
    
    <div id="small-dialog1" class="mfp-hide">
        <div class="select-city">
            <h3>Please Select Your Location</h3>
            <select class="list_of_cities">
               
            </select>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In </h3>
                        <p>
                            Sign In now, Let's start your Grocery Shopping. Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Sign Up Now</a>
                        </p>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="User Name" name="Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" required="">
                            </div>
                            <input type="submit" value="Sign In">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <p>
                            Come join the Grocery Shoppy! Let's set up your Account.
                        </p>
                        <form action="#" method="post">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="Name" name="Name" required="">
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="E-mail" name="Email" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" id="password1" required="">
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <p>
                            <a href="#">By clicking register, I agree to your terms</a>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="ban-top">
        <div class="container">
            
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <?php /*
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active">
                                    <a class="nav-stylehead" href="<?=base_url();?>">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a class="nav-stylehead" href="<?=base_url().'About'?>">About Us</a>
                                </li>
                              
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Products
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="agile_inner_drop_nav_info">
                                            <div class="col-sm-6 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <?php for($i=0;$i<count($categories);$i++){  ?>
                                                    <li>
                                                        <a href="<?php echo base_url().'Category/'.$categories[$i]['item_category_name']; ?>"><?php echo $categories[$i]['item_category_name']; ?></a>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                
                                
                            </ul>
                        </div>
                         */ ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>

<?php if($this->session->userdata('cart_message')) { ?>
<script type="text/javascript">
    $(window).load(function()
    {
        $('#myModal').modal('show');
    });
    setTimeout(function() {$('#myModal').modal('hide');}, 1500);
</script>
<?php } ?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Success !</h4>
        </div>
        <div class="modal-body">
          <p><?php 
            if($this->session->userdata('cart_message'))
            { 
                echo  $this->session->userdata('cart_message');
                $this->session->unset_userdata('cart_message');
            }
            ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
</div>