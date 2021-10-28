<?php
	require_once 'header.php';
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
  .footer {
    position: fixed;
}
</style>
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<script src="https://cdn.plyr.io/3.6.8/demo.js" crossorigin="anonymous"></script>
 <script>
    function onClickShow() {
        clearInterval(countdown);
        var timeLeft = '<?php echo $ad_data['time'] ?>';
        var elem = document.getElementById('some_div');
        var timerId = setInterval(countdown, 1000);
        function countdown() {
            if (timeLeft == 0) {
                clearTimeout(timerId);
                taskComplete();
            } else {
                elem.innerHTML = timeLeft + ' seconds remaining';
                timeLeft--;
            }
        }
        countdown()
    }

    function taskComplete(){
        fetch("<?php echo base_url('Member/Management/completeTask/'.$ad_id); ?>", {
            method: "GET",
            headers: {
              "X-Requested-With": "XMLHttpRequest"
            },
        })
        .then(response => response.json())
        .then(result => {
            if(result.success == '1'){
                swal({
                  title: "Success!",
                  text: result.message,
                  icon: "success",
                  }).then(function() {
                    window.location.href = result.url;
                  }); 
            }else{
                swal({
                  title: "Oops!",
                  text: result.message,
                  icon: "error",
                  dangerMode: true,
                }).then(function() {
                    window.location.reload();
                  });
            }
        });
    }





//     const player = new Plyr('video', {captions: {active: true}});

// // Expose player so it can be used from the console
// window.player = player;


    </script>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title"><?php echo $header;?></h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('Member/Index') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Advertisement</a></li>
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
              <?php 
              if($user_info['paid_status'] > 0){
                  $check = $this->User_model->get_single_record('tbl_ad_watch_history', 'user_id = "'.$this->session->userdata['user_id'].'" AND date(created_at) = date(NOW()) AND ad_id = "'.$ad_id.'"', '*');
                  $adss = $this->User_model->get_single_record('tbl_ad_watch_history', 'user_id = "'.$this->session->userdata['user_id'].'" AND date(created_at) = date(NOW())', 'count(id) as adss');
                  if(empty($check)){
                    if($ad_data['type'] == 'image'){
                      echo '<center><img src="'.base_url('uploads/'.$ad_data['file']).'" style="width: 400px;height: 300px;"><br>';
                      echo '<h4 class="text-info">You are watching '.($adss['adss']+1).' Advertisement </h4><br>';
                      echo '<div id="some_div"></div>';
                            echo '<script> onClickShow(); </script>';
                    }
                    if($ad_data['type'] == 'video'){
                      ?>

                      <center>
                        <video id="video" controls autoplay style="width: 400px;" muted>
                          <source src="<?php echo base_url('uploads/'.$ad_data['file']);?>" type="video/mp4">
                        </video>
                    <?php
                    echo '<h4 class="text-info">You are watching '.($adss['adss']+1).' Advertisement </h4><br>';
                      echo '<div id="some_div2"></div>';
                            echo '<script> onClickShow2(); </script></center>';
                    }
                  }else{
                    echo '<center><h4 class="text-danger">Task Already Completed!</h4></center>';
                  }
                }else{
                    echo '<center><h4 class="text-danger">Account is not Active!</h4></center>';
                  }
              ?>

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

function onClickShow2() {
        clearInterval(countdown);
        var timeLeft = '<?php echo $ad_data['time'] ?>';
        var elem = document.getElementById('some_div2');
        var timerId = setInterval(countdown, 1000);
        function countdown() {
            if (timeLeft == 0) {
                clearTimeout(timerId);
                taskComplete();
            } else {
                elem.innerHTML = timeLeft + ' seconds remaining';
                timeLeft--;
            }
        }
        countdown()
    }

var video = document.getElementById('video');
onClickShow2(video)
video.play(); 
var supposedCurrentTime = 0;
video.addEventListener('timeupdate', function() {
  if (!video.seeking) {
    supposedCurrentTime = video.currentTime;
  }
});
// prevent user from seeking
video.addEventListener('seeking', function() {
  // guard agains infinite recursion:
  // user seeks, seeking is fired, currentTime is modified, seeking is fired, current time is modified, ....
  var delta = video.currentTime - supposedCurrentTime;
  if (Math.abs(delta) > 0.01) {
    console.log("Seeking is disabled");
    video.currentTime = supposedCurrentTime;
    
  }
});
// delete the following event handler if rewind is not required
video.addEventListener('ended', function() {
  // reset state in order to allow for rewind
  supposedCurrentTime = 0;
});

 
</script>