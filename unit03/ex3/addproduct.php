<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Form Infomation</h2>
		<form action="add_process.php" method="GET" class="needs-validation" novalidate>
			<div class="form-group">
				<label for="msv">ID:</label>
				<input type="text" class="form-control" id="msp" placeholder="nhập mã sản phẩm" name="msp" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập mã sản phẩm.</div>
			</div>

			<div class="form-group">
				<label for="name">Tên Sản Phẩm:</label>
				<input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="name" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập tên sản phẩm.</div>
			</div>

			<div class="form-group">
				<label for="sdt">Đơn Giá:</label>
				<input type="text" class="form-control" id="dg" placeholder="Nhập đơn giá" name="dg" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập đơn giá.</div>
			</div>

			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
	<script>
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementsByClassName('needs-validation');
				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event) {
						if (form.checkValidity() === false) {
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();
	</script>
</body>
</html>