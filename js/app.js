var app = angular.module('app', ['ngRoute']);
/*-----------------------------------------------*\
Nav config
\*-----------------------------------------------*/
app.config(function($routeProvider){
	$routeProvider
		.when('/home',{templateUrl:'partials/home.php'})
		.when('/calcul',{templateUrl:'partials/calcul.php'})
		.when('/bonus',{templateUrl:'partials/bonus.php'})
		.when('/hawai',{templateUrl:'partials/hawai.php'})
		.when('/asie',{templateUrl:'partials/asie.php'})
		.when('/ovni',{templateUrl:'partials/ovni.php'})
		.when('/fees',{templateUrl:'partials/fees.php'})
		.when('/camping',{templateUrl:'partials/camping.php'})
		.when('/mapper',{templateUrl:'partials/mapper.php'})
		.otherwise({redirectTo:'/home'});
});
/*-----------------------------------------------*\
Nav controller
\*-----------------------------------------------*/
app.controller('NavCtrl',function($scope) {
	$scope.menu="home";
});
/*-----------------------------------------------*\
ProdCtrl controller
\*-----------------------------------------------*/
app.controller('ProdCtrl',function($scope) {
	$scope.reload = function() { location.reload(); }
	$scope.fleurs= 0;		
	$scope.choux= 0;		
	$scope.orge= 0;		
	$scope.mais= 0;		
	$scope.cochons= 0;		
	$scope.pissenlit= 0;			
	$scope.mache= 0;				
	$scope.ane= 0;				
	$scope.oeufs= 0;				
	$scope.ble= 0;				
	$scope.lait= 0;				
	$scope.cire= 0;				
	$scope.huile_olive= 0;				
	$scope.pommes= 0;				
	$scope.essence_jasmin= 0;			
	$scope.essence_lavande= 0;				
	$scope.jasmin= 0;				
	$scope.agrumes= 0;				
	$scope.vanille= 0;				
	$scope.aloevera= 0;				
	$scope.miel= 0;				
	$scope.amandes= 0;				
	$scope.olives= 0;			
	$scope.peches= 0;			
	$scope.fsauvages= 0;				
	$scope.estival= 0;				
	$scope.lavande= 0;				
	$scope.cerises= 0;				
	$scope.panier= 0;				
	$scope.gel= 0;			
	$scope.chaussons= 0;			
	$scope.muffins= 0;			
	$scope.tarte= 0;			
	$scope.romentique= 0;		
	$scope.gateau= 0;		
	$scope.parfum= 0;		
	$scope.huile= 0;		
	$scope.creme= 0;		
	$scope.savons= 0;		

});
/*-----------------------------------------------*\
PourcentCtrl controller
\*-----------------------------------------------*/
app.controller('PourcentCtrl',function($scope) {
	$scope.montant = 10;
	$scope.remise = 10;
});