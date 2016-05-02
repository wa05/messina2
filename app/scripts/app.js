'use strict';

/**
 * @ngdoc overview
 * @name messina2App
 * @description
 * # messina2App
 *
 * Main module of the application.
 */
angular
  .module('messina2App', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(['$routeProvider','$locationProvider',function ($routes,$location) {
    $location.hashPrefix('!').html5Mode({
      enabled:true,
      requireBase:false
    });

    $routes
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/carga', {
        templateUrl: 'views/carga.html',
        controller: 'CargaCtrl',
        controllerAs: 'carga'
      })
      .when('/agenda', {
        templateUrl: 'views/agenda.html',
        controller: 'AgendaCtrl',
        controllerAs: 'agenda'
      })
      .otherwise({
        redirectTo: '/'
      });
  }]);
