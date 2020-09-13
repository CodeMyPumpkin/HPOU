<!doctype html>
<html lang="en">

<head>
  <title>HAMPERS</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href=# class="simple-text logo-normal">
          HAMPERS
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="material-icons">analytics</i>
              <p>Hamper Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="kit-builder.php">
              <i class="material-icons">content_paste</i>
              <p>Kit Builder</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="build-tracker.php">
              <i class="material-icons">assignment</i>
              <p>Build Tracker</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kit-catalogue.php">
              <i class="material-icons">view_quilt</i>
              <p>Kit Catalogue</p>
            </a>
          </li>
          <!-- sidebar here -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              
              <!-- navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card card-nav-tabs">
            <div class="card-header card-header-primary">
              Kit Creator
            </div>
            <div class="card-body">

              <div class="row">
                <div class="ml-3">
                  <input type="image" src="assets\img\img.png" width="200px"/>
                  <input type="file" id="my_file" style="display: none;" />
                </div>
                <input type="text" id="SkuNo" style="display: none;">

                <div class="col-2">
                  <div class="form-group mt-5 ml-5">
                     <label for="kitSKU" class="control-label">SKU</label>
                     <input type="text" class="form-control" id="kitSKU" maxlength="7">
                     <span class="form-control-feedback"><span class="material-icons">clear</span></span>
                  </div>
                </div>

                <div class="col-4">
                  <div class="form-group mt-5 ml-5">
                     <label for="kitDESC" class="control-label">Description</label>
                     <input type="text" class="form-control" id="kitDESC">
                     <span class="form-control-feedback"><span class="material-icons">clear</span></span>
                  </div>
                </div>

                  <div class="form-group mt-5 ml-5">
                    <label for="kitTYPE">Type</label>
                    <select class="form-control" id="kitTYPE">
                      <option value="AYR">All Year Round</option>
                      <option value="XMAS">Christamas</option>
                      <option value="CORP">Corporate</option>
                      <option value="WHSL">Wholesale</option>
                    </select>
                  </div>

                  <div class="col-2">
                  <div class="form-group mt-5 ml-5">
                     <label for="kitQTY" class="control-label">QTY</label>
                     <input type="email" class="form-control" id="kitQTY">
                  </div>
          
              </div>
            </div>
            <div class="card-footer text-muted">
            
            </div>
          </div>
        </div>

        <div class="card card-nav-tabs mt-5 col-xl-11 mx-auto">
            <div class="card-header card-header-primary">
              Kit Detail

              
            </div>
            <div class="card-body">

              <form class="repeater">
              <!--
                  The value given to the data-repeater-list attribute will be used as the
                  base of rewritten name attributes.  In this example, the first
                  data-repeater-item's name attribute would become group-a[0][text-input],
                  and the second data-repeater-item would become group-a[1][text-input]
              -->
              <div data-repeater-list="">
                <div data-repeater-item>
                  <div class="row">
                    <div class="form-group col-2">
                       <label for="SKU">SKU</label>
                       <input type="text" class="form-control" id="SKU" name="SKU" maxlength="7">
                    </div>
                    <div class="form-group col-3">
                       <label for="DESC">DESCRIPTION</label>
                       <input type="text" class="form-control" id="DESC" name="DESC">
                    </div>
                    <div class="form-group col-2">
                       <label for="QTY">Qty Per Hamper</label>
                       <input type="text" class="form-control" value="1" id="QTY" name="QTY">
                    </div>
                    <div class="form-group col-2">
                       <label for="ONHND">Stock on hand</label>
                       <input type="text" class="form-control" id="ONHND" name="ONHND">
                    </div>
                    <input  type="button" data-repeater-delete class="btn btn-danger" value="Remove Component"/>
                  </div>
                </div>

            </div>

            <input type="button" value="Add New Component" data-repeater-create class="btn btn-success">
          
          </div>
        </div>

           <button type="button" class="btn btn-danger float-left" id="disKit">Discard</button>
        <button type="button" class="btn btn-success float-right" id="createKit">Create Kit</button>

      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                

              </li>
            </ul>
          </nav>
          <!-- footer -->
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery-1.11.1.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="./assets/js/kit-builder.js"></script>
  <script type="text/javascript">loadKit('<?php echo $_GET['hamper']; ?>');</script>
</body>

</html>