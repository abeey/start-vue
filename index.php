<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1st Page Vue</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<body>
	<div id="app">
		<h3>{{hello}}</h3>
		<p>
			Name : {{name}} <br>
			Age : {{age + 20}} 
		</p>
		
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
		}
	})
</script>

</html>