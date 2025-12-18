<?php $isEdit = ! empty($dress); ?>
<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-2">
      <?= view('admin/_sidebar') ?>
    </div>
    <div class="col-md-10">
      <div class="mb-2">
        <button type="button" class="btn btn-outline-secondary btn-sm" onclick="safeBack('<?= base_url('/admin/dresses') ?>');">&larr;&nbsp;Back</button>
      </div>
      <div class="card" style="max-width:900px;">
        <div class="card-body">
          <h2 class="brand-serif" style="color:var(--heading)"><?= $isEdit ? 'Edit Dress' : 'Add New Dress' ?></h2>
      <form method="post" action="<?= $isEdit ? base_url('/admin/dresses/update/' . $dress['id']) : base_url('/admin/dresses/store') ?>" enctype="multipart/form-data" class="mt-3">
        <div class="row g-3">
          <div class="col-12">
            <label class="form-label">Title</label>
            <input class="form-control" name="title" value="<?= $isEdit ? esc($dress['title']) : '' ?>" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Collection</label>
            <input class="form-control" name="collection" value="<?= $isEdit ? esc($dress['collection']) : '' ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Size</label>
            <input class="form-control" name="size" value="<?= $isEdit ? esc($dress['size']) : '' ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Color</label>
            <input class="form-control" name="color" value="<?= $isEdit ? esc($dress['color']) : '' ?>">
          </div>
          <div class="col-md-6">
            <label class="form-label">Price</label>
            <input class="form-control" name="price" value="<?= $isEdit ? esc($dress['price']) : '' ?>">
          </div>
          <div class="col-md-6">
            <label class="form-label">Stock</label>
            <input class="form-control" name="stock" value="<?= $isEdit ? esc($dress['stock']) : '' ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Images</label>
            <div id="dropZone" class="drop-zone my-2" style="border:2px dashed #DDD; padding:18px; border-radius:10px; cursor:pointer; text-align:center; position:relative;">
              <input id="imageInput" type="file" name="image[]" accept="image/*" multiple style="display:none;">
              <div id="dropZoneContent">
                <strong>Drag & drop images here</strong>
                <div style="margin-top:6px; color:#6f665c;">or click to select (multiple files supported)</div>
              </div>
              <!-- Remove-all button positioned top-right inside the drop zone -->
              <div style="position:absolute; top:8px; right:8px; z-index:20;">
                <button id="removeAllBtn" type="button" class="btn btn-sm btn-outline-danger" style="display:none;">Remove all</button>
              </div>
              <?php
                $existingImages = [];
                if ($isEdit) {
                    if (! empty($dress['images'])) {
                        $decoded = json_decode($dress['images'], true);
                        if (is_array($decoded)) $existingImages = $decoded;
                    } elseif (! empty($dress['image'])) {
                        $existingImages[] = $dress['image'];
                    }
                }
              ?>
              <div id="currentImage" style="margin-top:12px; display:<?= empty($existingImages) ? 'none' : 'flex' ?>; gap:8px; flex-wrap:wrap; justify-content:center;">
                <?php foreach ($existingImages as $img): ?>
                  <div class="existing-thumb" data-path="<?= esc($img) ?>" style="width:120px; height:120px; border-radius:8px; overflow:hidden; border:1px solid #eee; background:#fff; position:relative;">
                    <img src="<?= base_url('public/' . $img) ?>" alt="<?= esc($dress['title'] ?? 'Current image') ?>" style="width:100%; height:100%; object-fit:cover;">
                    <button type="button" class="btn-remove-existing" title="Remove" style="position:absolute; top:6px; right:6px; background:rgba(0,0,0,0.6); color:#fff; border:none; width:26px; height:26px; border-radius:50%; cursor:pointer">✕</button>
                  </div>
                <?php endforeach; ?>
              </div>
              <div id="imageSeparator" style="display:none; align-items:center; justify-content:center; margin:8px 0;">
                <span style="background:#fff; padding:6px 12px; border-radius:16px; border:1px solid #eee; color:#666; font-size:13px;">New images</span>
              </div>
              <div id="removedInputs"></div>
              <div id="imagePreviewWrapper" style="margin-top:12px; display:flex; gap:8px; flex-wrap:wrap; justify-content:center;"></div>
            </div>
          </div>

          <div class="col-12">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" style="min-height:140px"><?= $isEdit ? esc($dress['description']) : '' ?></textarea>
          </div>

          <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit"><?= $isEdit ? 'Save changes' : 'Create' ?></button>
          </div>
        </div>
      </form>
    <script>
      // Client-side guard: require at least one image (existing or newly selected) before submitting
      (function(){
        var form = document.querySelector('form[enctype="multipart/form-data"]');
        if (!form) return;
        form.addEventListener('submit', function(e){
          try {
            var hasExisting = document.querySelectorAll && document.querySelectorAll('#currentImage .existing-thumb').length;
            var hasNew = (document.getElementById('imagePreviewWrapper') && document.getElementById('imagePreviewWrapper').querySelectorAll('.preview-thumb').length) || (document.getElementById('imageInput') && document.getElementById('imageInput').files && document.getElementById('imageInput').files.length);
            if (!hasExisting && !hasNew) {
              e.preventDefault();
              e.stopPropagation && e.stopPropagation();
              alert('Please select or keep at least one image for the dress before saving.');
              return false;
            }
          } catch(err) {
            // if any error, allow server to validate
          }
        });
      })();
    </script>
    </div>
  </div>
