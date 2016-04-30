'use strict';

/**
 * @ngdoc function
 * @name messina2App.controller:AboutCtrl
 * @description
 * # AboutCtrl
 * Controller of the messina2App
 */
angular.module('messina2App')
  .controller('CargaCtrl', function ($scope) {
    	$scope.dataCiudad = {
    repeatSelect: null,
    availableOptions: [
      {id: '1', name: 'Rosario'},
      {id: '2', name: 'Funes'},
      {id: '3', name: 'San Lorenzo'},
      {id: '4', name: 'P. Esther'},
      {id: '5', name: 'A.Seco'},
      {id: '6', name: 'Roldan'},
      {id: '7', name: 'Galvez'},
      {id: '8', name: 'Piñeyro'},
      {id: '9', name: 'Bermudez'}
    ],};

    $scope.diaReparto = {
    repeatSelect: null,
    availableOptionsx: [
      {id: '1', name: 'Lun'},
      {id: '2', name: 'Mar'},
      {id: '3', name: 'Mier'},
      {id: '4', name: 'Jue'},
      {id: '5', name: 'Vie'},
      {id: '6', name: 'Sab'},
      {id: '7', name: 'Dom'},
      {id: '8', name: 'L y V'},
      {id: '9', name: 'S y D'},
      {id: '10', name: 'Mi y S'},
      {id: '11', name: 'Ma y V'},
      {id: '12', name: 'L y J'},
      {id: '13', name: 'L M V'},

    ],};
  });
