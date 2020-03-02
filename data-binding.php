<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Binding Vue.js</title>
</head>
<body>

	<div id="app">
		<a v-bind:href="url">{{name_url}}</a>
	</div>


<script src="assets/vue.js"></script>

<script>
	new Vue({
		el : '#app',
		data: {
			name_url : 'google',
			url : 'https://www.google.com'
		}
	})
</script>
	
</body>
</html>