<?php

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'


]);

Route::get('/', function () {
    return view('welcome');
});

//Route::view('/form', 'form');

/*
    Route::verbo_html('URI','Controller@método');

    Passo a passo: Definir rota -> Criar controllador -> Criação demétodo -> Camada view

    Verbo_http[GET, POST, PUT, PATCH, DELETE, OPTIONS];

    GET: Utilizado para obter dados do servidor e não altera o estado do recurso.
         Quando um formulario GET é disparado, os dados ficam presentes na URL
                        Route::get('URI','Callback')

    POST: Utilizado para criação de recurso ou envio de dados ao servidor para validação.
          Os dados ficam no corpo da requisição e não na URL.
                        Route::post('URI','callback')

    PUT: Utilizado para atualização de recurso. O caminho da requisição deve conter o objeto a ser atualizado
         juntamente com todos os parâmetros do objeto para que possa ser feita a ação com sucesso.
         Deve-se usar o Form Method Spoofing (falsificação de verbo) [@method('PUT')]
                        Route::put('URI','Callback');

    PATCH: Utilizado para atualicação PARCIAL do recurso. Tem o mesmo funcionamento no PUT.
           Também trabalha com Form Method Spoofing (Falsificação do verbo) [@method('PUT')]
                        Route::patch('URI','Callback');


    Route::get($uri, $callback);
    Route::post($uri, $callback);
    Route::put($uri, $callback);
    Route::patch($uri, $callback);
    Route::delete($uri, $callback);
    Route::options($uri, $callback);
*/

/*
    GET
        Route::get('/users/1','UserController@index');
        Route::get('/getData','UserController@getData');

    POST
        Route::post('/postData','UserController@postData');


    PUT
        Route::put('/users/1','UserController@testPut');

    ATCH
        Route::patch('/users/1', 'UserController@testPatch');

    PUT/PATCH
        Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');


    DELETE
        Route::delete('/users/1', 'UserController@destroy');


    ANY
        Route::any('/users', 'UserController@any');

 */

 /*

    Route::get('/posts/premium', 'PostController@premium');
    Route::resource('posts', 'PostController')->only(['index', 'show']); Somente index e show
    Route::resource('posts', 'PostController')->except(['destroy']); //Exeto destroy
    Route::get('/posts', 'PostController@index');

 */


//Route::get('/users', 'UserController@show');

Route::get('/users',function(){
    echo "Listagem dos usuários da minha base!";
});

Route::view('/form', 'form');

Route::fallback(function(){
    echo "<h1>Ooops!! Seja muito bem vindo a nessa página 404. Nenhum registro foi encontrado.</h1>";
});

Route::redirect('/users/add', url('/form'),301);

Route::get('/artigos', 'Postcontroller@index')->name('posts.index');
Route::get('/artigos/index', 'Postcontroller@indexRedirect')->name('posts.indexRedirect');
