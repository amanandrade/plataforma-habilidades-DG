<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'LoginController@index')->name('usuarios.login');
Route::post('/login/entrar', 'LoginController@entrar')->name('usuarios.login.entrar');

Route::get('/usuario/Lembrarsenha', 'LoginController@Lembrarsenha')->name('usuarios.loginLembrarsenha');
//Route::post('/usuario/Mudarsenha', 'UsuarioController@verificarEmail')->name('usuarios.loginLembrarsenha.salvar');
Route::get('/usuario/Mudarsenha', 'LoginController@verificarEmail')->name('usuarios.loginMudarsenha');


Route::get('/index', 'UsuarioController@create')->name('usuarios.cadastro');
Route::post('/usuario/create', 'UsuarioController@store')->name('usuarios.cadastro.store');



Route::group(['middleware'=>['auth']], function(){
    
    Route::get('/login/sair', 'LoginController@sair')->name('usuarios.login.sair');
    
    Route::post('/foto/salvar', 'Foto_usuarioController@salvar')->name('usuarios.fotos.salvar');

    Route::get('/home', 'HomeController@index')->name('usuarios.home');
    Route::post('/home/update/{id}', 'HomeController@update')->name('usuarios.home.update');
    
    Route::get('/perfil', 'PerfilController@index')->name('usuarios.perfil');
    Route::get('/perfil/create', 'PerfilController@create')->name('usuarios.perfil.create');

    Route::get('/habilidades', 'HabilidadeController@index')->name('usuarios.habilidades');
    Route::get('/habidades/busca', 'HabilidadeController@create')->name('usuarios.habilidades.busca');
});






// Route::get('/model', function(){
//     $user= \App\User::find(1);
//     $user->nome='Domlife';
//     $user->save();

//     $user=\App\User::all();

//     return $user;
// });

Route::get('/model', function(){
   $user= \App\User::create([
       'nome'=> 'Antonio Claudio',
       'email'=>'antonio@hotmail.com',
       'password'=>bcrypt('123456'),
       'telefone'=>'942839268',
       'genero'=>'masculino',
       'nascimento'=>'1985-04-04',
       'curso_id'=>'1',
       'status_id'=>'1',
   ]);
   return \App\User::all();
});

