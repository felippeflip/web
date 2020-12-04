<h3 class="mb-5">Administração de usuários Admin</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td class="text-right">
                <a href="/admin/usersadmin/<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">VER</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<a href="/admin/usersadmin/create" class="btn btn-secondary">NOVO</a>