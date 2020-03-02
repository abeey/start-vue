<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Directive Vue.js</title>
</head>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<body>

	<div class="container mt-5">
		<div id="app">
		
		<!-- gunakan v-model / : -->
		<a :href="url" target="_blank">Facebook</a> <br>
		
		<legend></legend>
		
		<!-- on-cliks / v-on:click / @click -->
		<button @click="number++" class="btn btn-primary">+</button>
		<button @click="number--" class="btn btn-danger">-</button>
		<input v-model="number" type="text" placeholder="Result">

		<form action="">
			<div class="col-sm-6">
			</div>
		</form>

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
			url : "https://www.facebook.com/nahrul.febri",
			number : 10
		}
	})
</script>

</html>