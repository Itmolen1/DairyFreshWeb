<div class="banner-bootom-w3-agileits">
        <div class="container">
            <h3 class="tittle-w3l"><?=$product['item_master_name'];?>
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>

            <div class="col-md-5 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="<?$product['item_master_logo'];?>">
                                <div class="thumb-image">
                                    <a data-fancybox="gallery" href="<? echo $product['item_master_logo']; ?>"><img src="<? echo $product['item_master_logo']; ?>" data-imagezoom="true" class="img-responsive" alt=""></a></div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-7 single-right-left simpleCart_shelfItem">
                <h3><?=$product['item_master_name'];?></h3>
                <div class="rating1">
                    <span class="starRating">
                        <input id="rating5" type="radio" name="rating" value="5">
                        <label for="rating5">5</label>
                        <input id="rating4" type="radio" name="rating" value="4">
                        <label for="rating4">4</label>
                        <input id="rating3" type="radio" name="rating" value="3" checked="">
                        <label for="rating3">3</label>
                        <input id="rating2" type="radio" name="rating" value="2">
                        <label for="rating2">2</label>
                        <input id="rating1" type="radio" name="rating" value="1">
                        <label for="rating1">1</label>
                    </span>
                </div>
                <p>
                    <span class="item_price">Rs. <?=$product['item_master_price'];?></span>
                    <del>Rs. 1300.00</del>
                    <label>Free delivery</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li>
                            Free Home Delivery.
                        </li>
                        <li>
                            Sold and fulfilled by Dairy Fresh (3.6 out of 5 | 10 ratings).
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <p>
                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>This is a
                        <label>Vegetarian</label> product.</p>
                    <ul>
                        <li>
                            Best for Biryani and Pulao.
                        </li>
                        <li>
                            After cooking, Zeeba Basmati rice grains attain an extra ordinary length of upto 2.4 cm/~1 inch.
                        </li>
                        <li>
                            Zeeba Basmati rice adheres to the highest food afety standards as your health is paramount to us.
                        </li>
                        <li>
                            Contains only the best and purest grade of basmati rice grain of Export quality.
                        </li>
                    </ul>
                    <p>
                        <i class="fa fa-refresh" aria-hidden="true"></i>All food products are
                        <label>non-returnable.</label>
                    </p>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                        <form name="cart_form" action="<?php echo base_url().'Cart/add'; ?>" method="post">
                            <fieldset>
                                <input type="hidden" name="item_master_id" value="<?=$product['item_master_id'];?>" />
                                <input type="hidden" name="item_master_name" value="<?=$product['item_master_name'];?>" />
                                <input type="hidden" name="item_master_url_slug" value="<?=$product['item_master_url_slug'];?>" />
                                <input type="hidden" name="item_qty" value="1" />
                                <input type="hidden" name="item_master_unit" value="<?=$product['item_master_unit'];?>" />
                                <input type="hidden" name="item_master_price" value="<?=$product['item_master_price'];?>" />
                                <input type="hidden" name="item_master_logo" value="<?=$product['item_master_logo'];?>" />
                                <input type="submit" name="submit" value="Add to cart" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="featured-section" id="projects">
        <div class="container">
            <h3 class="tittle-w3l">Add More
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <div class="content-bottom-in">
                <ul id="flexiselDemo1">

                    <?php foreach ($pros as $product) { ?>
                    <li>
                        <div class="w3l-specilamk">
                            <div class="speioffer-agile">
                                <a href="<?=base_url().'Pd/'.$product['item_master_id'].'/'.$product['item_master_url_slug'];?>">
                                    <a data-fancybox="gallery" href="<?=$product['item_master_logo'];?>"><img src="<?=$product['item_master_logo'];?>" alt="<?=$product['item_master_name'];?>" height="150" width="109"></a>
                                </a>
                            </div>
                            <div class="product-name-w3l">
                                <h4>
                                    <a href="<?=base_url().'Pd/'.$product['item_master_id'].'/'.$product['item_master_url_slug'];?>"><?=$product['item_master_name'];?></a>
                                </h4>
                                <div class="w3l-pricehkj">
                                    <h6>Rs. <?=$product['item_master_price'];?></h6>
                                    <p>Save Rs.40.00</p>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                    <form name="cart_form" action="<?php echo base_url().'Cart/add'; ?>" method="post">
                                    <fieldset>
                                        <input type="hidden" name="item_master_id" value="<?=$product['item_master_id'];?>" />
                                        <input type="hidden" name="item_master_name" value="<?=$product['item_master_name'];?>" />
                                        <input type="hidden" name="item_master_url_slug" value="<?=$product['item_master_url_slug'];?>" />
                                        <input type="hidden" name="item_qty" value="1" />
                                        <input type="hidden" name="item_master_unit" value="<?=$product['item_master_unit'];?>" />
                                        <input type="hidden" name="item_master_price" value="<?=$product['item_master_price'];?>" />
                                        <input type="hidden" name="item_master_logo" value="<?=$product['item_master_logo'];?>" />
                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                    </fieldset>
                                </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                 
                </ul>
            </div>
        </div>
    </div>