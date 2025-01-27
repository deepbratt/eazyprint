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
    <link rel="icon" href="images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- Title -->
    <title>Eazyprint | Settings
    </title>
   <?php $this->load->view("common/metalinks");?>
    <link href="css/timeline.min.css" rel="stylesheet" />
  </head>
  <body class="app">
    <?php $this->load->view("common/header");?>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
          <div class="card">
            <div class="card-status bg-success br-tr-3 br-tl-3">
            </div>
            <div class="card-body">
              <h1 class="text-center">Settings
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="row">
         <!-- <?php include('creators_sidebar.php');?>-->
		  <?php $this->load->view("common/creators_sidebar");?>
          <div class="col-md-8 col-sm-12 col-xs-12">
            <form class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Full Name
                      </label>
                      <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Email
                      </label>
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Phone
                      </label>
                      <input type="email" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Password
                      </label>
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group ">
                      <div class="form-label">Ask For Support
                      </div>
                      <div class="row">
                        <div class="col-md-4 ">
                          <div class="media mt-1 pb-2">
                            <div class="mediaicon">
                              <i class="fas fa-phone-volume" aria-hidden="true">
                              </i>
                            </div>
                            <div class="media-body ml-1 mt-3">
                              <h6 class="mediafont text-dark">0123456789
                              </h6>
                            </div>
                            <!-- media-body -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="media mt-1 pb-2">
                            <div class="mediaicon">
                              <i class="fab fa-whatsapp" aria-hidden="true">
                              </i>
                            </div>
                            <div class="media-body ml-1 mt-3">
                              <h6 class="mediafont text-dark">0123456789
                              </h6>
                            </div>
                            <!-- media-body -->
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="media mt-1 pb-2">
                            <div class="mediaicon">
                              <i class="fab fa-facebook-messenger" aria-hidden="true">
                              </i>
                            </div>
                            <div class="media-body ml-1 mt-3">
                              <h6 class="mediafont text-dark">0123456789
                              </h6>
                            </div>
                            <!-- media-body -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="reset" class="btn btn-primary">Cancel
                </button>
                <button type="submit" class="btn btn-primary">Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php $this->load->view("common/footer");?>
  </body>
</html>
