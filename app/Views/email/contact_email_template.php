<!doctype html>
<html>
<body>
    <h2>New Contact Message</h2>
    <p><strong>Name:</strong> <?= esc($name) ?></p>
    <p><strong>Email:</strong> <?= esc($email) ?></p>
    <?php if (!empty($phone)) : ?>
        <p><strong>Phone:</strong> <?= esc($phone) ?></p>
    <?php endif; ?>
    <p><strong>Message:</strong></p>
    <p style="white-space:pre-line;"><?= esc($message) ?></p>
</body>
</html>