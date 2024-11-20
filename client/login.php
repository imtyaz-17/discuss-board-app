<div class="container mt-3">
    <h1 class="text-center">Login</h1>
    <form action="../server/request.php" method="post">
        <div class="col-6 offset-sm-3">
            <div class="mb-1">
                <label for="inputEmail" class="col-form-label">Email</label>
                <div class="col-sm-12">
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="col-form-label">Password</label>
                <div class="col-sm-12">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
