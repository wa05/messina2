'use strict';

/**
 * @ngdoc function
 * @name messina2App.controller:AgendaCtrl
 * @description
 * # AgendaCtrl
 * Controller of the messina2App
 */
angular.module('messina2App')
  .controller('AgendaCtrl', function ($scope,$routeParams,datapass) {
   	$scope.name = 'AgendaCtrl';
   	datapass.getClients().success(function(data){
   		$scope.clientes = data;
   	});

    $scope.$on('handleSharedClients', function(events,clientes){
    	$scope.clientes=clientes;
    });
    console.log($scope.clientes);

  });
