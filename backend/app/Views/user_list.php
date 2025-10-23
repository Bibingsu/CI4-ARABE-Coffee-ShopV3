<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
</head>

<body>
    <h1>Registered Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= esc($user['username']) ?> (<?= esc($user['email']) ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>

</html>