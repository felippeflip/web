<h3 class="mb-5">Administração de páginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>título</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($data['pages'] as $pages): ?>
        <tr>
            <td><?php echo $pages['id']; ?></td>
            <td>
                <a href="/admin/pages/<?php echo $pages['id']; ?>"><?php echo $pages['title'] ?></a>
            </td>
            <td class="text-right"> 
                <a href="/admin/pages/<?php echo $pages['id']; ?>" class="btn btn-primary btn-sm">VER</a>
            </td>
        </tr>
    <?php endforeach; ?>   
    </tbody>
</table>


<a href="/admin/pages/create" class="btn btn-secondary">Novo</a>