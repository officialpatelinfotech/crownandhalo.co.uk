<h1>Products</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-error"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<?php if (!empty($products)) : ?>
<div class="grid">
    <?php foreach ($products as $product): ?>
        <div class="card">
            <?php if (!empty($product['image'])): ?>
                <img src="<?= esc($product['image']) ?>" alt="<?= esc($product['name']) ?>">
            <?php endif; ?>
            <div class="card-body">
                <h3 style="margin:0 0 6px; font-size:18px;">
                    <a href="<?= base_url('/products/' . esc($product['id'])) ?>"><?= esc($product['name']) ?></a>
                </h3>
                <p style="margin:0; color:#555;">
                    <?= esc(word_limiter($product['description'] ?? '', 24)) ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php if (isset($pager)) : ?>
    <div style="margin-top:16px;">
        <?= $pager->links() ?>
    </div>
<?php endif; ?>

<?php else : ?>
    <p>No products found.</p>
<?php endif; ?>