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
    <title>Eazyprint | My Sales
    </title>
     <?php $this->load->view("common/metalinks");?>
    <!-- Data table css -->
    <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
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
              <h1 class="text-center">My Sales
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
        </div>
      </div>
    </div>
    </div>
  </div>
 <?php $this->load->view("common/footer");?>
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
