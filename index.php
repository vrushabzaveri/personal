<?php include "header.php" ?>

<div class="container">
    <div class="row">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-sm-3"></div>

        <div class="col-sm-6 text-left">
            <div class="logo">
                <img src="assets/logo.jpg" class="img-responsive">
            </div>

            <div class="form-body">
                <br>
                <form>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="dashboard.php" class="btn btn-info btn-block">Login</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="register.php" class="btn btn-info btn-block">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-sm-3"></div>
    </div>
</div>

<?php include "footer.php" ?>
