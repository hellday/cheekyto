<?php
/**
 * Created by PhpStorm.
 * User: Terry
 * Date: 11/12/2016
 * Time: 15:21
 */

require_once '../vendor/autoload.php';

// init Silex app
$app = new Silex\Application();

//configure database connection
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'cheekyto',
        'user' => 'root',
        'password' => '',
        'charset' => 'utf8',
    ),
));

// AFFICHER TOUT : Chemin pour "/inscriptions" URI: charge les inscriptions au format JSON
$app->get('/inscriptions', function () use ($app) {
    $sql = "SELECT * FROM inscriptions";
    $inscriptions = $app['db']->fetchAll($sql);

    if (empty($inscriptions)) {
        $app ->abort(204);
    } else {
        return $app->json($inscriptions, 200);
    }
});

// AFFICHER VALIDE : Chemin pour "/inscriptions/validated" URI: charge les inscriptions au format JSON
$app->get('/inscriptions/validated', function () use ($app) {
    $sql = "SELECT * FROM inscriptions WHERE status = 'validated'";
    $inscriptions = $app['db']->fetchAll($sql);

    if (empty($inscriptions)) {
        $app ->abort(204);
    } else {
        return $app->json($inscriptions, 200);
    }
});

// AFFICHER EN ATTENTE : Chemin pour "/inscriptions/wait" URI: charge les inscriptions au format JSON
$app->get('/inscriptions/wait', function () use ($app) {
    $sql = "SELECT * FROM inscriptions WHERE status = 'wait'";
    $inscriptions = $app['db']->fetchAll($sql);

    if (empty($inscriptions)) {
        $app ->abort(204);
    } else {
        return $app->json($inscriptions, 200);
    }
});

// AFFICHER REFUSE : Chemin pour "/inscriptions/refused" URI: charge les inscriptions au format JSON
$app->get('/inscriptions/refused', function () use ($app) {
    $sql = "SELECT * FROM inscriptions WHERE status = 'refused'";
    $inscriptions = $app['db']->fetchAll($sql);

    if (empty($inscriptions)) {
        $app ->abort(204);
    } else {
        return $app->json($inscriptions, 200);
    }

});

// AFFICHER ID
$app->get('/inscriptions/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM inscriptions WHERE id = ?";
    $inscription = $app['db']->fetchAssoc($sql, array((int) $id));

    if (empty($inscription)) {
        $app ->abort(204);
    } else {
        return $app->json($inscription,200);
    }

})->assert('id', '\d+');



// VALIDER ID
$app->put('/inscriptions/valider/{id}', function ($id) use ($app) {
    $sql = "UPDATE inscriptions SET status = 'validated' WHERE id = ?";
    $inscription = $app['db']->executeUpdate($sql, array((int) $id));

    if (empty($inscription)) {
        $app ->abort(204);
    } else {
        return $app->json("L'inscription  $id a été validé avec succès.",200);
    }


})->assert('id', '\d+');

// REFUSER ID
$app->put('/inscriptions/refuser/{id}', function ($id) use ($app) {
    $sql = "UPDATE inscriptions SET status = 'refused' WHERE id = ?";
    $inscription = $app['db']->executeUpdate($sql, array((int) $id));

    if (empty($inscription)) {
        $app ->abort(204);
    } else {
        return $app->json("L'inscription  $id a été refusé avec succès.",200);
    }

})->assert('id', '\d+');


// AJOUTER INSCRIPTION
$app->post('/inscriptions/add', function (\Symfony\Component\HttpFoundation\Request $request) use ($app) {
    $inscriptions = array(
        'civilité' => $request->get('civilité'),
        'date_naissance' => $request->get('date_naissance'),
        'nom' => $request->get('nom'),
        'prénom' => $request->get('prénom'),
        'email' => $request->get('email'),
        'adresse' => $request->get('adresse'),
        'status' => "wait"
    );

    $app['db']->insert('inscriptions', $inscriptions);
    $new_ins = $app->json($inscriptions);

    return "Inscription " . $app['db']->lastinsertId() . " effectuée avec succès ! \n\n $new_ins";

});

// Chemin par défaut
$app->get('/', function () {
    return "Liste des inscriptions API REST:
  - /inscriptions - retourne la liste des inscriptions;\n
  - /inscriptions/{id} - retourne une inscription;\n
  - /inscriptions/validated - retourne les inscriptions validées;\n
  - /inscriptions/refused - retourne les inscriptions refusées;\n
  - /inscriptions/wait - retourne les inscriptions en attente;\n\n
  
  - /inscriptions/valider/{id} - valide une inscription;\n
  - /inscriptions/refuser/{id} - refuse une inscription;\n\n
  
  - /inscriptions/add/{id} - ajouter une inscription;\n"


    ;
});

$app->run();