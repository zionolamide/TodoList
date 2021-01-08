<h2>User Login</h2>

<form action="add" method="POST">
@csrf
    <input type="text" name="name" placeholder="enter name"> <br> <br>
    <input type="password" name="surname" placeholder="enter password"> <br> <br>
    <input type="text" name="username" placeholder="enter email"> <br> <br>
    <button type="submit">Add Member</button>
</form>