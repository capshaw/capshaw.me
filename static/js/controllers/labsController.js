angular.module('capshawApp')
    .controller('LabsCtrl', function ($scope, $timeout) {
        $timeout(function() {
            $scope.labs = true;
        }, 200);
    });