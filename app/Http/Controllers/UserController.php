<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function index()
    {
        return "<h1>Listagem do usuario com o codigo 1</h1>";
    }

    public function getData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de GET</h1>";
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return "<h1>Disparou ação de POST</h1>";
    }
    public function testPut(Request $request)
    {
        echo "<h1>Usuário da edição é o de código</h1>";
        var_dump($request);
        return "<h1>Disparou ação de PUT</h1>";
    }
    public function testPatch(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 2</h1>";
        var_dump($request);
        return "<h1>Disparou ação de Patch </h1>";
    }
    public function testMatch(Request $request)
    {
        echo "<h1>Disparou ação de PUT/PATCH </h1>";
        echo"<h1>Usuário da edição é o de código 2</h1>";
        var_dump($request);
    }

    public function destroy()
    {

        return "<h1>Disparou ação de DELETE para o registro 1</h1>";
    }
    public function any()
    {

        return "<h1>Qualquer verbalização é aceita</h1>";
    }
    public function userComments($id, $comment = null, Request $request){
        echo "Controller: User Método: userComments";
        var_dump($id, $comment, $request);
    }
    public function inspect()
    {
            $route = Route::current();
            $name  = Route::currentRouteName();
            $action = Route::currentRouteAction();

            var_dump ($route, $name, $action);

    }
}
