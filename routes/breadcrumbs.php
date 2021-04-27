<?php
Breadcrumbs::for('inicio', function ($trail) {
    $trail->push('Inicio', url('/'));
});


Breadcrumbs::for('login', function ($trail) {
    $trail->parent('inicio');
    $trail->push('Ingresar al sistema', route('login'));
});
Breadcrumbs::for('restablecerPassword', function ($trail) {
    $trail->parent('login');
    $trail->push('Restablecer contraseña', url('password/reset'));
});

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Administración', route('home'));
});
// noticias
Breadcrumbs::for('noticiasAdmin', function ($trail) {
    $trail->parent('home');
    $trail->push('Noticias', route('noticiasAdmin'));
});
Breadcrumbs::for('editarNoticia', function ($trail,$noticia) {
    $trail->parent('noticiasAdmin');
    $trail->push('Editar noticia', route('editarNoticia',$noticia->id));
});

