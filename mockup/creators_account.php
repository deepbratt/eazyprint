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
    <title>Eazyprint | Account
    </title>
    <?php include("metalinks.php");?>
    <link href="css/timeline.min.css" rel="stylesheet" />
  </head>
  <body class="app">
    <?php include("header.php");?>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
          <div class="card">
            <div class="card-status bg-success br-tr-3 br-tl-3">
            </div>
            <div class="card-body">
              <h1 class="text-center">Account
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
          <?php include('creators_sidebar.php');?> 
          <div class="col-lg-8">
            <div class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                 <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Bank Name
                      </label>
                      <input type="text" class="form-control" placeholder="Bank Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Branch Name
                      </label>
                      <input type="text" class="form-control" placeholder="Branch Name">
                    </div>
                  </div>
				  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Branch Code
                      </label>
                      <input type="text" class="form-control" placeholder="Branch Code">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">IFSC Code
                      </label>
                      <input type="text" class="form-control" placeholder="IFSC Code">
                    </div>
                  </div>
				  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Account Number
                      </label>
                      <input type="text" class="form-control" placeholder="Account Number">
                    </div>
                  </div>
                </div>
              </div>
			  <div class="card-footer text-right">
                <button type="reset" class="btn btn-primary">Cancel
                </button>
                <button type="submit" class="btn btn-primary">Submit
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
