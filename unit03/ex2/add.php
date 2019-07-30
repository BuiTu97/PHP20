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
				<label for="msv">Mã Sinh Viên:</label>
				<input type="text" class="form-control" id="msv" placeholder="nhập mã sinh viên" name="msv" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập mã sinh viên.</div>
			</div>

			<div class="form-group">
				<label for="name">Họ Và Tên:</label>
				<input type="text" class="form-control" id="name" placeholder="Nhập họ tên" name="name" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập họ và tên.</div>
			</div>

			<div class="form-group">
				<label for="sdt">Số Điện Thoại:</label>
				<input type="text" class="form-control" id="sdt" placeholder="Nhập số điện thoại" name="sdt" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Nhập email" name="email" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập email.</div>
			</div>

			<div class="form-group">
				<label for="diaChi">Địa Chỉ:</label>
				<input type="text" class="form-control" id="diaChi" placeholder="Nhập địa chỉ" name="diaChi" required>
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
			</div>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
				<label class="form-check-label" for="exampleRadios1">
					Nam
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
				<label class="form-check-label" for="exampleRadios2">
					Nữ
				</label>
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