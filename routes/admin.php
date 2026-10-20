<?php

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

/* Grupo de Rotas Autenticadas */
Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {
        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);
        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);;
        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */


        /* speaker */
        Route::get('admin/speaker/index', ['as' => 'admin.speaker.index', 'uses' => 'Admin\SpeakerController@index']);
        Route::get('admin/speaker/show/{id}', ['as' => 'admin.speaker.show', 'uses' => 'Admin\SpeakerController@show']);
        Route::get('admin/speaker/create', ['as' => 'admin.speaker.create', 'uses' => 'Admin\SpeakerController@create']);
        Route::post('admin/speaker/store', ['as' => 'admin.speaker.store', 'uses' => 'Admin\SpeakerController@store']);
        Route::get('admin/speaker/edit/{id}', ['as' => 'admin.speaker.edit', 'uses' => 'Admin\SpeakerController@edit']);
        Route::put('admin/speaker/update/{id}', ['as' => 'admin.speaker.update', 'uses' => 'Admin\SpeakerController@update']);
        Route::get('admin/speaker/delete/{id}', ['as' => 'admin.speaker.delete', 'uses' => 'Admin\SpeakerController@destroy']);
        Route::get('admin/speaker/list', ['as' => 'admin.speaker.list', 'uses' => 'Admin\SpeakerController@list']);


        Route::get('admin/schedule/index', ['as' => 'admin.schedule.index', 'uses' => 'Admin\ScheduleController@list']);
        Route::get('admin/schedule/show/{id}', ['as' => 'admin.schedule.show', 'uses' => 'Admin\ScheduleController@show']);
        Route::get('admin/schedule/create', ['as' => 'admin.schedule.create', 'uses' => 'Admin\ScheduleController@create']);
        Route::post('admin/schedule/store', ['as' => 'admin.schedule.store', 'uses' => 'Admin\ScheduleController@store']);
        Route::get('admin/schedule/edit/{id}', ['as' => 'admin.schedule.edit', 'uses' => 'Admin\ScheduleController@edit']);
        Route::put('admin/schedule/update/{id}', ['as' => 'admin.schedule.update', 'uses' => 'Admin\ScheduleController@update']);
        Route::get('admin/schedule/delete/{id}', ['as' => 'admin.schedule.delete', 'uses' => 'Admin\ScheduleController@destroy']);


        /* hotelList */
        Route::get('admin/Lista-de-hoteis/index', ['as' => 'admin.hotelList.index', 'uses' => 'Admin\HotelListController@index']);
        Route::get('admin/Lista-de-hoteis/show/{id}', ['as' => 'admin.hotelList.show', 'uses' => 'Admin\HotelListController@show']);
        Route::get('admin/Lista-de-hoteis/create', ['as' => 'admin.hotelList.create', 'uses' => 'Admin\HotelListController@create']);
        Route::post('admin/Lista-de-hoteis/store', ['as' => 'admin.hotelList.store', 'uses' => 'Admin\HotelListController@store']);
        Route::get('admin/Lista-de-hoteis/edit/{id}', ['as' => 'admin.hotelList.edit', 'uses' => 'Admin\HotelListController@edit']);
        Route::put('admin/Lista-de-hoteis/update/{id}', ['as' => 'admin.hotelList.update', 'uses' => 'Admin\HotelListController@update']);
        Route::get('admin/Lista-de-hoteis/delete/{id}', ['as' => 'admin.hotelList.delete', 'uses' => 'Admin\HotelListController@destroy']);
        /* end hotelList */

          /* imagehostelList */
            Route::get('admin/imageGalleryHotel/create/{id}', ['as' => 'admin.imagehostelList.create', 'uses' => 'Admin\ImageHotelController@create']);
            Route::post('admin/imageGalleryHotel/store/{id}', ['as' => 'admin.imagehostelList.store', 'uses' => 'Admin\ImageHotelController@store']);
            Route::get('admin/imageGalleryHotel/delete/{id}', ['as' => 'admin.imagehostelList.delete', 'uses' => 'Admin\ImageHotelController@destroy']);
            /* End imagehostelList */


             /* hotelList */
        Route::get('admin/Lista-de-restaurantes/index', ['as' => 'admin.listRestaurants.index', 'uses' => 'Admin\ListRestaurantController@index']);
        Route::get('admin/Lista-de-restaurantes/show/{id}', ['as' => 'admin.listRestaurants.show', 'uses' => 'Admin\ListRestaurantController@show']);
        Route::get('admin/Lista-de-restaurantes/create', ['as' => 'admin.listRestaurants.create', 'uses' => 'Admin\ListRestaurantController@create']);
        Route::post('admin/Lista-de-restaurantes/store', ['as' => 'admin.listRestaurants.store', 'uses' => 'Admin\ListRestaurantController@store']);
        Route::get('admin/Lista-de-restaurantes/edit/{id}', ['as' => 'admin.listRestaurants.edit', 'uses' => 'Admin\ListRestaurantController@edit']);
        Route::put('admin/Lista-de-restaurantes/update/{id}', ['as' => 'admin.listRestaurants.update', 'uses' => 'Admin\ListRestaurantController@update']);
        Route::get('admin/Lista-de-restaurantes/delete/{id}', ['as' => 'admin.listRestaurants.delete', 'uses' => 'Admin\ListRestaurantController@destroy']);
        /* end hotelList */

            /* imagehostelList */
        Route::get('admin/imageGalleryRestaraunt/create/{id}', ['as' => 'admin.imageGalleryRestaraunt.create', 'uses' => 'Admin\ImageRestaurantController@create']);
        Route::post('admin/imageGalleryRestaraunt/store/{id}', ['as' => 'admin.imageGalleryRestaraunt.store', 'uses' => 'Admin\ImageRestaurantController@store']);
        Route::get('admin/imageGalleryRestaraunt/delete/{id}', ['as' => 'admin.imageGalleryRestaraunt.delete', 'uses' => 'Admin\ImageRestaurantController@destroy']);
        /* End imagehostelList */


          /* hospital */
        Route::get('admin/hospital/index', ['as' => 'admin.hospital.index', 'uses' => 'Admin\HospitalController@index']);
        Route::get('admin/hospital/show/{id}', ['as' => 'admin.hospital.show', 'uses' => 'Admin\HospitalController@show']);
        Route::get('admin/hospital/create', ['as' => 'admin.hospital.create', 'uses' => 'Admin\HospitalController@create']);
        Route::post('admin/hospital/store', ['as' => 'admin.hospital.store', 'uses' => 'Admin\HospitalController@store']);
        Route::get('admin/hospital/edit/{id}', ['as' => 'admin.hospital.edit', 'uses' => 'Admin\HospitalController@edit']);
        Route::put('admin/hospital/update/{id}', ['as' => 'admin.hospital.update', 'uses' => 'Admin\HospitalController@update']);
        Route::get('admin/hospital/delete/{id}', ['as' => 'admin.hospital.delete', 'uses' => 'Admin\HospitalController@destroy']);
        /* end hospital */

        /* imagehostelList */
        Route::get('admin/imageGalleryHostital/create/{id}', ['as' => 'admin.imageGalleryHostital.create', 'uses' => 'Admin\ImageHopitalController@create']);
        Route::post('admin/imageGalleryHostital/store/{id}', ['as' => 'admin.imageGalleryHostital.store', 'uses' => 'Admin\ImageHopitalController@store']);
        Route::get('admin/imageGalleryHostital/delete/{id}', ['as' => 'admin.imageGalleryHostital.delete', 'uses' => 'Admin\ImageHopitalController@destroy']);
        /* End imagehostelList */

        /* HospitalDocuments */
        Route::get('admin/informacoes-hospital/show', ['as' => 'admin.hospitalDocuments.show', 'uses' => 'Admin\HospitalDocumentController@show']);
        Route::get('admin/informacoes-hospital/edit/{id}', ['as' => 'admin.hospitalDocuments.edit', 'uses' => 'Admin\HospitalDocumentController@edit']);
        Route::put('admin/informacoes-hospital/update/{id}', ['as' => 'admin.hospitalDocuments.update', 'uses' => 'Admin\HospitalDocumentController@update']);
        /* end HospitalDocuments */
});

});
