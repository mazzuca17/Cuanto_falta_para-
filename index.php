<!DOCTYPE html>
<html lang="es">

<head>
	<title>YProgress - Progreso Anual</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg03.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg04.jpg');"></div>
	</div>

	<div class="flex-col-c-sb size1 overlay1 p-l-75 p-r-55 p-t-20 p-b-40 p-lr-15-sm">
		<!--  -->
		<div class="w-full flex-w flex-sb-m">
			<div class="wrappic1">
				<h1 class="s1-txt1">Año Nuevo</h1>
			</div>

			<div class="flex-w cd100 p-t-15 p-b-15 p-r-36">


				<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">
					<p class="m1-txt1 p-b-2">Faltan: </p>

					<span class="l1-txt1 wsize1" id="dias"> </span>
					<span class="m1-txt1 p-b-2">Días</span>
				</div>

				<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">
					<span class="l1-txt1 wsize1" id="horas"> </span>
					<span class="m1-txt1 p-b-2">Hrs</span>
				</div>

				<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">
					<span class="l1-txt1 wsize1" id="minutos"> </span>
					<span class="m1-txt1 p-b-2">Min</span>
				</div>

				<div class="flex-w flex-b m-r-22 m-t-8 m-b-8">
					<span class="l1-txt1 wsize1" id="segundos"> </span>
					<span class="m1-txt1 p-b-2">Seg</span>
				</div>




			</div>

			<div class="m-t-10 m-b-10">

				<select name="provincia" id="provincia" class="size2 s1-txt1 flex-c-m how-btn1 trans-04" onchange="location = this.value">
					<option value="" disabled selected>¿Cuánto falta para... ?</option>
					<option value="worldcup.html">FIFA WORLDCUP QATAR 2022</option>
					<option value="copaamerica.html">CONMEBOL Copa América 2020</option>
					<option value="navidad.html">Navidad</option>
					<option value="index.php">Año Nuevo</option>
				</select>





			</div>
		</div>

		<!--  -->
		<div class="flex-col-c-m p-l-15 p-r-15 p-t-80 p-b-90">
			<h3 class="l1-txt2 txt-center p-b-55 respon1" id="porcentaje">
			</h3>


			<div>
				<button class="how-btn-play1 flex-c-m">
					<i class="zmdi zmdi-play"></i>
				</button>
			</div>
		</div>

		<div class="flex-sb-m flex-w w-full">
			<!--  -->
			<div class="flex-w flex-c-m m-t-10 m-b-10">
				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
					<i class="fa fa-twitter"></i>
				</a>

				<a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>

			<form class="contact100-form validate-form m-t-10 m-b-10">
				<div class="wrap-input100 validate-input m-lr-auto-lg" data-validate="Email is required: ex@abc.xyz">
					<input class="s2-txt1 placeholder0 input100 trans-04" type="text" name="email" placeholder="Email Address">

					<button class="flex-c-m ab-t-r size4 s1-txt1 hov1">
						<i class="zmdi zmdi-long-arrow-right fs-16 cl1 trans-04"></i>
					</button>
				</div>
			</form>
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

	<script>
		var countDownDate = new Date("1 Jan, " + String(new Date().getFullYear() + 1) + " 00:00:00").getTime();

		var x = setInterval(function() {

			var now = new Date().getTime();

			var distance = countDownDate - now;

			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			document.getElementById("dias").innerHTML = days;
			document.getElementById("horas").innerHTML = hours;
			document.getElementById("minutos").innerHTML = minutes;
			document.getElementById("segundos").innerHTML = seconds;

			if (distance < 0) {
				clearInterval(x);
				document.getElementById("contador").innerHTML = "¡Feliz año Nuevo!";
			}
		}, 1000)
	</script>

	<script>
		var x2 = setInterval(function() {
			var now = new Date();
			var start = new Date(now.getFullYear(), 0, 1); // Start of this year
			var end = new Date(now.getFullYear() + 1, 0, 1); // End of this year
			var done = (now - start) / (end - start);

			document.getElementById("porcentaje").innerHTML = "Año: " + done * 100 + "%";
		}, 1000)
	</script>
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