<h2 style="text-align: center;">Login   </h2>
<form method="POST" action="index.php?md=user&action=check_user" style="text-align: center;">
    <div class="form-floating">
    <input class="form-control" placeholder="Username" type="text" name="username" required>
    <label for="floatingInput">Username</label>
    </div>
    <br>
    <div class="form-floating">
    <input class="form-control" placeholder="Password" type="Password" name="passwd" required>
    <label for="floatingInput">Password</label>
    </div>
    <br>
    <div style="text-align: center;">
        <input class="btn btn-primary rounded-pill px-3" type="submit" name="Signin" value="Login">
    </div>
</form>