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
    <title>Eazyprint | Submit Your Artwork
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
              <h1 class="text-center">Submit Your Artwork
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
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="card-body" style="height:600px;">
                <h1 class="text-center">How it works
                </h1>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <form class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                <h1 class="text-center">Form
                </h1>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Design Title
                      </label>
                      <input type="text" class="form-control" placeholder="Design Title">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Design Description
                      </label>
                      <textarea rows="5" class="form-control" placeholder="Enter About your design description">
                      </textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group m-0">
                        <div class="form-label">Design For
                        </div>
                        <div class="custom-controls-stacked">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="Mobile" checked="">
                            <span class="custom-control-label">Mobile
                            </span>
                          </label>
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="T-Shirt" checked="">
                            <span class="custom-control-label">T-Shirt
                            </span>
                          </label>														
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Upload Design
                      </label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Cancel
                </button>
                <button type="submit" class="btn btn-primary">Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
