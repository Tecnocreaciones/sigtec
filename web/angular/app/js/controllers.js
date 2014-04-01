'use strict';

/* Controllers */

angular.module('sigtecModule.controllers', []).
  controller('ShowCompanyList', ['$scope',function($scope) {
          $scope.data = {'ss':'sssa'};
          $scope.limit = '40';
          $scope.model = {};
          $scope.model.action = 1;
          
          $scope.mostrar = function(v){
              console.log('aa');
          }
          
  }])
  .controller('MyCtrl2', [function() {

  }]);