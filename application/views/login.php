
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/template')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template')?>/dist/css/adminlte.min.css">
	<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Halo, Selamat Datang!</p>
			<?php if(isset($error)) { echo '<p style="color:red;">'.$error.'</p>'; } ?>
      <form class="user" action="<?= base_url('login/process') ?>" method="post">
         <div class="input-group mb-3">
							<input type="text" class="form-control" 
									id="username" name="username" placeholder="Username..." required>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
        	</div>
          <div class="input-group mb-3">
              <input type="password" class="form-control form-control-user"
                  id="password" placeholder="Password..." name="password" required>
							<div class="input-group-append">
            		<div class="input-group-text">
            		  <span class="fas fa-lock"></span>
            		</div>
          		</div>
          </div>
					<div class="input-group mb-3">
							<div class="g-recaptcha" data-sitekey="6LdtCDwoAAAAADujdsXRuLPzSyZNoAhw8JsqOKve" required>
							</div>
					</div>

          <!-- /.col -->
          <div class="input-group">
            <button type="submit" name="login" class="btn btn-primary btn-block" id="login" value="login">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/template')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/template')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/template')?>/dist/js/adminlte.min.js"></script>

</body>
</html>

<script>
	$(document).ready(function(){

		$('#captcha_form').on('submit', function(event){
			
		});

	});
</script>
