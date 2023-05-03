<?php include 'header.php'; ?>

<h1>Welcome to My Coca Cola Brand</h1>

<div class="row">
    <?php foreach ($products as $product) : ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <!-- <div class="x3d-container">
                    <x3d id="x3dScene" class="img-fluid">
                        <scene>
                            <?php echo $product['model'] ?>
                        </scene>
                    </x3d>
                </div> -->
                <div class="card-body" style="background-image: linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url(<?php echo $product['image'] ?>); color: white;background-size: cover;background-position: right;">
                    <h3><?php echo $product['name'] ?></h3>
                    <p class="card-text"><?php echo $product['description'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="<?php echo $baseURL ?>product.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-secondary" style="color:white">View</a>
                        </div>
                        <h4 style="color:white">$<?php echo number_format($product['price'], 2) ?></h4>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'footer.php'; ?>