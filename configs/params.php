<?php
//Ficher contenant les paramètres de configurations du site


//Création d'une constante contenant la route actuelle
define('ROUTE', request_path());


//Emplacement du dossier qui contient les vues du site
define('VIEWS_DIR', __DIR__ . '/../views');

//define('VIEWS DIR', __DIR__ . '/../views');

// URL du dossier "public" (avec fichiers CSS, JS, images, etc...), servira pour construire les liens dans la partir frontend
define('PUBLIC_PATH', mb_substr($_SERVER['SCRIPT_NAME'], 0, -(mb_strlen(basename(__FILE__)))));


//Paramètres de connexion à la base de données
define('DB_HOST', 'localhost');
define('DB_NAME', 'wikifruit_mvc_poo');
define('DB_USER', 'root');
define('DB_PASSWORD', '');


//define('DB_HOST', 'localhost');
//define('DB_NAME', 'wikifruit_mvc_poo');
//define('DB_USER', 'root');
//define('DB_PASSWORD', '');
