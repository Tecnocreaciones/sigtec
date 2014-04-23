'use strict';

var mainApp = angular.module('mainApp',['notificationBarModule','notifyModule']);

mainApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

angular.module('mainApp.controllers', []);