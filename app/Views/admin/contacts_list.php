<style>
  /* Keep a comfortable max width but allow smaller screens to shrink */
  .container {
    width: 1200px !important;
    max-width: 1200px !important;
    margin: 0 auto;
  }

  /* Responsive table: on small screens convert rows to stacked cards */
  .table-responsive.responsive-cards table thead {
    display: table-header-group;
  }

  @media (max-width: 768px) {
    .table-responsive.responsive-cards table thead {
      display: none;
    }

    .table-responsive.responsive-cards table tbody tr {
      display: block;
      margin-bottom: 12px;
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 8px;
      padding: 10px;
      background: #fff;
    }

    .table-responsive.responsive-cards table tbody td {
      display: flex;
      justify-content: space-between;
      padding: 6px 8px;
      white-space: normal;
      border: none;
    }

    .table-responsive.responsive-cards table tbody td:before {
      content: attr(data-label) "";
      font-weight: 600;
      color: #555;
      margin-right: 8px;
      flex: 0 0 42%;
    }

    .table-responsive.responsive-cards table tbody td .cell-value {
      flex: 1 1 58%;
      text-align: right;
      overflow-wrap: anywhere;
    }

    .table-responsive.responsive-cards table tbody td[data-label="Message"]:before {
      display: block;
      margin-bottom: 6px;
      flex-basis: 100%;
    }

    .table-responsive.responsive-cards table tbody td[data-label="Message"] .cell-value {
      text-align: left;
      display: block;
    }
  }
</style>
<div class="container mt-3">

  <div class="row">
    <div class="col-md-2">
      <?= view('admin/_sidebar') ?>
    </div>
    <div class="col-md-10">
      <div class="mb-2">
        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="safeBack('<?= base_url('/admin') ?>');">Back</button>
      </div>
      <h2 class="brand-serif">Contact Messages</h2>
      <div class="table-responsive responsive-cards mt-3 border rounded">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Message</th>
              <th>Received</th>
            </tr>
          </thead>
          <tbody>
            <?php if (! empty($contacts)): ?>
              <?php foreach ($contacts as $c): ?>
                <tr>
                  <td data-label="#">
                    <div class="cell-value"><?= esc($c['id']) ?></div>
                  </td>
                  <td data-label="Name">
                    <div class="cell-value"><?= esc($c['name']) ?></div>
                  </td>
                  <td data-label="Email">
                    <div class="cell-value"><?= esc($c['email']) ?></div>
                  </td>
                  <td data-label="Phone">
                    <div class="cell-value"><?= esc($c['phone']) ?></div>
                  </td>
                  <td data-label="Message" style="max-width:420px;">
                    <div class="cell-value"><?= esc($c['message']) ?></div>
                  </td>
                  <td data-label="Received">
                    <div class="cell-value"><?= esc($c['created_at']) ?></div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6">No contact messages yet.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>