</div>

<script>
  (function(){
    var input = document.getElementById('imageInput');
    var drop = document.getElementById('dropZone');
    var wrapper = document.getElementById('imagePreviewWrapper');
    var current = document.getElementById('currentImage');
    var currentFiles = Array.from(input.files || []); // source of truth for selected files
    var prevFiles = [];
    var removeAllBtn = document.getElementById('removeAllBtn');
    var isEdit = <?= $isEdit ? 'true' : 'false' ?>;

    function prevent(e){ e.preventDefault(); e.stopPropagation(); }

    function createThumb(file, idx){
        var reader = new FileReader();
        var thumb = document.createElement('div');
        thumb.className = 'preview-thumb';
        thumb.style.width = '120px';
        thumb.style.height = '120px';
        thumb.style.borderRadius = '8px';
        thumb.style.overflow = 'hidden';
        thumb.style.position = 'relative';
        thumb.style.border = '1px solid #eee';
        thumb.style.background = '#fff';

        var remove = document.createElement('button');
        remove.type = 'button';
        remove.className = 'btn-remove-existing';
        remove.textContent = '✕';
        remove.title = 'Remove';

        remove.addEventListener('click', function(ev){
          ev && ev.preventDefault && ev.preventDefault();
          ev && ev.stopPropagation && ev.stopPropagation();
          // remove the file at this index from our currentFiles array
          currentFiles = currentFiles.filter(function(_, i){ return i !== idx; });
          var dt = new DataTransfer();
          currentFiles.forEach(function(f){ dt.items.add(f); });
          try { input.files = dt.files; } catch (e) {}
          renderPreviews();
        });

        reader.onload = function(ev){
          var img = document.createElement('img');
          img.src = ev.target.result;
          img.style.width = '100%';
          img.style.height = '100%';
          img.style.objectFit = 'cover';
          thumb.appendChild(img);
          thumb.appendChild(remove);
        };
        reader.readAsDataURL(file);
        return thumb;
      }

    function renderPreviews(){
      try{
        wrapper = wrapper || document.getElementById('imagePreviewWrapper');
        var sep = document.getElementById('imageSeparator');
        if (!wrapper) return;
        wrapper.innerHTML = '';
        if (!currentFiles || !currentFiles.length) {
          wrapper.style.display = 'none';
          if (sep) sep.style.display = 'none';
          updateRemoveAllVisibility();
          return;
        }
        // show separator and wrapper
        wrapper.style.display = 'flex';
        if (sep) sep.style.display = 'flex';

        currentFiles.forEach(function(f, i){
          try{
            var t = createThumb(f, i);
            wrapper.appendChild(t);
          }catch(err){}
        });
        updateRemoveAllVisibility();
      }catch(err){}
    }

    // Attach handlers to existing-image remove buttons to prevent event propagation
    function attachExistingRemovers(){
      try{
        var existingBtns = document.querySelectorAll && document.querySelectorAll('#currentImage .btn-remove-existing');
        if (!existingBtns || !existingBtns.length) return;
        existingBtns.forEach(function(btn){
          // avoid attaching twice
          if (btn.__hasRemoveHandler) return;
          btn.__hasRemoveHandler = true;
          btn.addEventListener('click', function(e){
            e && e.preventDefault && e.preventDefault();
            e && e.stopPropagation && e.stopPropagation();
            var thumb = btn.closest('.existing-thumb');
            if (!thumb) return;
            var path = thumb.getAttribute('data-path');
            var removedInputs = document.getElementById('removedInputs');

            // Try AJAX delete first
            try {
              var fd = new FormData(); fd.append('path', path);
              <?php if ($isEdit && ! empty($dress['id'])): ?>
                fd.append('id', '<?= $dress['id'] ?>');
              <?php endif; ?>
              fetch('<?= base_url('/admin/deleteImage') ?>', { method: 'POST', body: fd, credentials: 'same-origin' })
                .then(function(res){ return res.json().catch(function(){ return { ok:false }; }); })
                .then(function(json){
                  if (json && json.ok) {
                    // removed on server
                    thumb.parentNode && thumb.parentNode.removeChild(thumb);
                  } else {
                    // fallback: mark for removal on submit
                    var inp = document.createElement('input'); inp.type = 'hidden'; inp.name = 'remove_images[]'; inp.value = path; removedInputs && removedInputs.appendChild(inp);
                    thumb.parentNode && thumb.parentNode.removeChild(thumb);
                  }
                  if (current && current.querySelectorAll && !current.querySelectorAll('.existing-thumb').length) current.style.display = 'none';
                  updateRemoveAllVisibility();
                }).catch(function(){
                  var inp = document.createElement('input'); inp.type = 'hidden'; inp.name = 'remove_images[]'; inp.value = path; removedInputs && removedInputs.appendChild(inp);
                  thumb.parentNode && thumb.parentNode.removeChild(thumb);
                  if (current && current.querySelectorAll && !current.querySelectorAll('.existing-thumb').length) current.style.display = 'none';
                  updateRemoveAllVisibility();
                });
            } catch(err){
              var inp = document.createElement('input'); inp.type = 'hidden'; inp.name = 'remove_images[]'; inp.value = path; removedInputs && removedInputs.appendChild(inp);
              thumb.parentNode && thumb.parentNode.removeChild(thumb);
              if (current && current.querySelectorAll && !current.querySelectorAll('.existing-thumb').length) current.style.display = 'none';
              updateRemoveAllVisibility();
            }
          });
        });
      }catch(err){}
    }

    // Prevent the browser default behavior when files are dropped anywhere
    // (which would otherwise open the file in a new tab). We still handle
    // drops on the #dropZone below.
    document.addEventListener('dragover', prevent);
    document.addEventListener('drop', function(e){
      // if drop happens outside our drop zone, just prevent default navigation
      if (!e.target.closest || !e.target.closest('#dropZone')) {
        prevent(e);
      }
    });

    if (drop) {
      drop.addEventListener('click', function(){ input.click(); });
      drop.addEventListener('dragenter', prevent);
      drop.addEventListener('dragover', function(e){ prevent(e); try{ e.dataTransfer.dropEffect = 'copy'; }catch(err){} });
      drop.addEventListener('drop', function(e){
        prevent(e);
          var dt = e.dataTransfer;
          if (!dt) return;
          var files = Array.from(dt.files || []);
          // merge with currentFiles
          currentFiles = (currentFiles || []).concat(files);
          var dt2 = new DataTransfer();
          currentFiles.forEach(function(f){ dt2.items.add(f); });
          input.files = dt2.files;
          renderPreviews();
      });
    }

      // keep track of previous files before opening file dialog so we can merge
      input && input.addEventListener('click', function(){ prevFiles = Array.from(input.files || []); });
      input && input.addEventListener('change', function(e){
        var newly = Array.from(input.files || []);
        // If there were previously selected files (prevFiles), merge them with newly selected
        if (prevFiles && prevFiles.length) {
          currentFiles = prevFiles.concat(newly);
          var dt = new DataTransfer();
          currentFiles.forEach(function(f){ dt.items.add(f); });
          input.files = dt.files;
        } else {
          currentFiles = newly;
        }
        prevFiles = [];
        renderPreviews();
      });

      function updateRemoveAllVisibility(){
        try{
          var hasExisting = current && current.querySelectorAll && current.querySelectorAll('.existing-thumb').length;
          var hasSelected = (currentFiles && currentFiles.length);
          if (!removeAllBtn) return;
          removeAllBtn.style.display = (hasExisting || hasSelected) ? 'inline-flex' : 'none';
        }catch(err){}
      }

      if (removeAllBtn) {
        removeAllBtn.addEventListener('click', function(ev){
          ev && ev.preventDefault && ev.preventDefault();
          ev && ev.stopPropagation && ev.stopPropagation();
          if (!confirm('Remove all images (including existing images)?')) return;
          var removedInputs = document.getElementById('removedInputs');

          // Gather existing image paths
          var existingThumbs = (current && current.querySelectorAll) ? Array.from(current.querySelectorAll('.existing-thumb')) : [];
          var paths = existingThumbs.map(function(t){ return t.getAttribute('data-path'); }).filter(Boolean);

          // If there are existing images, attempt to delete them via AJAX (one request per image)
          if (paths.length) {
            var deletePromises = paths.map(function(p){
              try {
                var fd = new FormData(); fd.append('path', p);
                <?php if ($isEdit && ! empty($dress['id'])): ?>
                  fd.append('id', '<?= $dress['id'] ?>');
                <?php endif; ?>
                return fetch('<?= base_url('/admin/deleteImage') ?>', { method: 'POST', body: fd, credentials: 'same-origin' })
                  .then(function(res){ return res.json().catch(function(){ return { ok:false }; }); })
                  .then(function(json){ return { path: p, ok: !!(json && json.ok) }; })
                  .catch(function(){ return { path: p, ok: false }; });
              } catch (err) {
                return Promise.resolve({ path: p, ok: false });
              }
            });

            Promise.all(deletePromises).then(function(results){
              // For any failed deletions, fall back to hidden inputs so server will remove on submit
              results.forEach(function(r){
                if (!r.ok) {
                  var inp = document.createElement('input');
                  inp.type = 'hidden'; inp.name = 'remove_images[]'; inp.value = r.path;
                  removedInputs && removedInputs.appendChild(inp);
                }
              });

              // Remove all existing thumb nodes from DOM
              existingThumbs.forEach(function(t){ t.parentNode && t.parentNode.removeChild(t); });

              // Clear selected files and previews
              currentFiles = [];
              try { input.files = (new DataTransfer()).files; } catch(e){}
              try{ var previews = document.querySelectorAll && document.querySelectorAll('#dropZone .preview-thumb'); if (previews && previews.length) { Array.from(previews).forEach(function(pt){ pt.parentNode && pt.parentNode.removeChild(pt); }); } }catch(err){}
              if (wrapper) { wrapper.innerHTML = ''; wrapper.style.display = 'none'; }
              var sep = document.getElementById('imageSeparator'); if (sep) sep.style.display = 'none';
              if (current) current.style.display = 'none';
              updateRemoveAllVisibility();
            }).catch(function(){
              // On catastrophic failure, mark all for removal as fallback and clear UI
              paths.forEach(function(p){ var inp = document.createElement('input'); inp.type = 'hidden'; inp.name = 'remove_images[]'; inp.value = p; removedInputs && removedInputs.appendChild(inp); });
              existingThumbs.forEach(function(t){ t.parentNode && t.parentNode.removeChild(t); });
              currentFiles = [];
              try { input.files = (new DataTransfer()).files; } catch(e){}
              if (wrapper) { wrapper.innerHTML = ''; wrapper.style.display = 'none'; }
              var sep = document.getElementById('imageSeparator'); if (sep) sep.style.display = 'none';
              if (current) current.style.display = 'none';
              updateRemoveAllVisibility();
            });
          } else {
            // no existing images, simply clear previews and inputs
            try { current.innerHTML = ''; current.style.display = 'none'; } catch(e){}
            currentFiles = [];
            try { input.files = (new DataTransfer()).files; } catch(e){}
            try{ var previews = document.querySelectorAll && document.querySelectorAll('#dropZone .preview-thumb'); if (previews && previews.length) { Array.from(previews).forEach(function(pt){ pt.parentNode && pt.parentNode.removeChild(pt); }); } }catch(err){}
            if (wrapper) { wrapper.innerHTML = ''; wrapper.style.display = 'none'; }
            var sep = document.getElementById('imageSeparator'); if (sep) sep.style.display = 'none';
            updateRemoveAllVisibility();
          }
        });
      }
    renderPreviews();
    // Ensure existing-image remove buttons have handlers to stop propagation
    try{ attachExistingRemovers(); }catch(err){}
  })();
