<div class="banner2-w3ls">

</div>

<div class="breadcrumb-agile">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
                <a href="<?=base_url();?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $products['cat_id']['item_category_name']; ?></li>
        </ol>
    </nav>
</div>

<div id="about" class="section wb">
    <div class="container">
        <div class="section-title text-center">
        <h3><?php echo $products['cat_id']['item_category_name']; ?></h3>
        <?php
        if(!empty($products['products']))
        {
            for($i=0;$i<count($products['products']);$i++) 
            {
        ?>
            <a href="<?=base_url().'Pd/'.$products['products'][$i]['item_master_id'].'/'.$products['products'][$i]['item_master_url_slug'];?>"><div class="col-md-3 col-sm-6 prdoduct-sq ">
                <div class="about-item">
                    <div class="about-icon">
                        <span class="icon"><img class="product-img" height="128" width="128" src="<?php echo $products['products'][$i]['item_master_logo']; ?>" alt="<?=$products['products'][$i]['item_master_name'];?>"></span>
                    </div>
                    <div class="about-text">
                        <h3> <a href="<?=base_url().'Pd/'.$products['products'][$i]['item_master_id'].'/'.$products['products'][$i]['item_master_url_slug'];?>"><?php echo $products['products'][$i]['item_master_name']; ?></a></h3>
                    </div>
                </div>
            </div>
            </a>
        <?php 
            }
        }
        else
        {
            ?><h1>Sorry ! Products Not Available in This Category.</h1><?php 
        } 
        ?>   
        </div>
    </div>
</div>