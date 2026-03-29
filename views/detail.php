<?php include "header.php";?>
    <section class="py-5 bg-success-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        <img src="<?php echo $product['image'];?>" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h1><?php echo $product['name'];?></h1>
                    <p><?php echo $product['price'];?></p>
                    <p><?php echo $product['description'];?></p>
                </div>
            </div>
        </div>
    </section>

<?php include "footer.php";?>