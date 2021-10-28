<?php
  require_once 'header.php';
?>
<style>
  .footer {
    position: fixed;
}
</style>

<div class="clearfix"></div>
  
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
        <h4 class="page-title"><?php echo $header;?></h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Member/Index') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Franchise</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $header;?></li>
         </ol>
     </div>
     

  </div>

     <!-- Start row tables -->

     <div class="row">
        <div class="col-lg-12">
          <?php 
          if(!empty($this->session->flashdata('success'))){
            echo '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert">
             <i class="icon-check"></i>
              </div>
              <div class="alert-message">
                <span><strong>Success!</strong> '.$this->session->flashdata('success').'</span>
              </div>
                    </div>';
          }
          if(!empty($this->session->flashdata('error'))){
              echo '<div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert">
             <i class="icon-close"></i>
              </div>
              <div class="alert-message">
                <span><strong>Error!</strong> '.$this->session->flashdata('error').'</span>
              </div>
                    </div>';
              }
          ?>
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> <?php echo $header;?></div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                      <th>#</th>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Phone No.</th>
                        <th>City</th>
                        <th>Avaliable E-Pins</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $key => $value) {
                  extract($value);
                  $pins = $this->User_model->get_single_record('tbl_epins', array('user_id' => $user_id, 'status' => 0), 'count(id) as pins');
                  echo '<tr>
                      <td>'.($key+1).'</td>
                      <td>'.$user_id.'</td>
                      <td>'.$name.'</td>
                      <td>'.$phone.'</td>
                      <td>'.$city.'</td>
                      <td>'.$pins['pins'].'</td>';
                      ?>

                    </tr>
                    <?php
                }

                ?>
                    </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->



 </div>
</div>
</div>

<?php
  require_once 'footer.php';
?>

<script>
     // $(document).ready(function() {
     //  //Default data table
     //   $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      // } );

    </script>