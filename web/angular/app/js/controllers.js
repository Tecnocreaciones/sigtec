'use strict';

/* Controllers */

angular.module('sigtecModule.controllers', []).
  controller('ShowCompanyList', ['$scope','$http','notificationBarService',function($scope,$http,notificationBarService) {
          $scope.data = {};
          $scope.limit = '40';
          
          var url = Routing.generate('coramer_sigtec_backend_company_index',{_format:'json'});
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
  .controller('VzlaEntityController',function($scope,$http,notificationBarService){
      $scope.model = {};
      $scope.model.state = $("#coramer_sigtec_companybundle_plant_state").val();
      $scope.model.city = 0;
      $scope.cities = {};
      $scope.getCities = function(selected){
          var url = Routing.generate('api_tecnocreaciones_vzla_entity_state_cities',{id: $scope.model.state});
          notificationBarService.getLoadStatus().loading();
          $http.get(url).success(function(data){
              var cities = [];
              jQuery.each(data,function(i,val){
                  cities[val.id] = val.description;
              });
              $scope.cities = cities;
              if(selected != undefined){
                  $scope.model.city = $scope.cities[selected];
              }
              notificationBarService.getLoadStatus().done();
          }).error(function(data){
              $scope.cities = {};
              notificationBarService.getLoadStatus().done();
          });
      }
      $scope.getCities(cityId);
  })
  ;