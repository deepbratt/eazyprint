<style>
	.card-header{
		background:#f3f4f8;border-bottom:1px solid #d5def0;
	}
	.colorinput input[type=checkbox]:checked + span {
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
		border: 1px solid #000;
	}
	.colorinput-color:before{
		background:none !important;
	}
</style>
<div class="col-lg-3">
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title" style="width:100%;color:#5e5e5e;">Filters  <a href="<?php echo base_url('product/clear_all');?>" style="float:right;text-align:right;color:#000;font-size:15px;"><b>Clear All</b></a></div>
        </div>
		
        <div class="card-body">
          <div class="form-group">
            <select name="sidebar_category" id="select-beast" class="form-control custom-select ez_category">
              <option selected disabled value=""> Category </option>
              <?php
			  	if(isset($this->session->userdata['product_sidebar']['cat_id']) && $this->session->userdata['product_sidebar']['cat_id'] !=""){
					$category_id = $this->session->userdata['product_sidebar']['cat_id'];
				}else{
					$category_id = "";
				}
              	$ci =&get_instance();
				$ci->load->model('product_m');
				$fetch_product_data = $ci->product_m->get_all_categories();
              	foreach($fetch_product_data AS $each_cat_data){
              ?>
              <option value="<?php echo $each_cat_data->cat_id;?>" <?php echo(($category_id == $each_cat_data->cat_id)?'selected':'');?>> <?php echo ucfirst($each_cat_data->category_name);?> </option>
              <?php
              	}
              ?>
            </select>
          </div>
		
		  <!--<div class="form-group">
            <select name="beast" id="select-beast" class="form-control custom-select">
              <option selected disabled> Sub-Category </option>
              <option value="1"> Phone </option>
              <option value="2"> T-shirt </option>
              <option value="3"> Mug </option>
              <option value="4"> Tiles </option>
            </select>
          </div>-->
          <div class="form-group" id="reload_brand">
            <select name="sidebar_brand" id="select-beast" class="form-control custom-select ez_brand">
              <option selected disabled value=""> Brand </option>
              <?php
			  
				if(isset($this->session->userdata['product_sidebar']['brand_name']) && $this->session->userdata['product_sidebar']['brand_name'] !=""){
					$brand_name = $this->session->userdata['product_sidebar']['brand_name'];
				}else{
					$brand_name = "";
				}
              	$ci =&get_instance();
				$ci->load->model('product_m');
				//$category_id = '';
				$fetch_brand_data = $ci->product_m->fetch_brandzz($category_id);
              	foreach(array_unique($fetch_brand_data) AS $each_brand_data){
              ?>
              <option value="<?php echo $each_brand_data->raw_brand;?>" <?php echo(($brand_name == $each_brand_data->raw_brand)?'selected':'');?>> <?php echo $each_brand_data->raw_brand;?> </option>
              <?php
              	}
              ?>
            </select>
          </div>
		  <!--<?php
			if(isset($this->session->userdata['product_sidebar']['cat_id']) && $this->session->userdata['product_sidebar']['cat_id'] == '3'){
		  ?>
          <div class="form-group">
            <select name="beast" id="select-beast1" class="form-control custom-select ez_model">
              <option selected disabled value=""> Model </option>
             <?php
              	$ci =&get_instance();
				$ci->load->model('product_m');
				$brand_name = '';
				$fetch_model_data = $ci->product_m->fetch_modelzz($brand_name);
              	foreach($fetch_model_data AS $each_model_data){
              ?>
              <option value="<?php echo $each_model_data->raw_name;?>"> <?php echo $each_model_data->raw_name;?> </option>
              <?php
              	}
              ?>
            </select>
          </div>
		  <?php
			  }		  
		  ?>-->

		</div>
		<?php
			if(isset($this->session->userdata['product_sidebar']['size']) && $this->session->userdata['product_sidebar']['size'] !=""){
				$size = $this->session->userdata['product_sidebar']['size'];
			}else{
				$size = "";
			}
			if(isset($this->session->userdata['product_sidebar']['shape']) && $this->session->userdata['product_sidebar']['shape'] !=""){
				$shape_type = $this->session->userdata['product_sidebar']['shape'];
			}else{
				$shape_type = "";
			}
			if(isset($this->session->userdata['product_sidebar']['color']) && $this->session->userdata['product_sidebar']['color'] !=""){
				$color_type = $this->session->userdata['product_sidebar']['color'];
			}else{
				$color_type = "";
			}
			if(isset($this->session->userdata['product_sidebar']['material_type']) && $this->session->userdata['product_sidebar']['material_type'] !=""){
				$material_type = $this->session->userdata['product_sidebar']['material_type'];
			}else{
				$material_type = "";
			}
			if(!empty($products[0]->raw_size)){
		?>
		  <div class="card-header" style="color:#5e5e5e;">
			<div class="card-title" style="width:100%;color:#5e5e5e;"> Product Size </div>
		  </div>

			<div class="card-body">
			   <div class="form-group m-0">
					<div class="selectgroup selectgroup-pills">
						<?php
							$size_data = $this->product_m->fetch_size($category_id,$brand_name);
							foreach($size_data AS $each_size_data){
						?>
							<label class="selectgroup-item">
								<input type="checkbox" name="size" value="<?php echo $each_size_data->raw_size;?>" class="selectgroup-input ez_size" <?php echo (($each_size_data->raw_size == $size)?'checked':'')?> id="size_check">
								<span class="selectgroup-button"><?php echo $each_size_data->raw_size;?></span>
							</label>
						<?php
							}	
						?>
					</div>
				</div>
		  </div>
		<?php
		}
		?>
		<?php
			if(!empty($products[0]->raw_shapetype)){
		?>
			<div class="card-header" style="color:#5e5e5e;">
				<div class="card-title" style="width:100%;color:#5e5e5e;"> Product Shape  </div>
			</div>

			<div class="card-body">
				<div class="form-group m-0">
					<div class="custom-controls-stacked">
						<?php
							
							$shape_data = $this->product_m->fetch_shape($category_id,$brand_name,$size);
							foreach($shape_data AS $each_shape_data){
						?>
						<label class="custom-control custom-checkbox">
							<input type="radio" class="custom-control-input" name="shape" value="<?php echo $each_shape_data->raw_shapetype;?>" <?php echo (($each_shape_data->raw_shapetype == $shape_type)?'checked':'')?> onClick="shape_check(this.value);">
							<span class="custom-control-label"><?php echo $each_shape_data->raw_shapetype;?></span>
						</label>
						<?php
							}
						?>
					</div>
				</div>
		  </div>
		  <?php
			}					
		  ?>
		  <?php
			if(!empty($products[0]->raw_color_code)){
		  ?>
		  <div class="card-header" style="color:#5e5e5e;">
				<div class="card-title" style="width:100%;color:#5e5e5e;"> Select Color </div>
		  </div>

		  <div class="card-body">
				<div class="form-group m-0">
					<div class="row gutters-xs">
						<?php
							$color_data = $this->product_m->fetch_colorz($category_id,$brand_name,$size,$shape_type);
							foreach($color_data AS $each_color_data){
						?>
						<div class="col-auto">
							<label class="colorinput">
								<input name="color" type="checkbox" value="<?php echo $each_color_data->raw_color_code;?>" class="colorinput-input" <?php echo (($each_color_data->raw_color_code == $color_type)?'checked':'')?> onClick="color_check(this.value);">
								<span class="colorinput-color" style="background-color:<?php echo $each_color_data->raw_color_code;?>"></span>
							</label>
						</div>
						<?php
							}	
						?>
					</div>
				</div>
			</div>
		 <?php
			}					
		  ?>
		  <?php
			if(!empty($products[0]->raw_material_type)){
		  ?>	
			<div class="card-header" style="color:#5e5e5e;">
				<div class="card-title" style="width:100%;color:#5e5e5e;"> Material Type </div>
		    </div>
			<div class="card-body">
					<div class="form-group m-0">
						<div class="custom-controls-stacked">
							<?php
								$material_type_data = $this->product_m->fetch_material_type_data($category_id,$brand_name,$size,$shape_type,$color_type);
								foreach($material_type_data AS $each_material_type_data){
							?>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="material_type" value="<?php echo $each_material_type_data->raw_material_type;?>" <?php echo (($each_material_type_data->raw_material_type == $material_type)?'checked':'')?> onclick="material_typezz(this.value);">
								<span class="custom-control-label"><?php echo $each_material_type_data->raw_material_type;?></span>
							</label>
							<?php
								}	
							?>
						</div>
					</div>
			 </div>
			<?php
				}					
			?>
      </div>
    </div>
  </div>
</div>
<script>
	$(".ez_category").on('change', function() {
	    var catz_id = $(this).children("option:selected").val();
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'cat_id': catz_id,},
		type: "post",
			success: function(response){
				location.reload();
			}
	  	});
	  });
	$(".ez_brand").on('change', function() {
	    var brand_name = $(this).children("option:selected").val();
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'brand_name': brand_name,},
		type: "post",
			success: function(response){
			  location.reload();
			  //alert(response);
			}
	  	});
	  });
	 $(".ez_size").on('click', function() {
	    var size = $('#size_check').val();
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'size': size,},
		type: "post",
			success: function(response){
			  location.reload();
			  //alert(response);
			}
	  	});
	  });
	 function shape_check(e) {
	    var shape = e;
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'shape': shape,},
		type: "post",
			success: function(response){
			  location.reload();
			  //alert(response);
			}
	  	});
	  };
	  function color_check(e) {
	    var color = e;
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'color': color,},
		type: "post",
			success: function(response){
			  location.reload();
			  //alert(response);
			}
	  	});
	  };
	  function material_typezz(e) {
	    var material_type = e;
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'material_type': material_type,},
		type: "post",
			success: function(response){
			  location.reload();
			  //alert(response);
			}
	  	});
	  };
</script>
