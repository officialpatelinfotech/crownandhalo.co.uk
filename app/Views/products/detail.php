<h1><?= esc($product['name']) ?></h1>

<?php if (!empty($product['image'])): ?>
    <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>" style="width:100%; max-width:600px; height:auto; border-radius:8px;">
<?php endif; ?>

<p style="margin-top:12px; white-space:pre-line;"><?= esc($product['description']) ?></p>

<?php if (!empty($product['price'])): ?>
    <p><strong>Price:</strong> $<?= esc(number_format((float)$product['price'], 2)) ?></p>
<?php endif; ?>

<p><a href="<?= base_url('/products') ?>">Back to Products</a></p>