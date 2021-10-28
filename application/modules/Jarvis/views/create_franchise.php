<?php include_once'header.php'; ?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Create Franchise</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <?php echo form_open('');?>
            <h3 class="text-danger"><?php echo $this->session->flashdata('message'); ?></h3>
            <div class="form-group">
                <label>User ID</label>
                <input type="text" id="sponser_id" onblur="check()" class="form-control" name="user_id" value="<?php echo set_value('user_id');?>" placeholder="User ID"/>
                <span id="name" class="text-danger"><?php echo form_error('user_id')?></span>
                
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo set_value('name');?>" placeholder="Name"/>
                <span class="text-danger"><?php echo form_error('name')?></span>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="<?php echo set_value('phone');?>" placeholder="Phone"/>
                <span class="text-danger"><?php echo form_error('phone')?></span>
            </div>
            <div class="form-group">
                <label>City</label>
               <input type="text" class="form-control" name="city" value="<?php echo set_value('city');?>" placeholder="Phone"/>
                 <span class="text-danger"><?php echo form_error('city')?></span>
            </div>
            <div class="form-group">
                <button type="subimt" name="save" class="btn btn-success" />Create</button>
            </div>
            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include_once'footer.php'; ?>

<script>
    window.onload = function(){
        var id = document.getElementById("sponser_id").value; 
        if(id){
            check();
        }
    };
    function check(){
    var id = document.getElementById("sponser_id").value;
    fetch("<?php echo base_url('Member/Management/checkUser/'); ?>"+id, {
            method: "GET",
            headers: {
              // "Content-Type": "application/json",
              // "Accept": "application/json",
              "X-Requested-With": "XMLHttpRequest"
            },
        })
        .then(response => response.json())
        .then(result => {
            if(result.status == '1'){
            console.log(result);
              // document.getElementById("name").innerHTML = result;
              document.getElementById("name").innerHTML = '<span class="text-success">'+result.name+'</span>';
            }else{
              document.getElementById("name").innerHTML = "<span class='text-danger'>Invaild Sponser ID</span>";
              document.getElementById("sponser_id").value = "";
            }
        });
  }
</script>