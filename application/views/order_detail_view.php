<script>
// 	$(document).ready(function () {
//     $('html, body').animate({
//         scrollTop: $('#what').offset().top
//     }, 'slow');
// });
</script>
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="<?php echo base_url(); ?>">Home</a>
                    <i>|</i>
                </li>
                <li>Order Detail</li>
            </ul>
        </div>
    </div>
</div>

<div class="privacy">
    <div class="container">
        <h3 class="tittle-w3l">Order Detail
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>

        <div class="checkout-right" id="what">
            <div class="row">
                <div class="col-md-9">
                    <h4>Order # 
                        <span><?php echo $order_detail['order_ref_no'];?></span>
                    </h4>
                </div>
                <div class="col-md-3 text-right">
                    <h4><span><a href="#">Cancel Order</a></span></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">Ordered On : <?= $order_detail['created_at'];?></div>
            </div>

            <table class="table table-bordered" >
              <thead style="color: black;">
                <tr>
                  <th scope="col">Shipping Address</th>
                  <th scope="col">Payment Method</th>
                  <th scope="col">Order Summary</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                  <td><?=$order_detail['user_address'];?></td>
                  <td>Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking acceptance subject to device availability.</td>
                  <td>Item(s) Subtotal:  1,199.00
                    Shipping:  0.00
                    Total:  1,199.00
                    Grand Total:  1,199.00</td>
                </tr>
                
              </tbody>
            </table>
            
            <div class="table-responsive">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($order_items))
                            {
                                //echo "<pre>";print_r($order_items);
                                $total=0;
                                $items=0;
                                $sr=0;
                                foreach ($order_items as $keys => $values)
                                {
                        ?>                       

                        <tr class="rem1">
                            <td class="invert"><?php echo $sr+1; ?></td>
                            <td class="invert-image">
                                <a href="<?=base_url().'Pd/'.$values['item_master_id'].'/'.$values['item_master_url_slug'];?>">
                                    <img src="<?php echo $values['item_master_logo']; ?>" alt="<?php echo $values['item_master_name']; ?>" height="200" width="200"><?php echo $values['item_master_name']; ?>
                                </a>
                            </td>
                            <td class="invert"><?php echo $values['item_qty']; ?></td>
                            <td class="invert"><?php echo $values['item_master_price']; ?></td>
                            <td class="invert"><?php echo ($values['item_master_price']*$values['item_qty']); ?></td>
                        </tr>
                        <?php
                                $items+=$values['item_qty'];
                                $total+=($values['item_master_price']*$values['item_qty']);
                                $sr++;
                                }
                            ?>
                              <tr><td></td><td></td><td><?php echo $items.' Items.'; ?></td><td>Total :</td><td><?php echo $total; ?></td></tr>  
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
        <div class="checkout-left">
            <div class="address_form_agile">
                                  
                <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                    <div class="information-wrapper">
                        <a href="<?php echo base_url(); ?>"><button class="submit check_out">Continue Shopping</button></a>

                        <a href="<?php echo base_url().'OrderDetail/List'; ?>"><button class="submit check_out">My Order List</button></a>
                    </div>                        
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>