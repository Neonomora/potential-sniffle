<h2>Daftar Users</h2>

<ul>
<?php foreach ($users as $user): ?>
    <li><?= esc($user['username']) ?> (<?= esc($user['email']) ?>)</li>
<?php endforeach; ?>
</ul>
<a href="/framework/users/create">form</a>