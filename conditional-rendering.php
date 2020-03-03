<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditional-Rendering Vue.js</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<body>
	<div class="container mt-5">
	<div id="app">

		<h3>{{hello}}</h3>
		
		<p v-if="age == '25'"> {{name}}<p>
		<p v-else>No User</p>

		<button v-if="btnActive == '1'" class="btn btn-primary"></button>
		<button v-else="btnActive" class="btn btn-danger"></button>
	</div>
	</div>
	


</body>

<script src="assets/vue.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<script>
	new Vue({
		el : '#app',
		data :{

			hello : 'Hello World',
			name : 'Febri Nahrul Khayat',
			age : 25,
			isActive : false,
			btnActive : 1,
		}
	})
</script>

</html>