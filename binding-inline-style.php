<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Binding-Inline-Style Vue.js</title>
</head>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<body>

	<div class="container mt-5">
		<div id="app">
		
		
		
		<button @click="fontSize--" class="btn btn-danger">Decrease Font</button>
		<button @click="fontSize++" class="btn btn-primary">Increase Font</button>
		<legend></legend>

		<input v-model="name" type="text" :style="{color: 'green', fontSize: fontSize + 'px'}">
			
		


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

			object :{
				color : 'blue',
				fontSize : '50px'
			},

			object2 :{
				color : 'green',
				fontSize : '70px'
			}



		}
	})
</script>

</html>