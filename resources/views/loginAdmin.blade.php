<form method="post" action="/loginAdmin" >
	{{ csrf_field() }}
	<label>User</label><br>
	<input type="text" name="user"><br>
	<label>Password</label><br>
	<input type="password" name="password">
	<button type="submit">Acceder</button>
</form>