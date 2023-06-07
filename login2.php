<?php include './config/header.php'  ?>
<?php include './assets/databdses/logindb.php'  ?>







<body>

    <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Login</h1>
                </div>
                <?php if (isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
                <div class="modal-body p-5 pt-0">

                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control rounded-3" placeholder="Username" required>
                            <label for="floatingInput">Email address</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="floatingPassword" name='password' placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="login">Login</button>
                        <div>
                            <small class="text-muted">
                                Don't have an account?,
                                <a href="/sign2.php">
                                    Signup here.
                                </a>
                                <br>
                                <a href="#">Forgot password</a>?

                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>