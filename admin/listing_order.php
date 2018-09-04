
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Eazyprint | View Orders</title>

	<?php include("metalinks.php");?>
    <!--dynamic table-->
    <link href="css/demo_page.css" rel="stylesheet" />
    <link href="css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/DT_bootstrap.css" />
    
  </head>

  <body>

  <section id="container" class="">
      <?php include("header.php");?>
      <?php include("sidebar.php");?>
      <!--main content start-->
      <section id="main-content">
	  	 <section class="wrapper">
              <!-- page start-->
              <div class="row">
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
					Orders Listing
              </header>
              <div class="panel-body">
              <div class="adv-table">
              <table  class="display table table-bordered table-striped" id="dynamic-table">
              <thead>
              <tr>
			  	   <th>Model Number</th>
                   <th>Number of pieces</th>
				   <th>Address</th>
				   <th>Order Status</th>
				   <th>Selling Address</th>
				   <th>Date</th>
				   <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr class="gradeX">
                  <td>Lenovo Vibe K5 Note</td>
				  <td>10</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td>Delivered</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td><?php echo date("d/m/Y");?></td>
                  <td><div class="form-group" style="padding-right:15px;"><a href="add_product.php" class="btn btn-success" style="padding:6px 19px;">Edit</a></div><div class="form-group"><input type="button" class="btn btn-danger" value="Delete"></div></td>
              </tr>
			  <tr class="gradeX">
                  <td>Lenovo Vibe K5 Note</td>
				  <td>10</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td>Delivered</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td><?php echo date("d/m/Y");?></td>
                  <td><div class="form-group" style="padding-right:15px;"><a href="add_product.php" class="btn btn-success" style="padding:6px 19px;">Edit</a></div><div class="form-group"><input type="button" class="btn btn-danger" value="Delete"></div></td>
              </tr>
			  <tr class="gradeX">
                  <td>Lenovo Vibe K5 Note</td>
				  <td>10</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td>Delivered</td>
				  <td>2A Port Plaza, 32/2 Port Blair Lane, Barrackpore PIN:700120</td>
				  <td><?php echo date("d/m/Y");?></td>
                  <td><div class="form-group" style="padding-right:15px;"><a href="add_product.php" class="btn btn-success" style="padding:6px 19px;">Edit</a></div><div class="form-group"><input type="button" class="btn btn-danger" value="Delete"></div></td>
              </tr>
			  </tbody>
              </table>
              </div>
              </div>
              </section>
      </section>
      <!--main content end-->
     
	<?php include("footer.php");?>
	</section>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->

    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>
    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--dynamic table initialization -->
    <script src="js/dynamic_table_init.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  </body>
</html>
