<form method="post" action="/backend" >
	{{ csrf_field() }}
	<label>User</label><br>
	<input type="text" name="user"><br>
	<label>Password</label><br>
	<input type="password" name="password">
	<button type="submit">Acceder</button>
</form>