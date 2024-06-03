<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

use App\Http\Controllers\FiliereController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Secretaire.index');
}) -> name ('secretaire.index');
//module
Route::get('/module', function () {
    return view('Secretaire.module');
})-> name ('secretaire.module');
//dut
Route::get('/DUT', function () {
    return view('Secretaire.DUT');
}) -> name ('secretaire.dut');
//module
Route::get('/LP', function () {
    return view('Secretaire.LP');
}) -> name ('secretaire.lp');
//module
Route::get('/MASTER', function () {
    return view('Secretaire.MASTER');
})-> name ('secretaire.master');
//salle
Route::get('/Salle', function () {
    return view('Secretaire.Salle');
})-> name ('secretaire.salle');


Route::get('/infoMod', function () {
    return view('Secretaire.infoMod');
})->name('infomod');

route::get('/filiere',[FiliereController::class,'index'])-> name ('secretaire.filiere');
//filiere
// Route::get('/filiere', function () {
//     return view('Secretaire.Filiere');
// })
//Enseignant
Route::get('/Enseignant', function () {
    return view('Secretaire.enseignant');
})-> name ('secretaire.enseignant');
//infoEnseignant
/*
Route::get('/InfoEnseignant', function () {
    return view('Secretaire.InfoEnseignant');
})-> name ('secretaire.infoenseignant');
*/
//DispoEnseignant  
Route::get('/DispoEnseignant', function () {
    return view('Secretaire.DispoEnseignant');
})-> name ('secretaire.dispoenseignant');
//login
Route::get('/login', function () {
    return view('Secretaire.login');
})-> name ('secretaire.login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function () {
    'secretaire.index';
});


// (Optional) Add route for updating room assignments (if your backend supports it)
// Route::post('/api/salles/assignments', [SalleDispoController::class, 'updateRoomAssignment']);

use App\Http\Controllers\GroupeController;

Route::get('/filieres/{idDepartement}', [FiliereController::class, 'getFilieresByDepartment']);
Route::post('/groups', [GroupeController::class, 'store']);


Route::get('/get-salle-options', 'SalleController@getSalleOptions');




use App\Http\Controllers\SalleDispoController;
/*
Route::get('/', function () {
    return view('Salle');
});
Route::view('/salle', 'Salle')->name('salle.view');

*/


/*Route::post('/SalleDispoResult', [SalleDispoController::class, 'checkDisponibilite'])->name('secretaire.SalleDispoResult');
Route::view('/SalleDispoResult', 'SalleDispoResult');*/
Route::post('/Salle/SalleDispoResult', [SalleDispoController::class, 'checkDisponibilite'])->name('Salle.SalleDispoResult');
Route::view('/SalleDispoResult', 'SalleDispoResult');

//infoenseignant 
/*
use App\Http\Controllers\InfoPrController;
use App\Http\Controllers\ProfesseurController;


Route::middleware(['auth'])->group(function () {
    Route::get('/InfoEnseignant', [ProfesseurController::class, 'index'])->name('secretaire.infoenseignant');

    Route::get('/api/professeurs/secretaire/{secretaireId}', [ProfesseurController::class, 'getProfesseursBySecretaire']);
    Route::get('/api/professeurs/details/secretaire/{secretaireId}', [ProfesseurController::class, 'getProfesseurDetailsBySecretaire']);
});
*/
use App\Http\Controllers\ProfesseurController;
Route::middleware(['auth'])->group(function () {
    Route::get('/InfoEnseignant', [ProfesseurController::class, 'index'])->name('secretaire.infoenseignant');

    Route::get('/api/professeurs/secretaire/{secretaireId}', [ProfesseurController::class, 'getProfesseursBySecretaire']);
    Route::get('/api/professeurs/details/secretaire/{secretaireId}', [ProfesseurController::class, 'getProfesseurDetailsBySecretaire']);
     
    
});


use App\Http\Controllers\SemestreController;

// Route::get('/Filiere', [FilliereController::class, 'getFillieres']);
// Route::get('/Filiere', [SemestreController::class, 'getSemestres']);