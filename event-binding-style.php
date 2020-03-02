<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Class-Binding-Inline-Style Vue.js</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<body>

	<div class="container mt-5">
		<div id="app">
		
		<!-- event  increase decrease-->
		<button @click="increaseFont" class="btn btn-primary"> Increase</button>
		<button @click="decreaseFont" class="btn btn-danger"> Decrease</button>
		<legend></legend>
		<input :style="{fontSize: fontSize +'px'}" v-model="name" type="text">


		</div> 
		<!-- end Vue app -->
	</div>


</body>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/vue.js"></script>


<script>
	let vm = new Vue({
		el : '#app',
		data :{
			name : 'Febri Nahrul Khayat',
			url : "https://www.facebook.com/nahrul.febri",
			fontSize : 10,
			isActive : true,
		},
		methods: {
			increaseFont (){
				this.fontSize++;
			},
			decreaseFont (){
				this.fontSize--;
			}
		
		},
	})
</script>

</html>