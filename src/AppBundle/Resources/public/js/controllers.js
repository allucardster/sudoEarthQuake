angular.module('sudoEarthQuake', ['uiGmapgoogle-maps', 'sudoEarthQuakeAPI'])
.controller("earthQuakeCatalogueCtrl", function($scope, uiGmapGoogleMapApi, apiEndpoints) {
    $scope.earthquakes = null;
    $scope.year = 1999;
    $scope.map = { center: { latitude: 5, longitude: -75 }, zoom: 6 };
    $scope.circles = [];
    $scope.markers = [];

    var initEarthquakes = function(year) {
        var apiPromise = apiEndpoints.get.listEarthQuake(year)
            data = [];
        apiPromise.success(function (requestData, status) {
            data = requestData;
        });
    };

    $scope.refreshData = function() {
        var apiPromise = apiEndpoints.get.listEarthQuake($scope.year);
        apiPromise.success(function (data, status) {
            $scope.earthquakes = data;
            for(i in $scope.earthquakes) {
                var current = {};
                current['id'] = i;
                current['latitude'] = $scope.earthquakes[i]['latitude'];
                current['longitude'] = $scope.earthquakes[i]['longitude'];
                current['show'] = false;
                current['date'] = moment($scope.earthquakes[i]['longitude']).format('MM/DD/YYYY hh:mm:ss a');
                current['onClick'] = function() {
                    console.log("Clicked!");
                    this.show = !this.show;
                };
                current['title'] = "circle title";
                $scope.markers.push(current);
            }
        });
    };

    $scope.$watch('year', function(newVal, oldVal){
        $scope.markers = [];
        $scope.refreshData(newVal);
    });
});