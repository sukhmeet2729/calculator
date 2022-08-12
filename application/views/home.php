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
		<div class="viewbox" id="display">
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-3"><input class="btn" id="v-btn" value="7" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="8" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="9" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="*" type="button"></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><input class="btn" id="v-btn" value="4" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="5" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="6" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="-" type="button"></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><input class="btn" value="1" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="2" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="3" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="+" type="button"></div>
		</div>
		<div class="row mt-2 justify-content-center">
			<div class="col-3"><input class="btn clear" id="v-btn" value="C" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="0" type="button"></div>
			<div class="col-3"><input class="btn" id="v-btn" value="/" type="button"></div>
			<div class="col-3"><input class="btn equals" id="v-btn" value="=" type="button"></div>
		</div>
	</div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function(){
		$('#display').html('0');
		var BASEURL = "<?php echo base_url(); ?>";
		$('input[type=button]').click(function(){
			var num = $(this).val();
			var old = $('#display').html();
			$('#display').append(num);
			if(old == '0'){
				$('#display').html(num);
			}
			if( num == 'C' ){
				$('#display').html('0');
			}
			if( num == '=' ){
				$.ajax({
				url: BASEURL + 'home/calc/',
				type: 'POST',
				data: {old: old},
				error: function() {
					$('#display').html('Something is wrong');
				},
				success: function(data) {
					// console.log(data);
					$('#display').html(data);
				}
				});	
			}
				});
    });
</script>
</body>
</html>
