<style>
	.container {
		width: 1200px !important;
		max-width: 1200px !important;
		margin: 0 auto;
	}
</style>
<div class="container mt-3">
	<div class="row">
		<div class="col-md-2">
			<?= view('admin/_sidebar') ?>
		</div>
		<div class="col-md-10">
			<div class="mb-2 d-flex justify-content-between align-items-center">
				<div>
					<h2 class="brand-serif" style="color:var(--heading); margin:0;">Admin Dashboard</h2>
					<p class="mb-0" style="color:#8A8177; margin-top:6px;">Welcome back — quick overview of site content.</p>
				</div>
				<div class="d-flex gap-2">
					<a href="<?= base_url('/admin/dresses') ?>" class="btn btn-outline-primary btn-sm">Manage Dresses</a>
					<a href="<?= base_url('/admin/dresses/create') ?>" class="btn btn-primary btn-sm">Add New Dress</a>
				</div>
			</div>

			<div class="row g-3 mb-4">
				<div class="col-md-4">
					<div class="card p-3">
						<div style="font-size:14px; color:#8A8177">Total Dresses</div>
						<div style="font-size:28px; font-weight:700; color:var(--heading); margin-top:8px"><?= isset($totalDresses) ? (int)$totalDresses : 0 ?></div>
						<div style="margin-top:12px"><a href="<?= base_url('/admin/dresses') ?>">View all dresses</a></div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card p-3">
						<div style="font-size:14px; color:#8A8177">Recent Dresses</div>
						<div style="margin-top:10px">
							<?php if (! empty($recentDresses)): ?>
								<div class="d-flex flex-wrap gap-3">
									<?php foreach ($recentDresses as $d): ?>
										<div style="width:160px; border-radius:8px; overflow:hidden; border:1px solid #eee; background:#fff;">
											<?php $img = ! empty($d['image']) ? $d['image'] : null; ?>
												<?php if ($img): ?>
												<img src="<?= base_url('public/' . $img) ?>" loading="lazy" style="width:100%; height:110px; object-fit:cover; display:block">
											<?php else: ?>
												<div style="width:100%; height:110px; background:#F5F2EF"></div>
											<?php endif; ?>
											<div style="padding:8px">
												<div style="font-weight:600; color:var(--heading); font-size:14px;"><?= esc($d['title']) ?></div>
												<div style="font-size:13px; color:#8A8177; margin-top:6px; display:flex; gap:6px;">
													<a href="<?= base_url('/admin/dresses/edit/' . $d['id']) ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
							<?php else: ?>
								<div style="color:#8A8177">No recent dresses yet.</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

</main>
</body>
</html>
