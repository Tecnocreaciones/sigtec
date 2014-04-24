'use strict';

var mainApp = angular.module('mainApp',[
    'mainApp.controllers',
    'mainApp.directives',
    'mainApp.filters',
    'mainApp.services',
    'notificationBarModule',
    'notifyModule'
]);

mainApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});
