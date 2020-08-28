<?php



/* Paramentros na routa */

Route::get('produto/{idProduto?}', function($idProduto = ''){
    return "Produtos {$idProduto}";
});

Route::get('/categorias/{paramentro}', function($paramentroUrl){
    return "Esse é o paramentro da url: {$paramentroUrl}";
});

Route::get('/categoria/{flag}/post', function($flag) {
    return "A flag que pegamos no paramentro é essa: {$flag}";
});

/* Any e Match */

Route::any('/any', function(){
    return 'Recebe todos os tipos de dados';
});

Route::match(['post', 'get'], '/match', function() {
    return 'Receberá apenas os métodos passados no array.';
});


/* GET E POST */

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
