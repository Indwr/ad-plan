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
            <li class="breadcrumb-item"><a href="javaScript:void();">Downline</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $header;?></li>
         </ol>
	   </div>
     

	</div>

     <!-- Start row tables -->

     <div class="row">
        <div class="col-lg-12">
          <div class="card">
            
            <div class="card-header"><i class="fa fa-table"></i> <?php echo $header;?></div>
            <div class="card-body">
             
                <div class="card-header">
                  <form method="GET" action="">
                    <div class="row">
                        <div class="col-3">
                          <select name="level" class="form-control">
                            <option><- SELECT LEVEL -></option>
                            <?php 

                            if($_GET['status'] == 0){
                              $st = 2;
                            } 

                              for ($i=1; $i <=10 ; $i++) { 
                                echo '<option value="'.$i.'" '.((!empty($_GET['level']) && $_GET['level'] == $i) ? "selected" : "").'>LEVEL '.$i.'</option>';
                              }
                            ?>
                          </select>
                        </div>
                        <div class="col-3">
                          <select name="status" class="form-control">
                            <option><- SELECT PAID STATUS -></option>
                            <option value="1" <?php if(!empty($_GET['status']) && $_GET['status'] == 1){ echo 'selected';} ?>>Active</option>
                            <option value="0" <?php if(!empty($st) && $st == 2){ echo 'selected';} ?>>InActive</option>
                          </select>
                        </div>
                        
                        <div class="col-3">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                  </form>
              </div>
            </div>
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                    	<th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User ID</th>
                        <th>Sponser ID</th>
                        <th>Active Status</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $key => $value) {
                	extract($value);
                	echo '<tr>
                			<td>'.($key+1).'</td>
                			<td>'.$name.'</td>
                			<td>'.$email.'</td>
                      <td>'.$downline_id.'</td>
                      <td>'.$sponser_id.'</td>
                			<td>'.(($paid_status == 0) ? '<label class="badge badge-danger">Inactive</label>': '<label class="badge badge-success">Active</label>').'</td>
                			<td>'.$level.'</td>
                		</tr>';
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