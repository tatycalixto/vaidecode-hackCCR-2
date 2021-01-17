<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Vai de Code</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="shortcut icon" href="images/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-cadastro100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="../index.php"><img src="images/img-01.png" alt="IMG"> </a>
				</div>

				<form class="login100-form validate-form" action="register.php" method="POST">
					<span class="login100-form-title">
						Cadastro
					</span>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name_" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="text-center p-t-12">
						<div class="form-check-inline">
							<select name="profile-option" class=" form-select" aria-label="Default select example">
								<option selected>Selecione seu perfil</option>
								<option value="young">Jovem</option>
								<option value="company">Empresa</option>
								<option value="education">Instituição de Ensino</option>
							</select>
						</div>

					</div>


					<?php if (isset($_GET['login']) &&  $_GET['login'] == 'equal') { ?>
						<div class="text-danger">
							E-mail já cadastrado!
						</div>
					<?php } ?>





					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Entrar
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Já possui Cadastro?
						</span>
						<a class="txt2" href="login.php">
							Entrar
						</a>
					</div>

					<div class="text-center p-t-136">

					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>