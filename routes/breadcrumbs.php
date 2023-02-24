<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.

use App\Models\PedidoInformacao;
use App\Models\Videovigilancia;
use App\Models\Geolocalizacao;
use App\Models\Interconexao;
use App\Models\Noticia;
use App\Models\Legislacao;
use App\Models\Publicacoes;
use App\Models\Video;
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

// Home > LISTAR
Breadcrumbs::for('Pedidos Informação', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Pedidos Informação', route('pedidoInformacao.index'));
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

/******************************************GPS****************************************** */
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
/******************************************NOTICIAS****************************************** */
// LISTA TODOS AS NOTICIAS
Breadcrumbs::for('Notícias', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Notícias', route('noticia.index'));
});
//MOSTRAR id
Breadcrumbs::for('Ver Notícia', function (BreadcrumbTrail $trail, Noticia $news) {
    $trail->parent('Notícias', route('noticia.index'));
    $trail->push("Notícia ID - ".$news->id, route('show', $news));
});
 /******************************************LEGISLACAO****************************************** */
// LISTA TODOS AS LEGISLACAO
Breadcrumbs::for('Legislação', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Legislação', route('legislacao.index'));
});
//MOSTRAR id
Breadcrumbs::for('Lei ID', function (BreadcrumbTrail $trail, Legislacao $leis) {
    $trail->parent('Legislação', route('legislacao.index'));
    $trail->push("Legislação ID - ".$leis->id, route('show', $leis));
});

 /******************************************PUBLICACOES****************************************** */
// LISTA TODOS AS PUBLICACOES
Breadcrumbs::for('Publicações', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Publicações', route('publicacoes.index'));
});
//MOSTRAR id
Breadcrumbs::for('Publicação ID', function (BreadcrumbTrail $trail, Publicacoes $pubs) {
    $trail->parent('Publicações', route('publicacoes.index'));
    $trail->push("Publicação ID - ".$pubs->id, route('show', $pubs));
});
/******************************************VIDEOS****************************************** */
// LISTA TODOS OS VIDEOS
Breadcrumbs::for('Videos', function ($trail) {
    $trail->parent('Dashboard');
    $trail->push('Videos', route('video.index'));
});
//MOSTRAR id
Breadcrumbs::for('Ver Video', function (BreadcrumbTrail $trail, Video $vide) {
    $trail->parent('Videos', route('video.index'));
    $trail->push("Video ID - ".$vide->id, route('show', $vide));
});
?>
