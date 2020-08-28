<?php

/* ------------------  Rotas nomeadas ------------------  */

Route::get('/redirecionar-rota-nomeada', function(){
    return redirect()->route('id-rota-nomeada'); // Para acessar o id de qualquer rota, podemos utilizar o método route() e informar o id de qualquer rota que queremos
});

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
