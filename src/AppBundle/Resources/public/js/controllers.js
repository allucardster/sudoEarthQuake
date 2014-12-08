var app = angular.module('sudoEarthQuake', ['uiGmapgoogle-maps']); 
app.controller("earthQuakeCatalogueCtrl", function($scope, uiGmapGoogleMapApi) {
    $scope.map = { center: { latitude: 5, longitude: -75 }, zoom: 6 };
    $scope.title = "Window Title!";
    $scope.something = function() {
        console.log("sadf");
    }
    $scope.circles = [
        {
            id: 1,
            center: {
                latitude: 5,
                longitude: -75
            },
            radius: 50000,
            stroke: {
                color: '#08B21F',
                weight: 2,
                opacity: 1
            },
            fill: {
                color: '#08B21F',
                opacity: 0.5
            },
            geodesic: true, // optional: defaults to false
            draggable: true, // optional: defaults to false
            clickable: true, // optional: defaults to true
            editable: true, // optional: defaults to false
            visible: true // optional: defaults to true
        }
    ];

    $scope.markers = [
        {
            id: 0,
            latitude: 5,
            longitude: -75,
            show: false,
            onClick: function() {
                console.log("Clicked!");
                this.show = !this.show;
            },
            title: "circle title"
        }
    ];
});