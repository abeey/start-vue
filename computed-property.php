<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1st Page Vue</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<body>
	<div id="app">
		<h3>{{severseMessage}}</h3>
		<h3>{{countAge}}</h3>
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
			age : 25
		},

		computed :{
		severseMessage(){
			return this.name.split('').reverse('').join('');
			},
		countAge(){
			return this.age+5;
			
		}
		}

	})
</script>

</html>