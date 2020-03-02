<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String Integer Vue.js</title>
</head>
<body>

	<div id='string'>
		<h3>{{hello}}</h3> <br>
		Name : {{name}}
	</div>



	<div id='integer'>
		A : {{a}} <br>
		B : {{b}} <br>
		A + B  = {{a + b}}
	</div>

<script src="assets/vue.js"></script>

<script>
	new Vue({
		el : '#string',
		data :{
			hello : 'Hello World',
			name : 'Febri Nahrul Khayat'
		}
	})

	new Vue({
		el : '#integer',
		data: {
			a : 10,
			b : 20
		}
	})
</script>


</body>
</html>