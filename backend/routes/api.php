<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//=========================
// UNAUTHENTICATED (GUEST)
//=========================
Route::group(["middleware" => ["unauthenticated:workshop"]], function(){
    Route::post("workshop/login","Auth\LoginController@login")->name("workshop.login");
});

Route::group(["middleware" => ["unauthenticated:provider"]], function(){
    Route::post("provider/login","Auth\LoginControllerProvider@login")->name("provider.login");
});

//========================
// Provider
//========================
Route::group(["middleware" => ["authenticated:provider,null"]],function(){
    Route::get("provider/tickets", "ProviderController@listTickets");
    Route::get("provider/drivers", "ProviderController@listDrivers");
    Route::get("provider/reasons", "ProviderController@listReasons");
    Route::get("provider/tickets/create", "ProviderController@createTicket");
    Route::get("provider/tickets/remove/{id}", "ProviderController@removeTicket");
});

//========================
// workshop
//========================
Route::group(["middleware" => ["authenticated:workshop,null"]],function(){
    Route::get("workshop/tickets","WorkshopController@listTickets");
    Route::get("workshop/tickets/resolve/{id}","WorkshopController@resolve");
});

//=========================
// ANY AUTHENTICATED 
//=========================
Route::group(["middleware" => ["authenticated:all,null"]],function(){
    Route::get('logout',"Auth\LogoutController@logout");
});