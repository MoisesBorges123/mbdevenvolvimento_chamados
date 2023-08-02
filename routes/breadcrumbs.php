<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Painel
Breadcrumbs::for('painel', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Painel', route('dashboard'));
});
// Home > Painel > Serviços
Breadcrumbs::for('servicos', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Serviços', route('servicos'));
});
// Home > Painel > Combo Serviços
Breadcrumbs::for('comboServicos', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Combo Serviços', route('group_servicos'));
});
// Home > Painel > Equipamentos
Breadcrumbs::for('equipments', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Equipamentos', route('equipments'));
});
// Home > Painel > Clientes
Breadcrumbs::for('clients', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Clientes', route('clients'));
});
// Home > Painel > Parceiros
Breadcrumbs::for('partners', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Parceiros', route('partners'));
});
// Home > Painel > Cargos
Breadcrumbs::for('occupations', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Profissões', route('occupations'));
});
// Home > Painel > Instituições
Breadcrumbs::for('institutions', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Instituições', route('institutions'));
});
// Home > Painel > Cursos
Breadcrumbs::for('courses', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Cursos', route('courses'));
});
// Home > Painel > Formaturas
Breadcrumbs::for('graduations', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Formaturas', route('graduations'));
});
// Home > Painel > Eventos
Breadcrumbs::for('eventos', function (BreadcrumbTrail $trail) {
    $trail->parent('painel');
    $trail->push('Eventos', route('eventos'));
});
Breadcrumbs::for('team', function (BreadcrumbTrail $trail) {
    $trail->parent('eventos');
    $trail->push('Equipe', route('team'));
});
