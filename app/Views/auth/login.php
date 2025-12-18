<div class="container" style="max-width:520px; margin-top:36px;">
  <div class="card shadow-sm">
    <div class="card-body">
      <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
      <?php endif; ?>

      <h2 class="brand-serif">Admin Login</h2>
      <form method="post" action="<?= base_url('/admin/login') ?>" style="margin-top:12px;">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input class="form-control" type="email" name="email" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input class="form-control" type="password" name="password" required>
        </div>
        <div class="d-flex justify-content-end">
          <button class="btn btn-primary" type="submit">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</div>

</main>
</body>
</html>
