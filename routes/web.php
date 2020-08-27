<?php


Route::any('/any', function(){
    return 'Recebe todos os tipos de dados';
});

Route::match(['post', 'get'], '/match', function() {
    return 'Receberá apenas os métodos passados no array.';
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
