var capshawApp = angular.module('capshawApp', []);

capshawApp.config(function($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: '/static/views/index.html',
            controller: 'LabsCtrl'
        }).
        otherwise({
            redirectTo: '/'
        });
});