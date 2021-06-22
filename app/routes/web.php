<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProduitController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
     Route::post('produit/ajout',[ProduitController::class, 'store'])->name('ajoutProduit');

    });
	Route::get('stock-list', function () {
		
		$stock=DB::table('stock')
		->join('produits', 'produits.id', '=', 'stock.produit')
		->join('etablissements', 'etablissements.id', '=', 'stock.partenaire')
		->where('stock.resteProduit', '>', 0)
		->get();
		$magasins=DB::table('magasins')->get();
		return view('pages.stock_list')
          ->with(compact('magasins'))
		  ->with(compact('stock'));

	})->name('stock');

	Route::get('produit', function () {
		$produits=DB::table('produits')->get();
		return view('pages.produit',compact('produits'));
		
	})->name('produit');

	Route::get('historique', function () {
		return view('pages.historique');
	})->name('historique');

	Route::get('entree', function () {
		return view('pages.entree');
	})->name('entree');

	Route::get('sortie', function () {
		return view('pages.sortie');
	})->name('sortie');
	

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

