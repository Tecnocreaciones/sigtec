'use strict';

mainApp.requires.push('sigtecModule');

// Declare app level module which depends on filters, and services
var sigtecModule = angular.module('sigtecModule', [
    'ngRoute',
    'sigtecModule.filters',
    'sigtecModule.services',
    'sigtecModule.directives',
    'sigtecModule.controllers',
    'notificationBarModule'
]).
        config(['$routeProvider', function($routeProvider) {
                $routeProvider.when('/index', {
                    controller: 'ShowCompanyList'
                });
                $routeProvider.otherwise({redirectTo: '/index'});
            }])
        ;