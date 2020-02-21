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
Route::post('/usuario/Mudarsenha', 'LoginController@verificarEmail')->name('usuarios.loginLembrarsenha.verificado');
Route::post('/usuario/Mudarsenha/{id}', 'LoginController@updateSenha')->name('usuarios.loginupdatesenha');
//Route::post('/usuario/Mudarsenha/{id}', 'LoginController@updateSenha')->name('usuarios.loginupdatesenha');


Route::get('/index', 'UsuarioController@create')->name('usuarios.cadastro');
Route::post('/usuario/create', 'UsuarioController@store')->name('usuarios.cadastro.store');



Route::group(['middleware'=>['auth']], function(){

    Route::get('/login/sair', 'LoginController@sair')->name('usuarios.login.sair');

    Route::post('/foto/salvar', 'Foto_usuarioController@salvar')->name('usuarios.fotos.salvar');

    Route::get('/home', 'HomeController@index')->name('usuarios.home');
    Route::post('/home/update/{id}', 'HomeController@update')->name('usuarios.home.update');
    Route::post('/home/addTags', 'HomeController@addTags')->name('usuarios.home.addTags');
    Route::delete('home/destroyTags/{id}', 'HomeController@destroyTags')->name('usuarios.home.destroyTags');

    // Post
    Route::post('/home/mensagens_emissor', 'HomeController@mensagensEmissor')->name('usuarios.home.mensagens_emissor');
    Route::delete('/home/mensagens_emissor/{id}/delete', 'HomeController@destroyEmissor');

    // Comentario
    Route::post('/home/mensagens_receptor', 'HomeController@mensagensReceptor')->name('usuarios.home.mensagens_receptor');
    Route::delete('/home/mensagens_receptor/{id}/delete', 'HomeController@destroyReceptor');
    Route::delete('/home/mensagens_emissor/{id}/delete', 'HomeController@destroyEmissor');

    // Route::put('/home/mensagens_receptor/{{$comentar->id}}', 'HomeController@updateReceptor');

    Route::get('/perfil', 'PerfilController@index')->name('usuarios.perfil');
    Route::get('/perfil/create', 'PerfilController@create')->name('usuarios.perfil.create');

    Route::get('/habilidades', 'HabilidadeController@index')->name('usuarios.habilidades');
    Route::get('/habidades/busca', 'HabilidadeController@create')->name('usuarios.habilidades.busca');
    Route::post('/habidades/buscatag', 'HabilidadeController@buscatag')->name('usuarios.habilidades.buscatag');
    Route::get('/habidades/buscapessoa', 'HabilidadeController@buscapessoa')->name('usuarios.habilidades.buscapessoa');
    Route::post('/habidades/buscapessoaconcreta', 'HabilidadeController@buscapessoaconcreta')->name('usuarios.habilidades.buscapessoaconcreta');

    Route::get('/editarCadastro', 'CadastroController@index')->name('usuarios.editarCadastro');
    Route::post('/editarCadastro', 'CadastroController@edit')->name('usuarios.editarCadastro');
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



