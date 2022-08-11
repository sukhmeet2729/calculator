<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator App</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-row justify-content-center align-items-center" style="height:100vh;">
    <div class="calculator">
		<div class="viewbox">
			11+22
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-3"><button class="btn">7</button></div>
			<div class="col-3"><button class="btn">8</button></div>
			<div class="col-3"><button class="btn">9</button></div>
			<div class="col-3"><button class="btn">X</button></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><button class="btn">4</button></div>
			<div class="col-3"><button class="btn">5</button></div>
			<div class="col-3"><button class="btn">6</button></div>
			<div class="col-3"><button class="btn">-</button></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><button class="btn">1</button></div>
			<div class="col-3"><button class="btn">2</button></div>
			<div class="col-3"><button class="btn">3</button></div>
			<div class="col-3"><button class="btn">+</button></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><button class="btn clear">C</button></div>
			<div class="col-3"><button class="btn">0</button></div>
			<div class="col-3"><button class="btn">/</button></div>
			<div class="col-3"><button class="btn equals">=</button></div>
		</div>
	</div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
