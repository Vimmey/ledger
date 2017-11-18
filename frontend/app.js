(function(){
  'use strict';

  angular
    .module('app', [
      'ngResource'
      // 'ngAnimate',
      // 'ngStorage',
      // 'ngFileUpload',
      // // 'ng-pagination',
      // 'ngMaterial',
      // 'ui.router'
    ])
    .run(function($http, $rootScope){
      $http.get("../api/data/footerlinks.json")
      .then(function(response) {
        $rootScope.footerdata = response.data;
      });
	 })
})();
