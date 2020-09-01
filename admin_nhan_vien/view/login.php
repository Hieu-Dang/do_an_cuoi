<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="layout/css/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.5.2-dist/css/bootstrap.css">
  <script src="./js/js.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
    <div class="container">
        <div class="row">
			     <div class="col-md-5 mx-auto">
		      	<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login</h1>
						 </div>
					</div>
                          <form action="?controller=login" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputusername1">Tên đăng nhập</label>
                              <input type="username" name="username"  class="form-control" id="username" placeholder="Enter username" value="<?php echo $username = isset($username)?$username :'' ?>">
                              <?php if (isset($error['username'])) {?>
                              <h6 class="text-danger"><?php echo $error['username'] ?></h6>
                              <?php } ?>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputusername1">Mật khẩu</label>
                              <input type="password" name="password" id="password"  class="form-control" placeholder="Enter Password" value="<?php echo $password = isset($password)?$password :'' ?>">
                              <?php if (isset($error['password'])) {?>
                              <h6 class="text-danger"><?php echo $error['password'] ?></h6>
                              <?php } ?>
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" name="btn-login" class=" btn btn-block mybtn btn-primary tx-tfm" onclick="return check_login_admin()">Login</button>
                           </div>
                           <div class="col-md-12 ">
                                 <hr class="hr-or">  
                           </div> 
                        </form>
                 
				</div>
			</div>
			 
			 </div>
		  </div>
    </div>         
</body>
</html>