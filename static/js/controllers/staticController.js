angular.module('capshawApp')
    .controller('StaticCtrl', function ($scope, $location) {

        $scope.pageTitle = 'Wishlist';
        $scope.pageContents = '/static/content/wishlist.html';
        $scope.labs = true;
        $scope.pageScrollReady = true;

        // When the user clicks the logo, go home.
        $scope.clickLogo = function () {
            $location.path('/');
        }
    });