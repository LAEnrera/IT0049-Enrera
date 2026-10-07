<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

<nav>
    <a href="<?= site_url('/') ?>">Today</a> |
    <a href="<?= site_url('tasks') ?>">All Tasks</a> |
    <a href="<?= site_url('profile') ?>">Profile</a> |
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<h1>User Profile</h1>

<?php if ($user): ?>
    <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
    <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
    <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
    <p><strong>Account Created:</strong> <?= esc($user['created_at']) ?></p>
<?php else: ?>
    <p>No user profile found.</p>
<?php endif; ?>

</body>
</html>