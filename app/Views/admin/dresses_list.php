<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-2">
      <?= view('admin/_sidebar') ?>
    </div>
    <div class="col-md-10">
      <div class="mb-2 d-flex justify-content-between align-items-center">
        <div>
          <button type="button" class="btn btn-outline-secondary btn-sm" onclick="safeBack('<?= base_url('/admin') ?>');">&larr;&nbsp;Back</button>
        </div>
        <div>
          <a class="btn btn-sm btn-primary" href="<?= base_url('/admin/dresses/create') ?>">Add New Dress</a>
        </div>
      </div>

      <div class="mb-3">
        <h2 class="brand-serif" style="color:var(--heading); margin:0;">Dresses Inventory</h2>
      </div>

      <div class="table-responsive">
        <table class="table table-striped align-middle">
      <thead>
        <tr>
          <th scope="col" style="width:72px;"></th>
          <th scope="col">Title</th>
          <th scope="col">Collection</th>
          <th scope="col" style="width:120px; text-align:center">Stock</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dresses as $d): ?>
          <tr>
            <td>
              <?php if (! empty($d['image'])): ?>
                <div style="width:56px; height:56px; border-radius:6px; overflow:hidden; border:1px solid #eee; background:#fff; display:inline-block;">
                  <img src="<?= base_url('public/' . esc($d['image'])) ?>" alt="<?= esc($d['title']) ?>" style="width:100%; height:100%; object-fit:cover; display:block;">
                </div>
              <?php else: ?>
                <div style="width:56px; height:56px; border-radius:6px; overflow:hidden; border:1px solid #eee; background:#f7f5f2; display:inline-block;"></div>
              <?php endif; ?>
            </td>
            <td><?= esc($d['title']) ?></td>
            <td><?= esc($d['collection']) ?></td>
            <td class="text-center"><?= esc($d['stock']) ?></td>
            <td>
              <a class="btn btn-sm btn-outline-primary me-2" href="<?= base_url('/admin/dresses/edit/' . $d['id']) ?>">Edit</a>
              <a class="btn btn-sm btn-outline-danger" href="<?= base_url('/admin/dresses/delete/' . $d['id']) ?>" onclick="return confirm('Delete this dress?')">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
    </div>
  </div>
</div>

</main>
</body>
</html>