</script>

<style>
  /* Thumbnails side-by-side */
  #currentImage { display:flex; flex-direction:row; flex-wrap:wrap; gap:8px; justify-content:flex-start; align-items:flex-start; }
  #dropZone { display:flex; flex-direction:column; align-items:center; padding:30px 18px 34px; min-height:160px; }
  #dropZoneContent { margin-bottom:18px; display:block; z-index:2; }
  .existing-thumb { flex: 0 0 120px; margin:8px 6px 6px 6px; display:block; position:relative; overflow:hidden; border-radius:8px; }
  #imagePreviewWrapper { display:flex; flex-wrap:wrap; gap:12px; margin-top:28px; z-index:0; align-self:center; }
  .existing-thumb img, #imagePreviewWrapper img { width:100%; height:100%; object-fit:cover; display:block; border-radius:8px; }
  .existing-thumb .btn-remove-existing,
  .preview-thumb .btn-remove-existing { position:absolute; top:8px; right:8px; width:22px; height:22px; line-height:22px; padding:0; display:flex; align-items:center; justify-content:center; background:rgba(0,0,0,0.6); color:#fff; border:none; border-radius:50%; cursor:pointer; z-index:5; }
</style>

        </div>
      </div>
    </div>
  </div>
</div>

</main>
</body>
</html>
