<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class-Binding-Inline-Style Vue.js</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<style>
	.active{color : green;}
	.notActive{ color : red;}
</style>


<body>

	<div class="container mt-5">
		<div id="app">
	
		<button @click="isActive" class="btn btn-primary">ON</button>
		<button @click="isActive" class="btn btn-danger">OFF</button>
		<legend></legend>
		<input :class="[isActive ? 'active' : 'notActive']" v-model="name" type="text">
			
		


<!-- 		<div :style="object">{{name}}</div>

		<div :style="object2">{{name}}</div>
			 -->

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
			fontSize : 10,
			isActive : false,
		}
	})
</script>

</html>