<?php

include __DIR__ . '/db.php';

if (resolve('/admin/usersadmin')){
    $users = $users_all();
    render('admin/usersadmin/index', 'admin', compact('users'));

} elseif (resolve('/admin/usersadmin/create')){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_create();
        return header('location: /admin/usersadmin');
    }
    render('admin/usersadmin/create', 'admin');

} elseif ($params = resolve('/admin/usersadmin/(\d+)')){
    $user = $users_view($params[1]);
    render('admin/usersadmin/view', 'admin', compact('user'));

} elseif ($params = resolve('/admin/usersadmin/(\d+)/edit')) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $users_edit($params[1]);
        return header('location: /admin/usersadmin/' . $params[1]);
    }
    $user = $users_view($params[1]);
    render('admin/usersadmin/edit', 'admin', compact('user'));


}elseif ($params = resolve('/admin/usersadmin/(\d+)/delete')){
    $users_delete($params[1]);
    return header('location: /admin/usersadmin');
}
