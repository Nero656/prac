<?php
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/route.php';
require_once 'core/settings.php';
session_start();
Route::start(); // запускаем маршрутизатор
