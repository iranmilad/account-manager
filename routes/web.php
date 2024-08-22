<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return 'Hello, Successful';
});

Route::post('/test', function () {
    return 'Hello, Successful';
});


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', function () {
    return view('login');
});


Route::get("/settings", function () {
    return view('settings');
});

Route::get("/subscriptions", function () {
    return view('subscriptions');
});

Route::get("/account", function () {
    return view('account');
});

Route::get("/updates", function () {
    return view('updates');
});

Route::get("/issuereporting", function () {
    return view('issuereporting');
});

Route::get("/technicalreporting", function () {
    return view('technicalreporting');
});

Route::get("/topics", function () {
    return view('topics');
});

Route::get("/products", function () {
    return view('products');
});

Route::get("/productscategory", function () {
    return view('productsCategory');
});

Route::get("/messages", function () {
    return view('messages');
});

Route::get("/invoicesmanager", function () {
    return view('invoicesManager');
});

Route::get("/subscribers", function () {
    return view('subscribers');
})->name("subscribers.show");

Route::get("/create-subscribe", function () {
    return view('subscribe');
})->name("create-subscribe.show");

Route::get("/edit-subscribe/{id}", function ($id) {
    return view('subscribe');
})->name("edit-subscribe.show");


// INCOME
Route::get("/incomes", function () {
    return view('incomes');
})->name("incomes.show");

Route::get("/create-income", function () {
    return view('income');
})->name("create-income.show");

Route::get("/edit-income/{id}", function ($id) {
    return view('income');
})->name("edit-income.show");
// INCOME

// TICKET
Route::get("/tickets", function () {
    return view('tickets');
})->name("tickets.show");

Route::get("/ticket/{id}", function ($id) {
    return view('ticket');
})->name("ticket.show");
// TICKET

// SERVERS
Route::get("/servers", function () {
    return view('servers');
})->name("servers.show");

Route::get("/create-server", function () {
    return view('server');
})->name("create-server.show");

Route::get("/edit-server/{id}", function ($id) {
    return view('server');
})->name("edit-server.show");

Route::get("/server-logs", function () {
    return view('server-logs');
})->name("server-logs.show");
// SERVERS

// PACKAGES
Route::get("/packages", function () {
    return view('packages');
})->name("packages.show");

Route::get("/create-package", function () {
    return view('package');
})->name("create-package.show");

Route::get("/edit-package/{id}", function ($id) {
    return view('package');
})->name("edit-package.show");
// PACKAGES

// PACKAGES
Route::get("/calls", function () {
    return view('calls');
})->name("calls.show");

Route::get("/create-call", function () {
    return view('call');
})->name("create-call.show");

Route::get("/edit-call/{id}", function ($id) {
    return view('call');
})->name("edit-call.show");

Route::get("/show-call/{id}", function ($id) {
    return view('call');
})->name("show-call.show");
// PACKAGES


// CURRENT MONTH SERVICES
Route::get("/current-month-services", function () {
    return view('current-month-services');
})->name("current-month-services.show");
// CURRENT MONTH SERVICES


// ADMIN
Route::get("/admins", function () {
    return view('admins');
})->name("admins.show");

Route::get("/create-admin", function () {
    return view('admin');
})->name("create-admin.show");

Route::get("/edit-admin/{id}", function ($id) {
    return view('admin');
})->name("edit-admin.show");
// ADMIN

// INVOICES
Route::get("/invoices", function () {
    return view('invoices');
})->name("invoices.show");

Route::get("/invoice/{id}", function ($id) {
    return view('invoice');
})->name("invoice.show");
// INVOICES