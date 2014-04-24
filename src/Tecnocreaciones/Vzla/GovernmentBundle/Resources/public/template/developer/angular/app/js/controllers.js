'use strict';

/* Controllers */
angular.module('mainApp.controllers', [])
    .controller('MainController',function($rootScope,notificationBarService){
           $rootScope.notificationBarService = notificationBarService;
           $rootScope.asset = function(path){
               return ConfApp.assetPath+path;
           }
       })
;