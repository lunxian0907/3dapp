{
    "id": <?php echo $product["id"] ?>,
    "name": "<?php echo $product["name"] ?>",
    "description": "<?php echo $product["description"] ?>",
    "price": <?php echo $product["price"] ?>,
    "model": <?php echo json_encode($product["model"]) ?>,
    "image": "<?php echo $product["image"] ?>",
    "scale": <?php echo $product["scale"] ?>
}