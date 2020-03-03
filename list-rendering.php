<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List-Rendering Vue.js</title>
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">


<body>
	<div class="container mt-5">
	<div id="app">
		
<ul>
	<li v-for="n in name">{{n.id}} | {{n.name}} | {{n.age}}</li>
</ul>


<table>
	<thead>
		<td>ID</td>
		<td>Name</td>
		<td>Age</td>
	</thead>
	<tbody>
		<tr v-for="n in name">
			<td>{{n.id}}.</td>
			<td>{{n.name}}</td>
			<td>{{n.age}}</td>
		</tr>
	</tbody>
</table>

	</div>
	</div>
	


</body>

<script src="assets/vue.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


<script>
	new Vue({
		el : '#app',
		data :{

			name : [
			{id:1, name : 'Febri Nahrul Khayat', age : 25},
			{id:2, name : 'Januar', age : 23},
			{id:3, name : 'Alfian Adi P', age : 9},
			]

		}
	})
</script>

</html>