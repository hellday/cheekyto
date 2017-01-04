<?php
include "verification.php";

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Récupère le nombre d'inscriptions en attente
$sql = 'SELECT COUNT(*) AS nb FROM inscriptions WHERE status = "wait"';
$result = $bdd->query($sql);
$columns = $result->fetch();
$nb = $columns['nb'];

//Récupère le nombre d'inscriptions validées
$sql2 = 'SELECT COUNT(*) AS nb FROM inscriptions WHERE status = "validated"';
$result2 = $bdd->query($sql2);
$columns2 = $result2->fetch();
$nb2 = $columns2['nb'];

//Récupère le nombre d'inscriptions validées
$sql3 = 'SELECT COUNT(*) AS nb FROM inscriptions WHERE status = "refused"';
$result3 = $bdd->query($sql3);
$columns3 = $result3->fetch();
$nb3 = $columns3['nb'];


?>

<!DOCTYPE html>
<html lang="en">

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

        <!-- Navigation -->
        <?php include "nav.php"; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">



                <div class="col-lg-12 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $nb; ?></div>
                                    <div>Inscriptions en attente</div>
                                </div>
                            </div>
                        </div>
                        <a href="inscription_wait.php">
                            <div class="panel-footer">
                                <span class="pull-left">Voir</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <h3>Récapitulatif des inscriptions : </h3>
                <div class="col-lg-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>En Attente</th>
                                <th>Validée(s)</th>
                                <th>Réfusée(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="inscription_wait.php"><?php echo $nb; ?></a></td>
                                <td class="bg-success"><a href="inscription_validated.php"><?php echo $nb2; ?></a></td>
                                <td class="bg-danger"><a href="inscription_refused.php"><?php echo $nb3; ?></a></td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>

            </div>
            <!-- /.row -->

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
