<?php
    $title = "Home";
?>

    <!DOCTYPE html>
    <html lang="en">

    <?php
include_once ("includes/header.php");
?>
<link rel="stylesheet" href="css/custom.css">
        <body id="page-top">

            <?php

  include_once ("includes/navigation.php")
  ?>

                <div id="wrapper">

                    <!-- Sidebar -->
                    <?php
        include_once ("includes/siderbar.php");
        ?>
                        <div id="content-wrapper">

                            <div class="container-fluid">

                                <!-- Breadcrumbs-->
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">attendance</li>
                                </ol>
                                <div class="row">
                                    <div class="col-md-12">
                                       <p class="attendance-report">attendance report</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="class-container">
                                                <p>select class</p>
                                            <select name="" id="" class="form-control"> 
                                                <option value="">d7B</option>
                                                <option value="">d7C</option>
                                            </select>
                                            <br>
                                            <p>date</p>
                                            <input type="date" class="form-control">
                                            <br>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  add/update
</button>
                                            <button type="button" class="btn btn-warning">view</button>
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="class-container-2">
                                                    <strong><p>attendance overview</p></strong>
                                                    <table class="table">
        <thead>
            <tr>
                <th>Rollno</th>
                <th>name</th>
                <th>attendance</th>
                <th>commment</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>[Title]</td>
                <td>[Title]</td>
                <td>[Title]</td>
                <td>data</td>
            </tr>        
        </tfoot>
        <tbody>
            <tr>
                <td>[data]</td>
                <td>[data]</td>
                <td>[data]</td>
                <td>data</td>
            </tr>
            <tr>
                <td>[data]</td>
                <td>[data]</td>
                <td>[data]</td>
                <td>data</td>
            </tr>
            
            
        </tbody>
    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.content-wrapper -->
                <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">add attendace</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
                      <table class="table">
        <thead>
            <tr>
                <th>Rollno</th>
                <th>name</th>
                <th>Present</th>
                <th>commment</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>[Title]</td>
                <td>[Title]</td>
                <td><input type="checkbox" ></td>
                <td>data</td>
            </tr>        
        </tfoot>
        <tbody>
            <tr>
                <td>[data]</td>
                <td>[data]</td>
                <td><input type="checkbox"></td>
                <td>data</td>
            </tr>
            <tr>
                <td>[data]</td>
                <td>[data]</td>
                <td><input type="checkbox" ></td>
                <td>data</td>
            </tr>
            
            
        </tbody>
    </table>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">submit</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
                </div>
                <?php
        include_once ("includes/footer.php");
    ?>

        </body>

    </html>
