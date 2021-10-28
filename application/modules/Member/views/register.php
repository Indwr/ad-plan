<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title><?php echo title.' | '.$header;?></title>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url(logo);?>" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('Resource/Member/assets/');?>css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url('Resource/Member/assets/');?>css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url('Resource/Member/assets/');?>css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url('Resource/Member/assets/');?>css/app-style.css" rel="stylesheet"/>
  <style>
  	img {
    vertical-align: middle;
    border-style: none;
    width: 62%;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    background-color: #ffffff;
}
.card-body {
    border: 1px solid #fba507;
    box-shadow: 0 0 20px 0 #fba50730;
    border-radius: 5px;
}
.form-group input {
    border: none;
    border-bottom: 1px solid #fba507!important;
    border-radius: 0 !important;
}
button.btn.btn-success {
    background: #fba507;
    border: #fba507;
}
body{

background-color: #ffffff;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3Crect stroke='%23ffffff' stroke-width='.5' width='1' height='1' id='s'/%3E%3Cpattern id='a' width='3' height='3' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cuse fill='%23fafafa' href='%23s' y='2'/%3E%3Cuse fill='%23fafafa' href='%23s' x='1' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s' x='2' y='2'/%3E%3Cuse fill='%23f5f5f5' href='%23s'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='2'/%3E%3Cuse fill='%23f0f0f0' href='%23s' x='1' y='1'/%3E%3C/pattern%3E%3Cpattern id='b' width='7' height='11' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s'/%3E%3Cuse href='%23s' y='5' /%3E%3Cuse href='%23s' x='1' y='10'/%3E%3Cuse href='%23s' x='2' y='1'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='8'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='5' y='2'/%3E%3Cuse href='%23s' x='5' y='6'/%3E%3Cuse href='%23s' x='6' y='9'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='h' width='5' height='13' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ebebeb'%3E%3Cuse href='%23s' y='5'/%3E%3Cuse href='%23s' y='8'/%3E%3Cuse href='%23s' x='1' y='1'/%3E%3Cuse href='%23s' x='1' y='9'/%3E%3Cuse href='%23s' x='1' y='12'/%3E%3Cuse href='%23s' x='2'/%3E%3Cuse href='%23s' x='2' y='4'/%3E%3Cuse href='%23s' x='3' y='2'/%3E%3Cuse href='%23s' x='3' y='6'/%3E%3Cuse href='%23s' x='3' y='11'/%3E%3Cuse href='%23s' x='4' y='3'/%3E%3Cuse href='%23s' x='4' y='7'/%3E%3Cuse href='%23s' x='4' y='10'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='c' width='17' height='13' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23e5e5e5'%3E%3Cuse href='%23s' y='11'/%3E%3Cuse href='%23s' x='2' y='9'/%3E%3Cuse href='%23s' x='5' y='12'/%3E%3Cuse href='%23s' x='9' y='4'/%3E%3Cuse href='%23s' x='12' y='1'/%3E%3Cuse href='%23s' x='16' y='6'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='d' width='19' height='17' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23ffffff'%3E%3Cuse href='%23s' y='9'/%3E%3Cuse href='%23s' x='16' y='5'/%3E%3Cuse href='%23s' x='14' y='2'/%3E%3Cuse href='%23s' x='11' y='11'/%3E%3Cuse href='%23s' x='6' y='14'/%3E%3C/g%3E%3Cg fill='%23e0e0e0'%3E%3Cuse href='%23s' x='3' y='13'/%3E%3Cuse href='%23s' x='9' y='7'/%3E%3Cuse href='%23s' x='13' y='10'/%3E%3Cuse href='%23s' x='15' y='4'/%3E%3Cuse href='%23s' x='18' y='1'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='e' width='47' height='53' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='2' y='5'/%3E%3Cuse href='%23s' x='16' y='38'/%3E%3Cuse href='%23s' x='46' y='42'/%3E%3Cuse href='%23s' x='29' y='20'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='f' width='59' height='71' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='33' y='13'/%3E%3Cuse href='%23s' x='27' y='54'/%3E%3Cuse href='%23s' x='55' y='55'/%3E%3C/g%3E%3C/pattern%3E%3Cpattern id='g' width='139' height='97' patternUnits='userSpaceOnUse' patternTransform='scale(50) translate(-980 -735)'%3E%3Cg fill='%23F60'%3E%3Cuse href='%23s' x='11' y='8'/%3E%3Cuse href='%23s' x='51' y='13'/%3E%3Cuse href='%23s' x='17' y='73'/%3E%3Cuse href='%23s' x='99' y='57'/%3E%3C/g%3E%3C/pattern%3E%3C/defs%3E%3Crect fill='url(%23a)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23b)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23h)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23c)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23d)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23e)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23f)' width='100%25' height='100%25'/%3E%3Crect fill='url(%23g)' width='100%25' height='100%25'/%3E%3C/svg%3E");
background-attachment: fixed;
background-size: cover;}
.icheck-material-primary label {
    color: #000;
}
  </style>
