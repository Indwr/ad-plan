<?php include'header.php' ?>
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">All Ads History</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Ads History</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?php echo base_url('Jarvis/Management/uploadAds/');?>" class="btn btn-success">Upload New Ad</a>   
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <h2 class="text-center text-danger"><?php echo $this->session->flashdata('message');?></h2>
                <table class="table table-hover" id="tableView">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ad</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($news as $key => $new) {
                            ?>
                            <tr>
                                <td><?php echo ($key + 1) ?></td>
                                <td><img src="<?php echo base_url('uploads/'.$new['file']); ?>" style="width:30%"></td>
                                 <td><?php echo $new['created_at']; ?></td>
                                <td><a href="<?php echo base_url('Jarvis/Management/blockAd/'.$new['id']);?>">Remove</a></td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include'footer.php' ?>