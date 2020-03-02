<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1st Page Vue</title>
</head>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<body>

	<div class="container">
		<div id="app">

		<form action="">
			<div class="col-sm-6">
			<input v-model="name" type="text" class="form-control">
			</div>
		</form>

		{{name}}

		</div> 
		<!-- end Vue app -->
	</div>


</body>

<script src="assets/vue.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script>
	new Vue({
		el : '#app',
		data :{
			name : 'Febri Nahrul Khayat',
		}
	})
</script>

</html>