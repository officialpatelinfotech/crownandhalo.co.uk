<h1 class="brand-serif" style="color:var(--heading);">Dress Collections</h1>
<ul>
    <?php foreach ($collections as $c): ?>
        <li><a href="<?= base_url('collections/' . esc($c['slug'])) ?>"><?= esc($c['title']) ?></a></li>
    <?php endforeach; ?>
</ul>