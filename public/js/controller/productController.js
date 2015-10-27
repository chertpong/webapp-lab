'use strict';
/**
 * Created by Chertpong on 27/10/2558.
 */
var productControllers = angular.module('productControllers',[]);

productControllers.controller('mainProductController',['$scope','$http',
    function($scope,$http){
        $scope.addToCart = function(productId){
            console.log('add '+productId+' to cart');
            $http.post('shoppingCart/store',{product_id:productId}).then(
                function successCallback(response){
                    $('<div class="alert alert-success" role="alert">Added!</div>').appendTo(".alert-msg").fadeOut(2000);
                },
                function errorCallback(response){
                    $('<div class="alert alert-danger" role="alert">Error!</div>').appendTo(".alert-msg").fadeOut(5000);
                    console.log(response.data);
                }
            )
        }
    }
]);