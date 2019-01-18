<?php

/** Inicia a sessão caso ela não tenha sido iniciada */
if (!isset($_SESSION)) session_start();

/** Carrega as variáveis de ambiente */
require_once __DIR__ . '/../app/config/_env.php';

/** Instancia a classe Database */
new \App\classes\Database;

/** Rotas */
require_once __DIR__ . '/../app/routing/routes.php';

new App\routing\RouteDispatcher($router);