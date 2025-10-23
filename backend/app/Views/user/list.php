<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css">
</head>

<body class="bg-gray-100 p-10 text-gray-800">
    <h1 class="mb-6 font-bold text-3xl">Registered Users</h1>

    <table class="bg-white border border-gray-400 border-collapse table-auto">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td class="px-4 py-2 border"><?= esc($user['id']) ?></td>
                    <td class="px-4 py-2 border"><?= esc($user['name'] ?? '—') ?></td>
                    <td class="px-4 py-2 border"><?= esc($user['email']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>