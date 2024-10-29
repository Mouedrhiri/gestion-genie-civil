<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/dashboard-ingenieur', function () {
    return view('ingenieur/dashboard');
});
Route::get('/client-ingenieur', function () {
    return view('ingenieur/client');
});
Route::get('/demande_de_projet-ingenieur', function () {
    return view('ingenieur/demand');
});
Route::get('/projet-ingenieur', function () {
    return view('ingenieur/projet');
});
Route::get('/employeur-ingenieur', function () {
    return view('ingenieur/employe');
});
Route::get('/rendez-vous-ingeneiur', function () {
    return view('ingenieur/appointement');
});
Route::get('/facture-ingenieur', function () {
    return view('ingenieur/facture');
});
Route::get('/matriel-ingenieur', function () {
    return view('admin/matriel');
});
Route::get('/notifications-ingenieur', function () {
    return view('ingenieur/notification');
});
Route::get('/tache-ingenieur', function () {
    return view('ingenieur/tache');
});
Route::get('/users', function () {
    return view('admin/user');
});
Route::get('/dashboard-gerant', function () {
    return view('gerant/dashboard');
});

Route::get('/client-gerant', function () {
    return view('gerant/client');
});
Route::get('/appointement-gerant', function () {
    return view('gerant/appointement');
});
Route::get('/demande_de_projet-gerant', function () {
    return view('gerant/demand');
});

Route::get('/projet-gerant', function () {
    return view('gerant/projet');
});

Route::get('/employeur-gerant', function () {
    return view('gerant/employe');
});

Route::get('/facture-gerant', function () {
    return view('gerant/facture');
});

Route::get('/matriel-gerant', function () {
    return view('gerant/matriel');
});

Route::get('/notifications-gerant', function () {
    return view('gerant/notification');
});

Route::get('/tache-gerant', function () {
    return view('gerant/tache');
});

Route::get('/users-gerant', function () {
    return view('gerant/user');
});

Route::get('/dashboard-technicien', function () {
    return view('technicien/dashboard');
});

Route::get('/appointement-technicien', function () {
    return view('client/appointement');
});

Route::get('/client-technicien', function () {
    return view('technicien/client');
});

Route::get('/demande_de_projet-technicien', function () {
    return view('technicien/demand');
});

Route::get('/projet-technicien', function () {
    return view('technicien/projet');
});

Route::get('/employeur-technicien', function () {
    return view('technicien/employe');
});

Route::get('/facture-technicien', function () {
    return view('technicien/facture');
});

Route::get('/materiel-technicien', function () {
    return view('technicien/matriel');
});

Route::get('/notifications-technicien', function () {
    return view('technicien/notification');
});

Route::get('/tache-technicien', function () {
    return view('technicien/tache');
});

Route::get('/users-technicien', function () {
    return view('technicien/user');
});
