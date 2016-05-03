'use strict';

/**
 * @ngdoc service
 * @name messina2App.datapass
 * @description
 * # datapass
 * Factory in the messina2App.
 */
angular.module('messina2App')
  .factory('datapass',['$rootScope','$http',function ($rootScope,$http) {
   
    var clientes = [];
    /*
    $rootScope.displayClients = function(){
      $http.get('/php/getclients.php')
        .success(function(data){
            $rootScope.clientes = data;
            console.log($rootScope.clientes);
        })
        .error(function(data,status,headers,config){
          console.log("Failed to add data to DB");
        });
    };
    */
    

    // Public API here
    return {
      getClients : function(){
        return $http.get('/php/getclients.php').success(function(data) {
          clientes = data;
        $rootScope.$broadcast('handleSharedClients',clientes)
        return clientes;
      })  
    }
  };
  }]);
