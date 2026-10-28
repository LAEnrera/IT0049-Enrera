<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>POS Staff Login</h2>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;">
            <?= esc(session()->getFlashdata('error')) ?>
        </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')): ?>
        <p style="color: green;">
            <?= esc(session()->getFlashdata('message')) ?>
        </p>
    <?php endif; ?>

    <form action="<?= base_url('/login') ?>" method="post">
        <?= csrf_field() ?>

        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"
               value="<?= old('username') ?>" required>
        <br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>