<?php require('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require('head.php'); ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-car"></i> <span>Automobili!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
          <?php require('menu_profile.php'); ?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
          <?php require('menu_sidebar.php'); ?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
       
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php require('top_nav.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proizvođači</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                  <h1>Unos</h1>

                  <form action="cars_create.php" method="post" class="form-horizontal form-label-left">
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_id">Ime proizvođača:</label>
                        <?php $sql = "SELECT id, name from brands ORDER BY name;";
                        $result = $mysqli->query($sql);
                        ?>
                        <select name = "brand_id">
                        <?php
                        while ($brand = $result->fetch_assoc()){
                                echo('<option value = "' . $brand['id'].'"selected = "selected">'.$brand['name'].' </option>');
                            }
                        ?>
                        </select>
                    
                    </div>

                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="model">Model</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="model" name="model" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>

                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="color">Boja</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="color" name="color" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>

                    <div class="form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mileage">Mileage</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="mileage" name="mileage" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <input type="submit" name="Unesi" class="btn btn-success">
                    </div>
                    </div>

                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

   <?php require('js.php'); ?>
	
  </body>