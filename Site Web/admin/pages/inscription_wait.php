<?php
include "verification.php";

try {
    $bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->query('SELECT * FROM inscriptions WHERE status = "wait"');



//On récupère l'ID de l'inscription à valider
if ((isset($_GET["id"]) && !empty($_GET["id"])) ) {

    $reponse = $bdd->prepare('SELECT * FROM inscriptions WHERE id = ? ');
    $reponse->execute(array($_GET["id"]));

    //On vérifie que cet id existe
    if($donnees = $reponse->fetch()) {

        $reqsql = $bdd->prepare('UPDATE inscriptions SET status = :status WHERE id = :id');
        $reqsql->execute(array(
            'status' => "validated",
            'id' => $_GET["id"]
        ));

        header("Location: inscription_wait.php?val");

    }
}

//On récupère l'ID de l'inscription à refuser
if ((isset($_GET["id2"]) && !empty($_GET["id2"])) ) {

    $reponse = $bdd->prepare('SELECT * FROM inscriptions WHERE id = ? ');
    $reponse->execute(array($_GET["id2"]));

    //On vérifie que cet id existe
    if($donnees = $reponse->fetch()) {

        $reqsql = $bdd->prepare('UPDATE inscriptions SET status = :status WHERE id = :id');
        $reqsql->execute(array(
            'status' => "refused",
            'id' => $_GET["id2"]
        ));

        header("Location: inscription_wait.php?ref");

    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Cheekyto</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <div id="wrapper">

        <?php include "nav.php"; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inscriptions en attente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Inscriptions à valider
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Civilité</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Date de naissance</th>
                                        <th>Email</th>
                                        <th>Adresse</th>
                                        <th>Valider</th>
                                        <th>Refuser</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                /* Remplissage du tableau via les informations de la BDD */
                                while ($donnees = $req->fetch())
                                {
                                    ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $donnees['civilité']; ?></td>
                                        <td><?php echo $donnees['nom']; ?></td>
                                        <td><?php echo $donnees['prénom']; ?></td>
                                        <td><?php echo $donnees['date_naissance']; ?></td>
                                        <td><?php echo $donnees['email']; ?></td>
                                        <td><?php echo $donnees['adresse']; ?></td>
                                        <td class="text-center"><a href="inscription_wait.php?id=<?php echo $donnees['id']; ?>"><button type="button" class="btn btn-default btn-circle" ><i class="fa fa-check"></i></button></a></td>
                                        <td class="text-center"><a href="inscription_wait.php?id2=<?php echo $donnees['id']; ?>"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></button></a></td>

                                    </tr>
                                    <?php
                                }


                                ?>
                                </tbody>
                            </table>

                            <!--Popup validation-->
                            <?php if (isset($_GET["val"])) { ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Inscription validé</h4>
                                            </div>
                                            <div class="modal-body">
                                                L'inscription en attente a bien été validé !
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            <?php } ?>

                            <!--Popup refusé-->
                            <?php if (isset($_GET["ref"])) { ?>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Inscription refusé</h4>
                                            </div>
                                            <div class="modal-body">
                                                L'inscription en attente a bien été refusé.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            <?php } ?>


                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true,
                "language": {
                    "lengthMenu": "Afficher _MENU_ résultats par page",
                    "zeroRecords": "Aucun correspondance.",
                    "info": "Page _PAGE_ sur _PAGES_",
                    "infoEmpty": "Aucune données disponibles",
                    "infoFiltered": "(sur _MAX_ au total)",
                    "oPaginate": {
                        "sFirst":      "Premier",
                        "sPrevious":   "Précédent",
                        "sNext":       "Suivant",
                        "sLast":       "Dernier"
                    },
                    "sSearch": "Rechercher : ",
                    "sProcessing":     "Traitement en cours...",
                    "sLoadingRecords": "Chargement en cours..."
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>

</body>

</html>
