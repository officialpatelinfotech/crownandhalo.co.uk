<style>
  .admin-sidebar { background: #fff; border-right: 1px solid rgba(0,0,0,0.04); padding: 18px; }
  .admin-sidebar .brand-serif { font-size: 18px; color: var(--heading); text-decoration: none; }
  .admin-sidebar .nav-link { color: #5e544a; padding: 6px 0; }
  .admin-sidebar .nav-link:hover { color: var(--accent-dark); text-decoration: none; }
  .admin-sidebar .nav-link.active { color: var(--accent-dark); font-weight:700; }
</style>
<?php
  $cur = function_exists('current_url') ? current_url() : (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '');
  $is_active = function($href, $exact = false) use ($cur) {
    $curN = rtrim($cur, '/');
    $hrefN = rtrim($href, '/');
    if ($exact) return $curN === $hrefN ? 'active' : '';
    return (strpos($curN, $hrefN) === 0) ? 'active' : '';
  };
?>
<aside class="admin-sidebar d-none d-md-block">
  <a href="<?= base_url('/admin') ?>" class="brand-serif d-inline-block mb-3">Crown & Halo</a>
  <nav class="nav flex-column" aria-label="Admin navigation">
    <a class="nav-link <?= $is_active(base_url('/admin'), true) ?>" href="<?= base_url('/admin') ?>">Dashboard</a>
    <a class="nav-link <?= $is_active(base_url('/admin/dresses')) ?>" href="<?= base_url('/admin/dresses') ?>">Dresses</a>
    <a class="nav-link <?= $is_active(base_url('/admin/dresses/create'), true) ?>" href="<?= base_url('/admin/dresses/create') ?>">Add Dress</a>
    <a class="nav-link" href="<?= base_url('/') ?>" target="_blank">View Site</a>
    <a class="nav-link text-danger" href="<?= base_url('/admin/logout') ?>">Logout</a>
  </nav>
</aside>
