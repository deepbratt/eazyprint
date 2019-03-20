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
    <title>Eazyprint | Account
    </title>
    <?php
$this->load->view("common/metalinks");
?>
    <link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
    <style>
      .sidebar_active{
        background:#009fdc !important;
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
        <div class="row">
          <?php $this->load->view("customer/customer_sidebar");?>
          <div class="col-lg-8">
            <div class="card">
              <div class="panel panel-primary">
                <div class="tab-menu-heading">
                  <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                      <li >
                        <a href="#personal" class="active" data-toggle="tab">Personal info
                        </a>
                      </li>
                      <li class="">
                        <a href="#address" data-toggle="tab">Billing Address
                        </a>
                      </li>
                      <li>
                        <a href="#password" data-toggle="tab">Password Change
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php
        				  if($this->session->flashdata('success')){
        				?>
        					<div class="alert alert-success">
        						<strong><?php echo $this->session->flashdata('success');?></strong>
        					</div>
        				<?php
        				}
        				if($this->session->flashdata('failed')){
        				?>
        					<div class="alert alert-danger">
        						<strong><?php echo $this->session->flashdata('failed');?></strong>
        					</div>
        				<?php
        				}
        				if($this->session->flashdata('exist')){
        				?>
        					<div class="alert alert-warning">
        						<strong><?php echo $this->session->flashdata('exist');?></strong>
        					</div>
        				<?php
        				}
        				?>
                <div class="panel-body tabs-menu-body">
                  <div class="tab-content">
                    <div class="tab-pane active " id="personal">
                      <div class="col-lg-12">
                        <form class="card" method="POST" enctype="multipart/form-data" action="<?php echo base_url('account/update_account_info');?>">
                          <div class="card-body">
                            <div class="row">
                               <div class="col-md-4">
                                <div class="form-group">
                                  <label class="form-label">Profile Image</label>
                                     <?php
                                         if($fetch_account_details->user_profile_image == ''){
                                     ?>
                                      <span onclick="product_image()" id="hide_span" class="btn btn-icon btn-primary file_upload_icon">
                                        <i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
                                        <strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong>
                                      </span>
                                      <input type="file" name="profile_image" id="pro_image" class="form-control" style="display:none;" onchange="show_image(this);">
                                      <img src="" onclick="profile_imagezz()" style="height:150px;display:none;" id="p_blah">
                                      <?php
                                        }else{
                                      ?>
                                        <input type="file" name="profile_image" id="pro_image" class="form-control" style="display:none;" onchange="show_image(this);">
                                        <img src="<?php echo base_url('uploads/user_profile_image/');?><?php echo $fetch_account_details->user_profile_image;?>" onclick="profile_imagezz()" style="height:150px;" id="p_blah">
                                      <?php
                                      }
                                      ?>
                                </div>
                              </div>
                            <div class="col-md-8">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">First Name
                                  </label>
                                  <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $fetch_account_details->user_fname;?>" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Last Name
                                  </label>
                                  <input type="text" class="form-control" name="lname"  placeholder="Last Name" value="<?php echo $fetch_account_details->user_lname;?>" required>
                                </div>
                              </div>
                               <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Email address
                                  </label>
                                  <input type="email" class="form-control" name="email"  placeholder="Email" value="<?php echo $fetch_account_details->user_email;?>" required>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Phone
                                  </label>
                                  <input type="number" class="form-control" id="mobile" name="phone"  placeholder="Phone" value="<?php echo $fetch_account_details->user_phone;?>" onkeyup="check(); return false;"  required>
                                  <span id="message"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                         
                        </div>
                          </div>
                          <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="col-lg-12">
                        <form class="card" method="POST" action="<?php echo base_url('account/update_address');?>">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label class="form-label">Address
                                  </label>
                                  <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $fetch_account_details->user_address;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">City
                                  </label>
                                  <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $fetch_account_details->user_city;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">State
                                  </label>
                                  <input type="text" class="form-control" name="state" placeholder="State" value="<?php echo $fetch_account_details->user_state;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Postal Code
                                  </label>
                                  <input type="number" class="form-control" name="pincode" placeholder="ZIP Code" value="<?php echo $fetch_account_details->user_pincode;?>">
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                  <label class="form-label">Country
                                  </label>
                                  <select class="form-control custom-select" name="country">
                                    <option value="India" selected>India</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="tab-pane  " id="password">
                      <div class="card">
                        <div class="card-body">
                          <form  method="post">
                            <div class="mt-4">
                              <div class="card-title">Forgot password</div>
                              <p class="text-muted">Enter your email address and your password will be reset and emailed to you.
                              </p>
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Send me new password
                                </button>
                              </div>
                            </div>
                          </form>
                          <div class="text-center text-muted mt-3 ">
                            Forget it, 
                            <a href="<?php echo base_url('login');?>">send me back
                            </a> to the sign in screen.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
$this->load->view("common/footer");
?>
  </body>
</html>
<script>
  function profile_imagezz(){
      $("input[id='pro_image']").click();
    }
  function show_image(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#p_blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
      $('#p_blah').show();
      $('#hide_span').hide();
    }
  }
</script>
