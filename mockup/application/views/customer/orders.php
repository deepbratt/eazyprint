<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js">
    </script>
    <!-- Title -->
    <title>Eazyprint | Orders
    </title>
    <?php
$this->load->view("common/metalinks");
?>
    <link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
    <style>
      .sidebar_active{
        background:#f5365c !important;
        border-radius: 25px;
      }
      .mediaicon_active{
        border: 1px solid #fff;
        background: #fff;
        color: #F5365C;
      }
      .mediafont:hover {
        color: #F5365C !important;
      }
      .sidebar_active .text-dark{
        color:#fff !important;
        margin-top:8px !important;
      }
    </style>
  </head>
  <body class="app">
    <?php
$this->load->view("common/header");
?>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
		   <?php
				if($this->session->flashdata('success')){
			?>
				<div class="alert alert-success" style="text-align:center;"> 
				  <strong >
					<?php echo $this->session->flashdata('success');?>
				  </strong> 
				</div>
            <?php
			}
				if($this->session->flashdata('failed')){
			?>
				<div class="alert alert-danger"> 
				  <strong>
					<?php echo $this->session->flashdata('failed');?>
				  </strong> 
				</div>
			<?php
			}
			if($this->session->flashdata('order_cancel_success'))
			{

			?>
			<div class="alert alert-success" style="text-align:center;"> 
			  <strong >
				<?php echo $this->session->flashdata('order_cancel_success');?>
			  </strong> 
			</div>
			<?php

			}
			?>
        <div class="row">
          <?php $this->load->view("customer/customer_sidebar");?>
          <div class="col-lg-8" style="margin-bottom:30px;">
			<?php
				$count_order = count($get_orders);
				
				if($count_order > 0)
				{
					//print_r ($get_orders);
					//print_r ();
					foreach($get_orders As $fetch_prod_yoo)
					{

				
			?>
            <div class="row" style="border:1px solid #cccccc;padding:20px;">
              <div class="col-md-1 p-1">
                <div class="form-group">
				<?php
					$this->load->model('orders_m');

				
					
					
				?>
                  <img src="<?php echo $fetch_prod_yoo->product_image;?>" style="max-height:200px;">
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-group">
                  <h4><?php echo $fetch_prod_yoo->product_name;?>
                  </h4>
                </div>
            	<?php
					$this->load->model('orders_m');
					$seller_id = $fetch_prod_yoo->supplier_name;
					$count_it = $this->orders_m->user_detail($seller_id);
					if($count_it > 0){
						$fetch_supplier_name = $this->orders_m->user_detailzz($seller_id);
					//print_r($fetch_supplier_name);
					//print_r($fetch_supplier_name);
					//$count_user = count($fetch_supplier_name);
					
				?>
				<div class="form-group">
					<span><b>Seller:</b> <?php echo $fetch_supplier_name->user_fname;?></span>
				</div>
				<?php
					}else{
				?>
				<div class="form-group">
					<span><b>Seller:</b> Eazyprint</span>
				</div>
				<?php
					}
				?>
                <div class="form-group">
                  <span>
                    <b>Qty:
                    </b> <?php echo $fetch_prod_yoo->order_qty;?>
                  </span>
                </div>
                <div class="form-group">
                  <span style="font-size:21px;">
                    <i class="fas fa-rupee-sign">
                    </i> <?php echo $fetch_prod_yoo->order_amount;?>
                  </span>
                  <!-- <strong style="padding-left:10px;color:green;">1 Offer Available
                  </strong> -->
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
				<?php
					if($fetch_prod_yoo->delivery_status == 'Delivered')
						{
				?>
                  <a href="<?php echo base_url('orders/refund_process/');?><?php echo $fetch_prod_yoo->order_id;?>">Refund
                  </a>
				 <?php
						}
					else
						{
				 ?>
				<a href="<?php echo base_url('orders/cancel_order/');?><?php echo $fetch_prod_yoo->order_id;?>">Cancel Order
                  </a>
				<?php
						}
				?>
                </div>
                <div class="form-group">
                  <span>Order Place on 
                    <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->order_date);?>
                    </span>
                  </span>
                </div>
				<?php
					if($fetch_prod_yoo->delivery_date != '')
						{
				?>
                <div class="form-group">
                  <span>Delivery on 
                    <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->delivery_date);?>
                    </span>
                  </span>
                </div>
				<?php
						}
				?>
                <div class="form-group">
                  <span>Delivery Status | 
                    <span style="font-weight:bold;color:#e40046;"><?php echo $fetch_prod_yoo->delivery_status;?>
                    </span>
                  </span>
                </div>
              </div>
            </div>
			<?php
					}
				}
				else
				{
			?>
			<div class="row" style="border:1px solid #cccccc;margin-top:10px;padding:20px;text-align:center;">
				<p style="text-align:center;">You Have Not Place Any Order Yet!!</p>
			</div>
			<?php
				}
			?>
          </div>
        </div>
      </div>
    </div>
    <?php
$this->load->view("common/footer");
?>
  </body>
</html>
