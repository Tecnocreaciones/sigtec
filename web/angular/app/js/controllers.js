'use strict';

/* Controllers */

angular.module('sigtecModule.controllers', []).
  controller('ShowCompanyList', ['$scope','$http','notificationBarService',function($scope,$http,notificationBarService) {
          $scope.data = {};
          $scope.limit = '40';
          $scope.evalFooter = function(type,footer){
              for (var i = 0; i < footer.length; i++) {
                    if (footer[i] === type) {
                        return true;
                    }
                }
              return false;
          }
          var url = Routing.generate('coramer_sigtec_company_index',{_format:'json'});
          return $http.get(url).success(function(data) {
            console.log(data);
            $scope.data = data;
            
        }).error(function(data){
            notificationBarService.getLoadStatus().error();
        });
          
  }])
  .controller('MyCtrl2', [function() {

  }]);