<div class="col-lg-3">
  <div class="row">
    <div class="col-md-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title" style="width:100%;">Filters  <a href="#" style="float:right;text-align:right;color:#000;font-size:15px;"><b>Clear All</b></a></div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <select name="sidebar_category" id="select-beast" class="form-control custom-select ez_category">
              <option selected disabled> Category </option>
              <?php
              	$ci =&get_instance();
				$ci->load->model('product_m');
				$fetch_product_data = $ci->product_m->get_all_categories();
              	foreach($fetch_product_data AS $each_cat_data){
              ?>
              <option value="<?php echo $each_cat_data->cat_id;?>"> <?php echo ucfirst($each_cat_data->category_name);?> </option>
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
          <div class="form-group">
            <select name="sidebar_brand" id="select-beast" class="form-control custom-select ez_brand">
              <option selected disabled value=""> Brand </option>
              <?php
              	$ci =&get_instance();
				$ci->load->model('product_m');
				$category_id = '';
				$fetch_brand_data = $ci->product_m->fetch_brandzz($category_id);
              	foreach($fetch_brand_data AS $each_brand_data){
              ?>
              <option value="<?php echo $each_brand_data->raw_brand;?>"> <?php echo $each_brand_data->raw_brand;?> </option>
              <?php
              	}
              ?>
            </select>
          </div>
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

        </div>

		  <div class="card-header">
			<div class="card-title" style="width:100%;"> Size </div>
		  </div>

			<div class="card-body">
				   <div class="form-group m-0">
						<div class="selectgroup selectgroup-pills">
							<label class="selectgroup-item">
								<input type="checkbox" name="size" value="S" class="selectgroup-input" checked="">
								<span class="selectgroup-button">S</span>
							</label>
							<label class="selectgroup-item">
								<input type="checkbox" name="size" value="M" class="selectgroup-input">
								<span class="selectgroup-button">M</span>
							</label>
							<label class="selectgroup-item">
								<input type="checkbox" name="size" value="L" class="selectgroup-input">
								<span class="selectgroup-button">L</span>
							</label>
							<label class="selectgroup-item">
								<input type="checkbox" name="size" value="XL" class="selectgroup-input">
								<span class="selectgroup-button">XL</span>
							</label>
						</div>
					</div>
		  </div>

			<div class="card-header">
				<div class="card-title" style="width:100%;"> Product Shape  </div>
			</div>

			<div class="card-body">
					<div class="form-group m-0">
						<div class="custom-controls-stacked">
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
								<span class="custom-control-label">Round Neck</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
								<span class="custom-control-label">V neck</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
								<span class="custom-control-label">Collar Tshirt</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
								<span class="custom-control-label">Boat Cut</span>
							</label>
						</div>
					</div>
		  </div>
		  
		  <div class="card-header">
				<div class="card-title" style="width:100%;"> Select Color </div>
		  </div>

		  <div class="card-body">
					<div class="form-group m-0">
						<div class="row gutters-xs">
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="azure" class="colorinput-input" checked="">
									<span class="colorinput-color bg-azure"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="indigo" class="colorinput-input">
									<span class="colorinput-color bg-indigo"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="purple" class="colorinput-input">
									<span class="colorinput-color bg-purple"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="pink" class="colorinput-input">
									<span class="colorinput-color bg-pink"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="red" class="colorinput-input">
									<span class="colorinput-color bg-red"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="orange" class="colorinput-input">
									<span class="colorinput-color bg-orange"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="yellow" class="colorinput-input">
									<span class="colorinput-color bg-yellow"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="lime" class="colorinput-input">
									<span class="colorinput-color bg-lime"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="green" class="colorinput-input">
									<span class="colorinput-color bg-green"></span>
								</label>
							</div>
							<div class="col-auto">
								<label class="colorinput">
									<input name="color" type="checkbox" value="teal" class="colorinput-input">
									<span class="colorinput-color bg-teal"></span>
								</label>
							</div>
						</div>
					</div>
			</div>
					
			<div class="card-header">
				<div class="card-title" style="width:100%;"> Material Type </div>
		    </div>
			<div class="card-body">
					<div class="form-group m-0">
						<div class="custom-controls-stacked">
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
								<span class="custom-control-label"> 100% cotton </span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
								<span class="custom-control-label"> Polyster Mix</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled="">
								<span class="custom-control-label"> Ceramic</span>
							</label>
							<label class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked="" disabled="">
								<span class="custom-control-label"> Bio Wash</span>
							</label>
						</div>
					</div>
			 </div>


      </div>
    </div>
  </div>
</div>
<script>
	$(".ez_category").on('change', function() {
	    var cat_id = $(this).children("option:selected").val();
	    $.ajax({
		url: '<?php echo base_url();?>product/ajax_sidebar_filter',
		data: {'cat_id': cat_id,},
		type: "post",
			success: function(response){
			  //$('.ez_brand').html(response);
			  //alert(response);
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
			  //$('.ez_model').html(response);
			  //alert(response);
			}
	  	});
	  });
</script>
