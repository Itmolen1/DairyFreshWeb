<script>
	$(document).ready(function () {
    $('html, body').animate({
        scrollTop: $('#what').offset().top
    }, 'slow');
});
</script>
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                    <i>|</i>
                </li>
                <li>Delivery Address</li>
            </ul>
        </div>
    </div>
</div>

<div class="privacy" style="padding: 1em 0;">
    <div class="container">

        <?php //////////////cart details///////////////// ?>
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
        <div class="checkout-right">
            <div class="row">
                <div class="col-md-9">
                    <h4 style="margin-bottom: 0;">Your shopping cart contains:
                        <span><?php echo $cart_count;?> Products</span>
                    </h4>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(get_cookie('shopping_cart')!='')
                            {
                                $total=0;
                                $items=0;
                                $cookie_data=stripcslashes(get_cookie('shopping_cart'));
                                $cart_data=json_decode($cookie_data,true);
                                $sr=0;
                                foreach ($cart_data as $keys => $values)
                                {
                        ?>                       

                        <tr class="rem1">
                            <td class="invert"><?php echo $sr+1; ?></td>
                            <td class="invert-image">
                                <a href="<?=base_url().'Pd/'.$values['item_master_id'].'/'.$values['item_master_url_slug'];?>">
                                    <img src="<?php echo $values['item_master_logo']; ?>" alt="<?php echo $values['item_master_name']; ?>" height="50" style="width: 50px;"><?php echo $values['item_master_name']; ?>
                                </a>
                            </td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                    <?php if($values['item_qty']>1){ ?>
                                        <a href="<?php echo base_url().'Cart/dec/'.$values['item_master_id']; ?>"><div class="entry value-minus">&nbsp;</div></a>
                                    <?php }
                                        else
                                        {
                                    ?>
                                        <div class="entry value-minus">&nbsp;</div>
                                    <?php
                                        }
                                    ?>

                                        <div class="entry value">
                                            <span><?php echo $values['item_qty']; ?></span>
                                        </div>

                                    <?php if($values['item_qty']<5){ ?>
                                        <a href="<?php echo base_url().'Cart/inc/'.$values['item_master_id']; ?>"><div class="entry value-plus">&nbsp;</div></a>
                                    <?php }
                                        else
                                        {
                                    ?>
                                        <div class="entry value-plus">&nbsp;</div>
                                    <?php
                                        }
                                    ?>

                                    </div>
                                </div>
                            </td>
                            <td class="invert"><?php echo $values['item_master_price']; ?></td>
                            <td class="invert"><?php echo ($values['item_master_price']*$values['item_qty']); ?></td>
                            <td class="invert">
                                <div class="rem">
                                    <a href="<?php echo base_url().'Cart/delete_item/'.$values['item_master_id']; ?>"><div class="close1"></div></a>
                                </div>
                            </td>
                        </tr>
                        <?php
                                $items+=$values['item_qty'];
                                $total+=($values['item_master_price']*$values['item_qty']);
                                $sr++;
                                }
                            ?>
                              <tr><td></td><td></td><td><?php echo $items.' Items.'; ?></td><td>Total :</td><td><?php echo $total; ?></td><td></td></tr>  
                            <?php
                            }
                            else
                            {
                        ?>
                            <tr class="rem1"><td colspan="6"> No Items</td></tr>
                        <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <?php //////////////cart details///////////////// ?>

        <h3 class="tittle-w3l" id="what">Delivery Address
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>


        <div class="row">
            <div class="col-md-12 text-right">
                <h4><span><a href="<?php echo base_url().'Address/add'; ?>">Add New Address</a></span></h4>
            </div>
        </div>
        <div class="table-responsive">

                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th style="background: #683B26;">Sr. No.</th>
                            <th style="background: #683B26;">Select Address From your list</th>
                            <th style="background: #683B26;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                                            
                        <?php for($i=0;$i<count($address_list);$i++)  { ?>
                        <tr class="rem1">
                            <td><?=$i+1;?></td>
                            <td class="invert" style="text-align: left;">Name : <?=$address_list[$i]['person_name'];?><br> Mobile : <?=$address_list[$i]['person_mobile'];?><br>Address : <?=$address_list[$i]['user_address'];?><br>City : <?=$address_list[$i]['city'];?> <br>State : <?=$address_list[$i]['state'];?> <br>Pin : <?=$address_list[$i]['pin'];?></td>
                            <td class="invert">
                                <div class="rem">
                                    <a href="<?php echo base_url().'Checkout/Payment/'.$address_list[$i]['user_address_id']; ?>"><button class="btn btn-success" style="margin-bottom: 10px;">Deliver At This Address</button></a>
                                </div>
                                 <div class="rem">
                                    <a href="<?php echo base_url().'Address/edit/'.$address_list[$i]['user_address_id']; ?>"><button class="btn btn-primary" style="margin-bottom: 10px;width: 78px;">Edit</button></a>
                                </div>
                                 <div class="rem">
                                    <a href="<?php echo base_url().'Address/remove/'.$address_list[$i]['user_address_id']; ?>"><button type="button" class="btn btn-danger" style="margin-bottom: 10px;width: 78px;">Delete</button></a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        
        <div class="checkout-left">
            <div class="address_form_agile">

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>