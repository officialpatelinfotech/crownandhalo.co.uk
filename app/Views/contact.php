<h1>Contact</h1>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-error"><?= session()->getFlashdata('error') ?></div>
<?php endif; ?>

<form action="<?= base_url('/contact/send') ?>" method="post">
    <?= csrf_field() ?>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?= old('name') ?>" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?= old('email') ?>" required>

    <label for="phone">Phone (optional)</label>
    <input type="text" id="phone" name="phone" value="<?= old('phone') ?>">

    <label for="message">Message</label>
    <textarea id="message" name="message" rows="6" required><?= old('message') ?></textarea>

    <button type="submit">Send Message</button>
</form>