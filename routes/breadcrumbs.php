<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\PedidoInformacao;
use App\Models\Videovigilancia;
use App\Models\Geolocalizacao;
use App\Models\Interconexao;
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

/************************************HOME****************************************** */

// Home
Breadcrumbs::for('Dashboard', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

/************************************PEDIDO INFORMACAO****************************************** */

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

/************************************USERS****************************************** */

// Home > USERS
Breadcrumbs::for('Lista Users', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Lista Users', route('users.index'));
});
Breadcrumbs::for('Novo User', function ($trail) {
    $trail->Parent('Lista Users', route('users.index'));
    $trail->push('Novo User', route('create'));
});

/******************************************CCTV****************************************** */
// LISTA TODOS CCTV
Breadcrumbs::for('Formulários CCTV', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Formulários CCTV', route('videovigilancia.index'));
});

//MOSTRAR id
Breadcrumbs::for('Ver CCTV', function (BreadcrumbTrail $trail, Videovigilancia $pedido) {
    $trail->parent('Formulários CCTV', route('videovigilancia.index'));
    $trail->push("Formulário Videovigilância ID - ".$pedido->id, route('show', $pedido));
});

/******************************************CCTV****************************************** */
// LISTA TODOS GPS
Breadcrumbs::for('Formulários GPS', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Formulários GPS', route('geolocalizacao.index'));
});

//MOSTRAR id
Breadcrumbs::for('Ver GPS', function (BreadcrumbTrail $trail, Geolocalizacao $pedido) {
    $trail->parent('Formulários GPS', route('geolocalizacao.index'));
    $trail->push("Formulário Geolocalização ID - ".$pedido->id, route('show', $pedido));
});

/******************************************INTERCONEXAO****************************************** */
// LISTA TODOS INTERCONEXAO
Breadcrumbs::for('Formulários Interconexão', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Formulários Interconexão', route('interconexao.index'));
});

//MOSTRAR id
Breadcrumbs::for('Ver Interconexão', function (BreadcrumbTrail $trail, Interconexao $pedido) {
    $trail->parent('Formulários Interconexão', route('interconexao.index'));
    $trail->push("Formulário Interconexão ID - ".$pedido->id, route('show', $pedido));
});


?>
