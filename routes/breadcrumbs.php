<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\PedidoInformacao;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


// Home
Breadcrumbs::for('Dashboard', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

// Home > PEDIDOS
Breadcrumbs::for('Pedidos Informação', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Pedidos Informação', route('pedidoInformacao.index'));
});

//create
Breadcrumbs::for('Novo Pedido', function ($trail) {
    $trail->parent('Pedidos Informação', route('pedidoInformacao.index'));
    $trail->push('Novo Pedido', route('create'));
});

//show id
Breadcrumbs::for('Ver Pedido', function (BreadcrumbTrail $trail, PedidoInformacao $pedido) {
    $trail->parent('Pedidos Informação', route('pedidoInformacao.index'));
    $trail->push("Pedido Nº. ".$pedido->num_p, route('show', $pedido));
});

//editar
Breadcrumbs::for('Responder Pedido', function (BreadcrumbTrail $trail, PedidoInformacao $pedido) {
    $trail->parent('Pedidos Informação', route('pedidoInformacao.index'));
    $trail->push("Responder Pedido Nº. ".$pedido->num_p, route('pedidoInformacao.edit', $pedido));
});



// Home > USERS
Breadcrumbs::for('Lista Users', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Lista Users', route('users.index'));
});
Breadcrumbs::for('Novo User', function ($trail) {
    $trail->Parent('Lista Users', route('users.index'));
    $trail->push('Novo User', route('create'));
});




?>
