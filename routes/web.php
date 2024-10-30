<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/app-chat-box', function () {
    return view('app-chat-box');
});

Route::get('/app-emailbox', function () {
    return view('app-emailbox');
});

Route::get('/app-emailread', function () {
    return view('app-emailread');
});

Route::get('/app-file-manager', function () {
    return view('app-file-manager');
});

Route::get('/app-fullcalender', function () {
    return view('app-fullcalender');
});

Route::get('/app-invoice', function () {
    return view('app-invoice');
});

Route::get('/app-to-do', function () {
    return view('app-to-do');
});

Route::get('/auth-basic-forgot-password', function () {
    return view('auth-basic-forgot-password');
});

Route::get('/auth-basic-login', function () {
    return view('auth-basic-login');
});

Route::get('/auth-basic-register', function () {
    return view('auth-basic-register');
});

Route::get('/auth-basic-reset-password', function () {
    return view('auth-basic-reset-password');
});

Route::get('/auth-boxed-forgot-password', function () {
    return view('auth-boxed-forgot-password');
});

Route::get('/auth-boxed-login', function () {
    return view('auth-boxed-login');
});

Route::get('/auth-boxed-register', function () {
    return view('auth-boxed-register');
});

Route::get('/auth-boxed-reset-password', function () {
    return view('auth-boxed-reset-password');
});

Route::get('/auth-cover-forgot-password', function () {
    return view('auth-cover-forgot-password');
});

Route::get('/auth-cover-login', function () {
    return view('auth-cover-login');
});

Route::get('/auth-cover-register', function () {
    return view('auth-cover-register');
});

Route::get('/auth-cover-reset-password', function () {
    return view('auth-cover-reset-password');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/charts-apex-chart', function () {
    return view('charts-apex-chart');
});

Route::get('/charts-chartjs', function () {
    return view('charts-chartjs');
});

Route::get('/component-accordions', function () {
    return view('component-accordions');
});

Route::get('/component-alerts', function () {
    return view('component-alerts');
});

Route::get('/component-avtars-chips', function () {
    return view('component-avtars-chips');
});

Route::get('/component-badges', function () {
    return view('component-badges');
});

Route::get('/component-buttons', function () {
    return view('component-buttons');
});

Route::get('/component-cards-advance', function () {
    return view('component-cards-advance');
});

Route::get('/component-cards-basic', function () {
    return view('component-cards-basic');
});

Route::get('/component-cards-contact', function () {
    return view('component-cards-contact');
});

Route::get('/component-carousels', function () {
    return view('component-carousels');
});

Route::get('/component-media-object', function () {
    return view('component-media-object');
});

Route::get('/component-modals', function () {
    return view('component-modals');
});

Route::get('/component-navbar', function () {
    return view('component-navbar');
});

Route::get('/component-navs-tabs', function () {
    return view('component-navs-tabs');
});

Route::get('/component-notifications', function () {
    return view('component-notifications');
});

Route::get('/component-paginations', function () {
    return view('component-paginations');
});

Route::get('/component-popovers-tooltips', function () {
    return view('component-popovers-tooltips');
});

Route::get('/component-progress-bars', function () {
    return view('component-progress-bars');
});

Route::get('/component-spinners', function () {
    return view('component-spinners');
});

Route::get('/component-text-utilities', function () {
    return view('component-text-utilities');
});

Route::get('/component-typography', function () {
    return view('component-typography');
});

Route::get('/ecommerce-add-product', function () {
    return view('ecommerce-add-product');
});

Route::get('/ecommerce-customer-details', function () {
    return view('ecommerce-customer-details');
});

Route::get('/ecommerce-customers', function () {
    return view('ecommerce-customers');
});

Route::get('/ecommerce-order-details', function () {
    return view('ecommerce-order-details');
});

Route::get('/ecommerce-orders', function () {
    return view('ecommerce-orders');
});

Route::get('/ecommerce-products', function () {
    return view('ecommerce-products');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/form-date-time-pickes', function () {
    return view('form-date-time-pickes');
});

Route::get('/form-elements', function () {
    return view('form-elements');
});

Route::get('/form-file-upload', function () {
    return view('form-file-upload');
});

Route::get('/form-input-group', function () {
    return view('form-input-group');
});

Route::get('/form-layouts', function () {
    return view('form-layouts');
});

Route::get('/form-radios-and-checkboxes', function () {
    return view('form-radios-and-checkboxes');
});

Route::get('/form-repeater', function () {
    return view('form-repeater');
});

Route::get('/form-select2', function () {
    return view('form-select2');
});

Route::get('/form-validations', function () {
    return view('form-validations');
});

Route::get('/form-wizard', function () {
    return view('form-wizard');
});

Route::get('/icons-boxicons', function () {
    return view('icons-boxicons');
});

Route::get('/icons-feather-icons', function () {
    return view('icons-feather-icons');
});

Route::get('/icons-line-icons', function () {
    return view('icons-line-icons');
});

Route::get('/index-dark', function () {
    return view('index-dark');
});

Route::get('/index-light', function () {
    return view('index-light');
});

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/map-google-maps', function () {
    return view('map-google-maps');
});

Route::get('/map-vector-maps', function () {
    return view('map-vector-maps');
});

Route::get('/pages-coming-soon', function () {
    return view('pages-coming-soon');
});

Route::get('/pages-error-403', function () {
    return view('pages-error-403');
});

Route::get('/pages-error-404', function () {
    return view('pages-error-404');
});

Route::get('/pages-error-505', function () {
    return view('pages-error-505');
});

Route::get('/pages-starter-page', function () {
    return view('pages-starter-page');
});

Route::get('/pricing-table', function () {
    return view('pricing-table');
});

Route::get('/table-basic-table', function () {
    return view('table-basic-table');
});

Route::get('/table-datatable', function () {
    return view('table-datatable');
});

Route::get('/timeline', function () {
    return view('timeline');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/widgets-data', function () {
    return view('widgets-data');
});

Route::get('/widgets-static', function () {
    return view('widgets-static');
});
