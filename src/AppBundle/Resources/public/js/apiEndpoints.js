angular.module('sudoEarthQuakeAPI', [])
    .factory('apiEndpoints', function($http){
        var endpoints = {
            get: {},
            post: {}
        };

        endpoints.get.listEarthQuake = function(year, params) {
            var url = Routing.generate('app_earthquakerest_list', {year: year}, true),
                apiPromise,
                params = params ? params : {};

            apiPromise = $http({
                method: 'GET',
                url: url,
                params: params
            });

            return apiPromise;
        };

        return endpoints;
    }
);