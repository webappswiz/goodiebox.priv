<div class="container">
    <h1>Edit user</h1>

    <form id="add" action="" method="POST">
        <div class="col-sm-10">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" value="<?= $user->username ?>" class="form_control">
        </div>
        <div class="col-sm-10">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email" value="<?= $user->email ?>" class="form_control">
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Update user</button>
        </div>
    </form>

    <h4>Change password</h4>
    <form id="add" action="" method="POST">
        <div class="col-sm-10">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form_control">
        </div>

        <div class="col-sm-10">
            <label for="password_confirm">Confirm password</label>
            <input type="password" id="password_confirm" name="password_confirm" class="form_control">
        </div>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Change password</button>
        </div>
    </form>

</div>
