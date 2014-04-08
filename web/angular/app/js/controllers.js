'use strict';

/* Controllers */

angular.module('sigtecModule.controllers', []).
  controller('ShowCompanyList', ['$scope','$http','notificationBarService',function($scope,$http,notificationBarService) {
          $scope.data = {};
          $scope.limit = '40';
          
          var url = Routing.generate('coramer_sigtec_company_index',{_format:'json'});
          return $http.get(url).success(function(data) {
            $scope.data = data;
            
        }).error(function(data){
            notificationBarService.getLoadStatus().error();
        });
          
  }])
  .controller('CompanyIndexController', function($scope,$http,notifyService) {
          $scope.itemValidateRif = function(url){
              $http.get(url).success(function(data){
                  notifyService.success(url);
              }).error(function(data){
                  notifyService.error(data.message);
              });
              //$scope.tableParams.reload();
          }
  })
  .controller('VzlaEntityController',function($scope){
      $scope.getCity = function(car){
          console.log($scope.model.state);
      }
  })
  ;