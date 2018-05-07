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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('escalas', 'EscalasController');

Route::resource('direcciones', 'DireccionesController');

Route::resource('materiaLesApoyoAcuaticos', 'MateriaLesApoyoAcuaticoController');

Route::resource('personajesBrindarAyudas', 'PersonajesBrindarAyudaController');

Route::resource('personajesIniciaPrimerosAuxes', 'PersonajesIniciaPrimerosAuxController');

Route::resource('personajesParticipaPimerosAuxes', 'PersonajesParticipaPimerosAuxController');

Route::resource('actividadesSujetos', 'ActividadesSujetoController');

Route::resource('anchurasPlayas', 'AnchurasPlayasController');

Route::resource('avisosPreventivos', 'AvisosPreventivosController');

Route::resource('arenas', 'ArenasController');

Route::resource('consecuenciasSuccesos', 'ConsecuenciasSuccesosController');

Route::resource('distanciaDespAcuaticos', 'DistanciaDespAcuaticoController');

Route::resource('distanciaDespTerrestres', 'DistanciaDespTerrestreController');

Route::resource('gradoOcupacions', 'GradoOcupacionController');

Route::resource('gradoUrbanizacions', 'GradoUrbanizacionController');

Route::resource('listaServicios', 'ListaServiciosController');

Route::resource('paises', 'PaisesController');

Route::resource('percepcionSucesos', 'PercepcionSucesosController');

Route::resource('riesgos', 'RiesgosController');

Route::resource('rolesUsuarios', 'RolesUsuarioController');

Route::resource('sucesos', 'SucesosController');

Route::resource('tipologiaRiesgos', 'TipologiaRiesgosController');

Route::resource('tipologiaSucesos', 'TipologiaSucesosController');

Route::resource('playas', 'playasController');

Route::resource('serviciosPlayas', 'ServiciosPlayaController');

Route::resource('avisosPlayas', 'AvisosPlayaController');

Route::resource('usuariosPlayas', 'UsuariosPlayasController');

Route::resource('sucesosPlayas', 'SucesosPlayasController');

Route::resource('riesgosPlayas', 'RiesgosPlayaController');

Route::resource('situacionesRiesgos', 'SituacionesRiesgosController');

Route::resource('rutaSujetoPlayas', 'RutaSujetoPlayaController');

Route::resource('poligonos', 'PoligonosController');