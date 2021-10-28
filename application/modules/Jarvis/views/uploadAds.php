<?php include_once'header.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4">
            <h1 class="m-0 text-dark"><?php echo $header; ?></h1>
          </div>
          <div class="col-sm-4">
            
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advertisement</li>
              <li class="breadcrumb-item"><?php echo $header; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <?php echo form_open_multipart('Jarvis/Management/uploadAds',array('id' => 'walletForm'));?>
              
            <h3 class="text-danger"><?php echo $this->session->flashdata('error'); ?></h3>
            <div class="form-group">
                <label>Caption</label>
                <input type="text" class="form-control" name="caption" value="<?php echo set_value('caption');?>" id="user_id" placeholder="Caption"/>
                <span class="text-danger"><?php echo form_error('caption')?></span>
                <span id="errorMessage"></span>
            </div>
            <div class="form-group">
                <label>Type</label>
                <select class="form-control" name="type">
                    <option value="image">IMAGE</option>
                    <option value="video">Video</option>
                </select>
            </div>
            <div class="form-group" id="imageField">
                <label>Media</label>
                <?php echo form_input(array('class' => 'form-control', 'type' => 'file', 'name' => 'media'));?>
                <span class="text-danger"><?php echo form_error('media')?></span>
            </div>

            <div class="form-group">
                <label>Time Second</label>
                <input type="text" class="form-control" name="time" value="<?php echo set_value('time');?>" id="time" placeholder="Time Second"/>
                <span class="text-danger"><?php echo form_error('time')?></span>
                <span id="errorMessage"></span>
            </div>

            <div class="form-group">
                <button type="subimt" name="save" class="btn btn-success" />Send</button>
            </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include_once'footer.php'; ?>

