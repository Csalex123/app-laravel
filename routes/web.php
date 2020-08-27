<?php


Route::get('/contato', function() {
    return view('contact');
});

Route::get('/quem-somos', function(){
    return view('empresa/about');
});

Route::get('/teste', function () {
    return 'Olá';
});
