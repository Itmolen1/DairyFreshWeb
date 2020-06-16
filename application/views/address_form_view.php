<div id="contact" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <?php if(isset($list)) { ?>
            <h3>Edit Address</h3>
        <?php } else {?>
            <h3>Add New Address</h3>
        <?php } ?>
            <p class="lead"></p>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="contact_form">
                    <div id="message"></div>
                    <form action="<?php echo base_url().$action; ?>" id="addaddress" class="row" name="addaddress" method="post">
                        <fieldset class="row-fluid">
                           
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="person_name" id="person_name" class="form-control" placeholder="Name" required="required" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' maxlength="30" value="<?php if(isset($list)) echo $list['person_name']; ?>">
                            </div>
                            <?php
                                if(isset($list))
                                {
                                    ?>
                                    <input type="hidden" name="user_address_id" id="user_address_id" value="<?php echo $list['user_address_id']; ?>">
                                    <?php
                                }
                            ?>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="person_mobile" id="person_mobile" class="form-control" placeholder="Your mobile number" required="required" maxlength="15" onkeypress='return ((event.charCode >= 48 && event.charCode <= 57))' value="<?php if(isset($list)) echo $list['person_mobile']; ?>">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea name="user_address" id="user_address" class="form-control" placeholder="Your Address"><?php if(isset($list)) echo $list['person_mobile']; ?></textarea>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="city" id="city" class="form-control" placeholder="City" required="required" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' maxlength="30" value="Surat" value="<?php if(isset($list)) echo $list['city']; ?>">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="state" id="state" class="form-control" placeholder="State" required="required" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' maxlength="30" value="Surat" value="<?php if(isset($list)) echo $list['state']; ?>">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <input type="text" name="pin" id="pin" class="form-control" placeholder="PIN" required="required" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))" maxlength="30" value="<?php if(isset($list)) echo $list['pin']; ?>">
                            </div>
                            
                           
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                                <button type="submit" value="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block"><?php if(isset($list)) echo 'Update'; else echo 'ADD'; ?></button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>