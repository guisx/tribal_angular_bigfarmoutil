<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Outils Big Farm</title>
    </head>
    <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home" ng-click="menu='home'">Outils Big Farm</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" ng-conroller="NavCtrl">
            <li ng-class="{active: menu=='home'}"><a href="#home" ng-click="menu='home'">Accueil</a></li>
            <li ng-class="{active: menu=='calcul'}"><a href="#calcul" ng-click="menu='calcul'">Prix de revient</a></li>
            <li ng-class="{active: menu=='bonus'}"><a href="#bonus" ng-click="menu='bonus'">Bonus de contrat</a></li>
            <li ng-class="{active: menu=='hawai'}"><a href="#hawai" ng-click="menu='hawai'">Event Hawai</a></li>
            <li ng-class="{active: menu=='asie'}"><a href="#asie" ng-click="menu='asie'">Event Asie</a></li>
            <li ng-class="{active: menu=='ovni'}"><a href="#ovni" ng-click="menu='ovni'">Event Ovni</a></li>
            <li ng-class="{active: menu=='fees'}"><a href="#fees" ng-click="menu='fees'">Event Fées</a></li>
            <li ng-class="{active: menu=='camping'}"><a href="#camping" ng-click="menu='camping'">Event Camping</a></li>
            <li ng-class="{active: menu=='mapper'}"><a href="#mapper" ng-click="menu='mapper'">Mapper</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <section class="view" ng-view>  

    </section>

    <footer class="navbar navbar-static-bottom" style="text-align:center;margin-bottom:0;margin-top:20px;border-top:1px solid #ccc;padding-top:20px;">
        <p>© 2015 - <a href="http://www.antpruvost.fr/" title="antpruvost.fr" target="_blank">www.antpruvost.fr</a> - Tous droits reservés<br>
        Création de site internet pour particulier et entreprise dans le département d'Eure-et-loir 28, Yvelines 78 et Essonne 91.</p>
    </footer>
<!-- <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/angular.js"></script>
        <script src="js/angular_localefr.js"></script>
        <script src="js/angular_route.js"></script>
        <script src="js/app.js"></script>
        
    </body>
</html>
