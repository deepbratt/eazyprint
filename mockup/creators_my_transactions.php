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
    <title>Eazyprint | My Transactions
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
              <h1 class="text-center">My Transactions
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
        <div class="row row-cards">
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
              <div class="card-status bg-purple br-tr-3 br-tl-3">
              </div>
              <div class="card-body row">
                <div class="col">
                  <div class="text-muted">Order Quantity
                  </div>
                  <div class="h3 m-0 text-primary counter font-30">
                    <b>897
                    </b>
                  </div>
                </div>
                <div class="col-auto align-self-center ">
                  <div class="card-value float-right text-purple">
                    <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                      <i class="fas fa-users text-white">
                      </i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper px-0">
                <canvas id="widgetChart1">
                </canvas>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
              <div class="card-status bg-teal br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="text-muted">Sales Amount
                    </div>
                    <div class="h3 m-0  text-teal counter font-30">
                      <b>125
                      </b>
                    </div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="card-value float-right text-purple">
                      <div class="icon icon-shape bg-gradient-teal rounded-circle text-white">
                        <i class="fas fa-cart-plus text-white">
                        </i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper px-0">
                <canvas id="widgetChart2">
                </canvas>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
              <div class="card-status bg-yellow br-tr-3 br-tl-3">
              </div>
              <div class="card-body ">
                <div class="row">
                  <div class="col">
                    <div class="text-muted">Commission Amount
                    </div>
                    <div class="h3 m-0 text-orange counter font-30">
                      <b>2056
                      </b>
                    </div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="card-value float-right text-purple">
                      <div class="icon icon-shape bg-gradient-orange rounded-circle text-white">
                        <i class="fas fa-edit text-white">
                        </i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper px-3">
                <canvas id="widgetChart4">
                </canvas>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="card overflow-hidden">
              <div class="card-status bg-blue br-tr-3 br-tl-3">
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="text-muted">Available Balance
                    </div>
                    <div class="h3 m-0  text-blue counter font-30">56,700
                    </div>
                  </div>
                  <div class="col-auto align-self-center">
                    <div class="icon icon-shape bg-gradient-blue rounded-circle text-white">
                      <i class="fas fa-dollar-sign text-white">
                      </i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper px-0">
                <canvas id="widgetChart3">
                </canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-status bg-yellow br-tr-3 br-tl-3">
                  </div>
                  <div class="card-header">
                    <div class="card-title">Data Tables
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th class="wd-15p">First name
                            </th>
                            <th class="wd-15p">Last name
                            </th>
                            <th class="wd-20p">Position
                            </th>
                            <th class="wd-15p">Start date
                            </th>
                            <th class="wd-10p">Salary
                            </th>
                            <th class="wd-25p">E-mail
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Bella
                            </td>
                            <td>Chloe
                            </td>
                            <td>System Developer
                            </td>
                            <td>2018/03/12
                            </td>
                            <td>$654,765
                            </td>
                            <td>b.Chloe@datatables.net
                            </td>
                          </tr>
                          <tr>
                            <td>Donna
                            </td>
                            <td>Bond
                            </td>
                            <td>Account Manager
                            </td>
                            <td>2012/02/21
                            </td>
                            <td>$543,654
                            </td>
                            <td>d.bond@datatables.net
                            </td>
                          </tr>
                          <tr>
                            <td>Harry
                            </td>
                            <td>Carr
                            </td>
                            <td>Technical Manager
                            </td>
                            <td>20011/02/87
                            </td>
                            <td>$86,000
                            </td>
                            <td>h.carr@datatables.net
                            </td>
                          </tr>
                          <tr>
                            <td>Lucas
                            </td>
                            <td>Dyer
                            </td>
                            <td>Javascript Developer
                            </td>
                            <td>2014/08/23
                            </td>
                            <td>$456,123
                            </td>
                            <td>l.dyer@datatables.net
                            </td>
                          </tr>
                          <tr>
                            <td>Karen
                            </td>
                            <td>Hill
                            </td>
                            <td>Sales Manager
                            </td>
                            <td>2010/7/14
                            </td>
                            <td>$432,230
                            </td>
                            <td>k.hill@datatables.net
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- table-wrapper -->
                </div>
                <!-- section-wrapper -->
              </div>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
            <div class="example">
              <div class="btn-list">
                <a href="creators_withdraw.php" class="btn btn-pill btn-info">Withdraw Money
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
<?php include("footer.php");?>
<!-- Data tables -->
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
