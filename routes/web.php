<?php

use App\Http\Controllers\Site\BlueEconomyController;
use App\Http\Controllers\Site\HackhatonSpatialStartups;
use Illuminate\Support\Facades\Route;
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


Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('sobre', ['as' => 'site.about', 'uses' => 'Site\AboutController@index']);
Route::get('programa', ['as' => 'site.schedule', 'uses' => 'Site\ScheduleController@index']);
/**speaker */
Route::get('speakers', ['as' => 'site.speaker', 'uses' => 'Site\SpeakerController@index']);
Route::get('speaker/{name}', ['as' => 'site.speaker.show', 'uses' => 'Site\SpeakerController@show']);
/**End speaker */

Route::get('midia', ['as' => 'site.midia', 'uses' => 'Site\MidiaController@index']);
Route::get('informações-uteis', ['as' => 'site.information', 'uses' => 'Site\InformationController@index']);
Route::get('politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);

/** Contact */
Route::get('contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
Route::post('contactos/send', ['as' => 'site.contact.send', 'uses' => 'Site\ContactController@send']);
/** End Contact */

/**hospital */
Route::get('hospitais', ['as' => 'site.hospital', 'uses' => 'Site\HospitalList@index']);
Route::get('hospitais/{name}', ['as' => 'site.hospital.show', 'uses' => 'Site\HospitalList@show']);


/** hotel */
Route::get('hoteis', ['as' => 'site.hotel', 'uses' => 'Site\HotelListController@index']);
Route::get('hoteis/{name}', ['as' => 'site.hotel.show', 'uses' => 'Site\HotelListController@show']);

/**Restaurants */
Route::get('restaurantes', ['as' => 'site.restaurant', 'uses' => 'Site\ListRestaurantController@index']);
Route::get('restaurantes/{name}', ['as' => 'site.restaurant.show', 'uses' => 'Site\ListRestaurantController@show']);

/**rent a car */
Route::get('transportes', ['as' => 'site.laceCar', 'uses' => 'Site\LaceCarController@index']);
Route::get('transportes/{name}', ['as' => 'site.laceCar.show', 'uses' => 'Site\LaceCarController@show']);

/** visto/ */
Route::get('/visto', ['as' => 'site.visa', 'uses' => 'Site\VisaController@index']);





/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';



