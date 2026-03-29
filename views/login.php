<?php include "header.php";?>
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <p class="text-danger text-center"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>
                            <form action="web.php" method="post">
                                <div class="row mb-3">
                                    <label for=""  class="col-md-3">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="user_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password"name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="login_btn" class="btn btn-primary" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php";?>