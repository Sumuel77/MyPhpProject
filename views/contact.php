<?php include "header.php";?>
<section class="py-5 bg-info-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">Full Name Program</div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                        <div class="row mb-3">
                            <label for=""  class="col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" value="<?php echo isset($_GET['first_name']) ? $_GET['first_name'] : ' '; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="last_name" value="<?php echo isset($_GET['last_name']) ? $_GET['last_name'] : ' '; ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Full Name</label>
                            <div class="col-md-9">
                                <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ' '; ?>"  class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="full_name_btn" class="btn btn-primary" value="Make Full Name"/>
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