</head>

<body class="authentication-bg">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-5 animated zoomIn">
		<div class="card-body">
		 <div class="card-content p-2">
		  <div class="text-center">
		 		<a href="<?php echo base_url(''); ?>"><img src="<?php echo base_url(logo);?>"/></a>
		 	</div>
		 	<br>
		 	<h5 class="text-center"><?php echo $header;?></h5>
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
		  <div class="card-title text-uppercase text-center py-2"></div>
		    <?php echo form_open();?>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputUsername" class="sr-only">Sponser ID</label>
				  <input type="text" id="sponser_id" name="sponser_id" onblur="check()" class="form-control" style="border-radius: 20px;" placeholder="Sponser ID" value="<?php if(empty($_GET['id'])){ echo '';}else{ echo $_GET['id'];} ?>">
				  <label id="name"> </label>
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputUsername" class="sr-only">Name</label>
				  <input type="text" id="" name="name" class="form-control" style="border-radius: 20px;" placeholder="Enter Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputPassword" class="sr-only">Email</label>
				  <input type="email" id="password" name="email" class="form-control" style="border-radius: 20px;" placeholder="Enter Email">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="exampleInputPassword" class="sr-only">Phone No.</label>
				  <input type="number" id="password" name="phone" class="form-control" style="border-radius: 20px;" placeholder="Enter Phone No">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

			<div class="form-row mr-0 ml-0">
			 <div class="form-group">
			   <div class="icheck-material-primary">
                <input type="checkbox" id="terms" checked="" />
                <label for="user-checkbox">I have read the Terms & Conditions</label>
			  </div>
			 </div>
			 <!-- <div class="form-group col-6 text-right">
			  <a href="">Reset Password</a>
			 </div> -->
			</div>
			
			 <div class="form-group">
			   <button type="submit" class="btn btn-success btn-block waves-effect waves-light" style="border-radius: 20px;">Register</button>
			 </div>
			  <div class="form-group text-center">
			   <p class="text-muted">If You Allready Regiter ? <a href="<?php echo base_url('Member/Management/login');?>"> Sign in here</a></p>
			 </div>
			 <div class="form-group text-center d-none">
			    <hr>
				<h5>OR</h5>
			 </div>
			  <div class="form-group text-center d-none">
				<button type="button" class="btn btn-facebook shadow-facebook text-white btn-block waves-effect waves-light"><i class="fa fa-facebook-square"></i> Sign In With Facebook</button>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('Resource/Member/assets/');?>js/jquery.min.js"></script>
  <script src="<?php echo base_url('Resource/Member/assets/');?>js/popper.min.js"></script>
  <script src="<?php echo base_url('Resource/Member/assets/');?>js/bootstrap.min.js"></script>
  <!-- waves effect js -->
  <script src="<?php echo base_url('Resource/Member/assets/');?>js/waves.js"></script>
  <!-- Custom scripts -->
  <script src="<?php echo base_url('Resource/Member/assets/');?>js/app-script.js"></script>
	
</body>

</html>


<script>
    window.onload = function(){
        var id = document.getElementById("sponser_id").value; 
        if(id){
            check();
        }
    };
    function check(){
    var id = document.getElementById("sponser_id").value;
    fetch("<?php echo base_url('Member/Management/checkUser/')?>"+id, {
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