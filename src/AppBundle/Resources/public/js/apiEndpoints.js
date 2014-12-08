angular.module('sudoEarthQuakeAPI', [])
    .factory('apiEndpoints', function($http){
        var endpoints = {
            get: {},
            post: {}
        };

        endpoints.get.listEarthQuake = function(year) {
            var url = Routing.generate('app_earthquakerest_list', {year: year}, true),
                apiPromise;

            apiPromise = $http({
                method: 'GET',
                url: url,
                /* Additional data
                data: {
                    key: 'value'
                }
                */
            });

            return apiPromise;
        };

        return endpoints;
    }
);