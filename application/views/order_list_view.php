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
                <li>My Orders</li>
            </ul>
        </div>
    </div>
</div>

<div class="privacy" style="padding: 1em 0;">
    <div class="container">


        <h3 class="tittle-w3l" id="what">My Orders
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>

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
                                            
                        <?php for($i=0;$i<count($my_orders);$i++)  { ?>
                        <tr class="rem1">
                            <td><?=$i+1;?></td>
                            <td class="invert" style="text-align: left;">Order# : <?=$my_orders[$i]['order_ref_no'];?><br> Order Amount : <?=$my_orders[$i]['order_grand_total'];?></td>
                            <td class="invert">
                                <div class="rem">
                                    <a href="<?php echo base_url().'OrderDetail/'.$my_orders[$i]['order_ref_no']; ?>"><button class="btn btn-success" style="margin-bottom: 10px;">View Details</button></a>
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