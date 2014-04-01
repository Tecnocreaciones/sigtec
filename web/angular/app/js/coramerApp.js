'use strict';

var coramerApp = angular.module('coramerApp',['notificationBarModule']);

coramerApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

angular.module('coramerApp.controllers', []);