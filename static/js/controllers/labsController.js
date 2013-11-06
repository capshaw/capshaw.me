angular.module('capshawApp')
    .controller('LabsCtrl', function ($scope, $timeout) {

        $scope.pageTitle = 'Home';
        $scope.pageContents = '/static/content/about.html';
        $scope.labs = false;
        $scope.pageScrollReady = false;
        $scope.transitionTime = 400;

        // When the user clicks the logo on the home page, toggle the position
        // of the logo.
        $scope.clickLogo = function () {
            $scope.toggleLabs();
        }

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