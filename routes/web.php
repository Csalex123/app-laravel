<?php

/* Rotas com controllers */

Route::resource('products', 'ProductController');

Route::resource('users', 'UserController');

// Route::name('products.')->group(function() {

//     /* Rota view */
//     Route::get('/produto/{id}/edit', 'ProductController@editProduct')->name('edit');
//     Route::get('/produtos/create', 'ProductController@createProduct')->name('create');
//     Route::get('/produtos', 'ProductController@index')->name('index');
//     Route::get('/produtos/{$id}', 'ProductController@filterProdutos')->name('filter');

//     /*Rota para efetuar ações no model*/
//     Route::post('/produtos', 'ProductController@store')->name('create-product');
//     Route::put('/produtos/{$id}', 'ProductController@update')->name('edit-product');
//     Route::delete('/produtos/{$id}', 'ProductController@delete')->name('delete-product');

// });




/* ------------------  Grupo de Rota  ------------------  */

/* Os filtros middleware já criado pelo suporte do laravel serve para nos fazermos validações em nosso código.  */

/* Ex.: O middleware tem vários paramentros com diversos recursos e um dele é de autenticação, dizendo que o usuário precisa está logado. */

/* Irei criar várias rotas e colocar o middleware de autenticação nele */

// Route::get('/admin/financeiro', function() {
//     return 'Página do financeiro';
// }); 

// Route::get('/admin/home', function() {
//     return 'Página home do administrador'; // Dessa maneira qualquer pessoa pode acessar nossa página, para evitar isso colocamos um middleware de autenticação.
// });

// Route::get('/admin/home', function() {
//     return 'Página home do administrador';
// })->middleware('auth'); //Verifica se o usuário está logado, caso não esteja ele redireciona para página Login

Route::get('/login', function() {
    return 'Página de login';
})->name('login');

/* Coloca o middleware em um grupo de rotas */
// Route::middleware([])->group(function () {

//     Route::prefix('admin')->group(function() {

//         // Route::get('/financeiro', function() {
//         //     return 'Página do financeiro';
//         // }); 
    
//         // Route::get('/home', function() {
//         //     return 'Página home do administrador';
//         // }); 

//         /* Redirecionando para um Controller */
//         /* Perceba que o nome da Past vai sempre ficar se repetindo, podemos utilizar um prefixo para ela */
//         // Route::get('/' , 'Admin\TesteController@metodoTeste');

//         // Route::get('/financeiro', 'Admin\TesteController@financeiro');

//         // Route::get('/cadastro-adm', 'Admin\TesteController@cadastroAdmin');


//         // Route::namespace('Admin')->group(function() {

//         //     Route::name('admin.')->group(function () {

//         //         Route::get('/', 'TesteController@metodoTeste')->name('dashboard'); 
                
//         //         Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');
                
//         //         Route::get('/cadastro-adm', 'TesteController@cadastroAdm')->name('cadastro-adm');

//         //         Route::Get('/teste/bla', function() {
//         //             return redirect()->route('admin.financeiro');
//         //         });

//         //     });
//         // });
        
//     });
// });


/* Organizando todos os grupo de uma vez só */

Route::group([
    'middleware' => [],
    'prefix' => 'panel-adm',
    'namespace' => 'Admin',
    'as' => 'admin.', // as = name
], function(){
    
    Route::get('/dashboard', 'TesteController@metodoTeste')->name('dasboard');

    Route::get('/financeiro', 'TesteController@financeiro')->name('financeiro');

    Route::get('/cadastro', 'TesteController@cadastroAdm')->name('cadastroAdm');

    Route::get('/', function(){
        return redirect()->route('admin.financeiro');
    });

});



/* ------------------  Rotas nomeadas ------------------  */

Route::get('/redirecionar-rota-nomeada', function(){
    return redirect()->route('id-rota-nomeada'); // Para acessar o id de qualquer rota, podemos utilizar o método route() e informar o id de qualquer rota que queremos
});

// route('id-rota-nomeada'); retorna a rota '/rota-nomeada' dinamicamento, pois ela pode ser altera e esse método receberá

Route::get('/rota-nomeada', function(){ // Rota do navegador
    return 'Essa é uma rota nomeada com um ID';
})->name('id-rota-nomeada'); //Id que identifica essa rota dentro do PHP


/*  ------------------ Redirecionamento de Rota ------------------  */

Route::get('/enviar1', function() {
    return 'Página do envio 1';
});

// Route::get('/enviar2', function(){
//     return redirect('/enviar1'); //Esse método é um help, disponível em todo código. E esse faz redirecionamento de página/rota
// });

/* Outra maneira de redirecionar */

Route::redirect('/enviar2', '/enviar1');

/* Redirecionar para uma view de uma maneira mais fácil */

Route::view('/teste2', 'welcome');


/* -------------- Paramentros na routa --------------------- */

Route::get('produto/{idProduto?}', function($idProduto = ''){
    return "Produtos {$idProduto}";
});

Route::get('/categorias/{paramentro}', function($paramentroUrl){
    return "Esse é o paramentro da url: {$paramentroUrl}";
});

Route::get('/categoria/{flag}/post', function($flag) {
    return "A flag que pegamos no paramentro é essa: {$flag}";
});

/* ------------------ Any e Match ------------------ */

Route::any('/any', function(){
    return 'Recebe todos os tipos de dados';
});

Route::match(['post', 'get'], '/match', function() {
    return 'Receberá apenas os métodos passados no array.';
});


/* ------------------ GET E POST ------------------ */

Route::post('/receber', function() {
    return 'dados recebido';
});

Route::get('/contato', function() {
    return view('contact');
});

Route::get('/quem-somos', function(){
    return view('empresa/about');
});

Route::get('/teste', function () {
    return 'Olá';
});
