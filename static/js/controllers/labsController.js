angular.module('capshawApp')
    .controller('LabsCtrl', function ($scope, $timeout) {

        $scope.labs = false;
        $scope.pageScrollReady = false;
        $scope.transitionTime = 400;

        // Handles timing of the toggling for the page elements.
        $scope.toggleLabs = function () {
            $scope.labs = !$scope.labs;

            $timeout(function() {
                $scope.pageScrollReady = !$scope.pageScrollReady;
            }, $scope.transitionTime);
        }

        // On page load, set a timeout to show the content.
        $timeout(function() {
            $scope.toggleLabs();
        }, 200);

    });