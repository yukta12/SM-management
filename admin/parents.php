<?php
    $title = "Home";
?>

<!DOCTYPE html>
<html lang="en">

<?php
include_once ("includes/header.php");
?>
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
            <li class="breadcrumb-item active"><?php $title;?></li>
          </ol>

          <!-- Icon Cards-->
          
   
   
<div class="mb-5"></div>



<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>parent name</th>
                    <th>student name</th>
                    <th>email</th>
                
                     <th></th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
            <tr>
                <td>[Title]</td>
                <td>[Title]</td>
                <td>[title]</td>
                <td><button type="button" class="btn btn-sm btn-primary">add</button></td>
                 <td><button type="button" class="btn btn-sm btn-secondary">update</button></td>
            </tr>        
        </tfoot>
            </table>
        </div>
    </div>
</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- /.content-wrapper -->

    </div>
    <?php
        include_once ("includes/footer.php");
    ?>

  </body>

</html>

   

   
