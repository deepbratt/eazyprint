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
    <title>Eazyprint | Dashboard
    </title>
    <?php include("metalinks.php");?>
    <!-- Data table css -->
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
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
              <h1 class="text-center">Withdraw Money
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
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
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
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group text-right">
                          <label class="form-label" style="font-size:12px;font-weight:bold;">Note: There is no withdraw fee
                          </label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="table-responsive">
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead >
                              <tr>
                                <th>ID
                                </th>
                                <th>Product Type
                                </th>
                                <th>Model ID
                                </th>
                                <th>Amount
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1
                                </th>
                                <td>T-Shirt
                                </td>
                                <td>T10125
                                </td>
                                <td>11,340
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2
                                </th>
                                <td>T-Shirt
                                </td>
                                <td>T51200
                                </td>
                                <td>11,340
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">3
                                </th>
                                <td>Mobile
                                </td>
                                <td>M5684
                                </td>
                                <td>11,340
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">4
                                </th>
                                <td>Mobile
                                </td>
                                <td>M78955
                                </td>
                                <td>11,340
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">5
                                </th>
                                <td>Mug
                                </td>
                                <td>MU4577
                                </td>
                                <td>11,340
                                </td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <th colspan="3">You will receive
                              </th>
                              <th>56,700
                              </th>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-info">Withdraw Funds
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
    <script src="js/jquery.dataTables.min.js">
    </script>
    <script src="js/dataTables.bootstrap4.min.js">
    </script>
    <script>
      $(function(e) {
        $('#example').DataTable();
      }
       );
    </script>
  </body>
</html>
