<h1>upload</h1>
<h2>User Login</h2>
<form action="upload" method="POST" enctype="multipart/form-data">
@csrf
    <input  type="file" name="file">
    <button type="submit">Upload file</button>
</form>