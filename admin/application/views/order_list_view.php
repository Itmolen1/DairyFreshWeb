<!--MODAL DIALOG BOX FOR PAYMENT RECORD-->
<script type="text/javascript">
    jQuery(document).on("click", ".get_suborder_details", function(){
    //$(document).ready(function(){
    //alert(this.id);
    var jss =this.id.split('get_suborder_details');
    //alert(jss[1]);
    //var id = val;
        var data = jss[1];
        var baseURL = '<?php echo base_url(); ?>';
        var hitURL = baseURL + "get_suborder_details";
        $.ajax({
            type : "POST",
            dataType : "json",
            url : hitURL,
            data : { data : data } 
            }).done(function(data){

                //alert(data);
                //window.open(data,'_blank');
                $('.suborder-display').html('');
                $('.suborder-display').append(data.finalresult);
                $('.test').html('');
                $('.test').append(data.sr_id);
                //$('#purchase_order_bill_no').val(data.purchase_order_bill_no);
                //$('#po_payment_record_total_amt').val(data.purchase_order_grand_total);
                //$('#po_payment_record_paid_amt').val(data.purchase_order_paid_amt);
                //$('#po_payment_record_due_amt').val(data.purchase_order_due_amt);
                //var data = JSON.parse(JSON.parse(json).data);
                //console.log(data);                 
            });
});
</script>
<div id="suborder-modal" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 1100px;">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Order Details</h3>
            </div>
            <form method="post">
                <div class="modal-body suborder-display">
                </div>
                <div class="modal-footer">
                	<span class="test"></span>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="hidden" name="m_sr_id" id="m_sr_id">                    
                </div>
            </form>
        </div>
    </div>
</div>
<!--MODAL DIALOG BOX FOR PAYMENT RECORD-->



<style type="text/css">
    .dis
    {
        cursor: not-allowed;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-truck"></i>Order Management
        <small></small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Oeder List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>order_listing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search" />
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                        <th>User Name</th>
                        <th>User Mobile</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($servicesRecords))
                    {
                        foreach($servicesRecords as $record)
                        {
                            //echo "<pre>";print_r($record);die;
                    ?>
                    <tr>
                        <td><?php echo $record->name; ?></td>
                        <td><?php echo $record->mobile; ?></td>
                        
                        <td><?php switch ($record->status) {
                            case '0': echo 'New';break;
                            case '1': echo 'Accepted by admin';break;
                            case '2': echo 'Rejected by admin';break;
                            case '3': echo 'Assigned by admin';break;
                            case '4': echo 'Accepted by Employee';break;
                            case '5': echo 'Employee at customer place';break;
                            case '6': echo 'Employee started Inspection';break;
                            case '7': echo 'Quotation Created';break;
                            case '8': echo 'Quotation Confirmed';break;
                            case '9': echo 'Job Started';break;
                            case '10': echo 'Unpaid';break;
                            case '11': echo 'Completed';break;
                            case '99': echo 'Cancelled by user';break;
                            default:  echo 'N.A.';break;
                        } ?></td>
                        <td><?php echo $record->created_at; ?></td>
                        <td class="text-center">

                            <?php if(isset($this->session->userdata['myfinal']['order_listing']['p_add']) && $this->session->userdata['myfinal']['order_listing']['p_add']==1 || $this->session->userdata['role']==1) { ?>
                            <a class="btn btn-sm btn-info get_suborder_details" href="javascript:void(0)" value="<?php echo $record->order_id; ?>" id="<?php echo 'get_suborder_details'.$record->order_id; ?>" title="What's Inside" data-toggle="modal" data-target="#suborder-modal"><i class="fa fa-info-circle"></i></a>
                            <?php } ?>
                            
                            <a  <?php if($record->status==1) { echo 'href="'.base_url().'edit_order/'.$record->order_id.'"'; echo 'class="btn btn-sm btn-info"';} else echo 'class="btn btn-sm btn-info dis bg-orange"'; ?> title="Assign"><i class="fa fa-hand-o-right" ></i></a>

                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'detailed_status_order/'.$record->order_id; ?>" title="Detailed Status"><i class="fa fa-binoculars"></i></a>

                            <a class="btn btn-sm btn-info" href="<?php echo base_url().'track_order/'.$record->order_id; ?>" title="Track"><i class="fa fa-map-marker"></i></a>
                            
                            <a class="btn btn-sm btn-danger deleteServices" href="<?php echo base_url().'delete_order/'.$record->order_id; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record?');"><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>
                    <?php
                        }
                    }
                    else{ ?>
                        <td><?php echo "no recodrs found"; ?></td>
                    <?php
                    }
                    ?>
                  </table>
                  
                </div>
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "order_listing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
