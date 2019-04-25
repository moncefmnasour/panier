<?php
require "../tuto/_header.php";
$panier=new panier(2,"IBM",2,"hello");
$liste=$panier->rechercherCommande($_GET['recherche']);

?>

<?php
if(isset($_GET['del1'])){
    $wishlist->del1($_GET['del1']);
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Buttons & Icons</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Admin Panel</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>



                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.html"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="icon-chevron-right"></i> Calendar</a>
                        </li>
                        <li>
                            <a href="stats.html"><i class="icon-chevron-right"></i> Statistics (Charts)</a>
                        </li>
                        <li>
                            <a href="form.html"><i class="icon-chevron-right"></i> Forms</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="icon-chevron-right"></i> Tables</a>
                        </li>
                        <li class="active">
                            <a href="buttons.php"><i class="icon-chevron-right"></i> Wishlist</a>
                        </li>
                        <li>
                            <a href="editors.html"><i class="icon-chevron-right"></i> WYSIWYG Editors</a>
                        </li>
                        <li>
                            <a href="interface.html"><i class="icon-chevron-right"></i> UI & Interface</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">731</span> Orders</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-success pull-right">812</span> Invoices</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">27</span> Clients</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">1,234</span> Users</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">2,221</span> Messages</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                        </li>
                        <li>
                            <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                        </li>
                    </ul>
                </div>
             
            <!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
body {
    background-color: #f6f6ff;
    font-family: Calibri, Myriad;
}

#main {
    width: 780px;
    padding: 20px;
    margin: auto;
}

table.timecard {
    margin: auto;
    width: 600px;
    border-collapse: collapse;
    border: 1px solid #fff; /*for older IE*/
    border-style: hidden;
}

table.timecard caption {
    background-color: #f79646;
    color: #fff;
    font-size: x-large;
    font-weight: bold;
    letter-spacing: .3em;
}

table.timecard thead th {
    padding: 8px;
    background-color: #fde9d9;
    font-size: large;
}

table.timecard thead th#thDay {
    width: 40%; 
}

table.timecard thead th#thRegular, table.timecard thead th#thOvertime, table.timecard thead th#thTotal {
    width: 20%;
}

table.timecard th, table.timecard td {
    padding: 3px;
    border-width: 1px;
    border-style: solid;
    border-color: #f79646 #ccc;
}

table.timecard td {
    text-align: right;
}

table.timecard tbody th {
    text-align: left;
    font-weight: normal;
}

table.timecard tfoot {
    font-weight: bold;
    font-size: large;
    background-color: #687886;
    color: #fff;
}

table.timecard tr.even {
    background-color: #fde9d9;
}

</style>
<title>Employee Timecard</title>
</head>

<body>
<div id="main">
<table class="timecard">
    <caption>Tableau de Commande</caption>
    <thead>
        <tr>
            <th id="thDay">photo du produit</th>
            <th id="thDay">Nom du produit</th>
            <th id="thDay">Quantite</th>
            <th id="thDay">Prix</th>
            <th id="thDay">Nom du Client </th>
            
            
        </tr>
    </thead>
    

    <fieldset>
  <form name="Form2" method="POST" action ="afficherCommande.php">
        Rechercher <input type="text" name="recherche">
<input type="submit" name="chercher" value="chercher"></br>
</form>

       
    <?php 




$ids = array_keys($_SESSION['panier']);
if(empty($ids)){
    $products=array();
}else{

            foreach ($liste as $product):?>
            
                                
    <tbody>
        <tr class="odd">

            <th ><div class="cart-img-product b-rad-4 o-f-hidden">

            

                                    <img src="../tuto/<?=$product->id;?>.jpg" alt="IMG-PRODUCT">
                                </div></th>
                                <td ><?=$product->name;?></td>
                                 <td ><center><?= $_SESSION['panier'][$product->id]; ?></center></td>
                                <td ><?= number_format($product->price,2,',',' ');?>DT</td>
                                <td><?=$product->NomClient;?></td>


            
            
        </tr>
        <?php endforeach;?>
        <?php
        /*
        if(($_POST['rechercher'])!=null){
            $mouhib=$panier->rechercher($_POST['rechercher'],$DB);
            foreach ($products as $product){
                
            ?>
             <tbody>
        <tr class="odd">

            <th ><div class="cart-img-product b-rad-4 o-f-hidden">

            

                                    <img src="../tuto/<?=$product->id;?>.jpg" alt="IMG-PRODUCT">
                                </div></th>
                                <td ><?=$product->name;?></td>
                                 <td ><center><?= $_SESSION['panier'][$product->id]; ?></center></td>
                                <td ><?= number_format($product->price,2,',',' ');?>DT</td>
                                <td><?=$product->NomClient;?></td>


            
            
        </tr>

    //php }}*/?>

    </tfoot>
</table>
</div>
</body>
</html>

            

<form method="GET" action="views/statistique.php">
                                           <button type="submit" name="Statistique" value="Statistique" class="btn btn-info" style="margin-left:auto;margin-right:403px;display:block;"> Statistique </button>
                                           
                </form>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <div class="span6">
                            <!-- block -->
                          

                                        
                            <!-- /block -->
                        </div>
                       
                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            
        });
        </script>

    </body>

</html>