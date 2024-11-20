<div class="container mt-3">
    <h1 class="text-center">SignUp</h1>
    <form action="../server/request.php" method="post">
        <div class="col-6 offset-sm-3">
            <div class="mb-1">
                <label for="name" class="col-form-label">Name</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" id="name">
                </div>
            </div>
            <div class="mb-1">
                <label for="inputEmail" class="col-form-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="mb-1">
                <label for="inputPassword" class="col-form-label">Password</label>
                <div class="col-sm-12">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="col-form-label">Confirm Password</label>
                <div class="col-sm-12">
                    <input type="password" name="confirm-password" class="form-control" id="confirmPassword">
                </div>
            </div>
            <div class="text-end">
                <button type="submit" name="signup" class="btn btn-primary">SignUp</button>
            </div>
        </div>
    </form>
</div>
