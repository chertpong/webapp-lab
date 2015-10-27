'use strict';

angular.module('myApp', [
    'ngRoute',
    'shoppingCartControllers',
    'productControllers'

])
.config(['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}]);
