'use strict';

var coramerApp = angular.module('coramerApp',['notificationBarModule','notifyModule']);

coramerApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});

angular.module('coramerApp.controllers', []);