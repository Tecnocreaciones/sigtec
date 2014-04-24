'use strict';

var mainApp = angular.module('mainApp',[
    'mainApp.controllers',
    'notificationBarModule',
    'notifyModule'
]);

mainApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
