<form action="/admin/user/?method=update" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="form[id]" value="<?=$data['user']['id']?>">

    <input type="text" name="form[name]" value="<?=$data['user']['name']?>"><br/><br/>
    <input type="email" name="form[email]" value="<?=$data['user']['email']?>"><br/><br/>
    <input type="text" name="form[login]" value="<?=$data['user']['login']?>"><br/><br/>
    <input type="password" name="form[password]" value=""><br/><br/>
    Avatar: <input type="file" name="avatar" ><br/><br/>


    <button type="submit">Update</button>
</form>