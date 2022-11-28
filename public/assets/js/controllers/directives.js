//// INFORMATION GATHERING ////
module.factory("infogathering", [
  "$http",
  "$cookies",

  "$localStorage",
  function ($http, $cookies, $localStorage) {
    var siteUrl = window.location.pathname;
    var webUrl = siteUrl.split("/");
    //splice the url to fit in both on localhost and onine server
    var i = webUrl.indexOf("tega");
    webUrl.splice(i, 1);

    var user_data = $localStorage.user_data;
    var user_token = $localStorage.user_token;
    //var dirlocation = window.location.hostname+'/nps/';
    //var dirlocation = window.location.hostname+'/';
    //var completeUrlLocation = 'https://'+window.location.hostname+'/';
    var completeUrlLocation = "http://" + window.location.hostname + "/tega/";
    // var completeUrlLocation = 'http://www.tega.com.ng/';

    //var current_user = $('#current_user_value').val();
    //alert(completeUrlLocation);

    return {
      urlSplit: webUrl,
      completeUrlLocation: completeUrlLocation,
      user_data: user_data,
      user_token: user_token,
    };
  },
]);

module.filter("HTML2TXT", function ($sce) {
  return function (msg) {
    var RexStr = /\<|\>|\"|\'|\&/g;
    msg = (msg + "").replace(RexStr, function (MatchStr) {
      switch (MatchStr) {
        case "<":
          return "&lt;";
          break;
        case ">":
          return "&gt;";
          break;
        case '"':
          return "&quot;";
          break;
        case "'":
          return "&#39;";
          break;
        case "&":
          return "&amp;";
          break;
        default:
          break;
      }
    });
    return $sce.trustAsHtml(msg);
  };
});

module.filter("htmlToPlaintext", function () {
  return function (text) {
    return text ? String(text).replace(/<[^>]+>/gm, "") : "";
  };
});

module.filter("reverse", function () {
  return function (items) {
    return items.slice().reverse();
  };
});
module.filter("myDateFormat", function myDateFormat($filter) {
  return function (text) {
    var tempdate = new Date(text.replace(/-/g, "/"));
    return $filter('date')(tempdate, "dd, MMMM yyyy");
  };
});

module.directive("embedSrc", function () {
  return {
    restrict: "A",
    link: function (scope, element, attrs) {
      scope.$watch(
        function () {
          return attrs.embedSrc;
        },
        function () {
          element.attr("src", attrs.embedSrc);
        }
      );
    },
  };
});
/*
module.directive("owlCarousel", [
  function () {
    return {
      restrict: "EA",
      transclude: false,
      scope: {
        owlOptions: "=",
      },
      link: function (scope, element, attrs) {
        scope.initCarousel = function () {
          $(element).owlCarousel(scope.owlOptions);
        };
      },
    };
  },
]);
module.directive("owlCarouselItem", [
  function () {
    return function (scope) {
      if (scope.$last) {
        scope.initCarousel();
      }
    };
  },
]);
*/

module.directive("owlCarousel", ['$timeout',
  function ($timeout) {
    return {
      restrict: "E",
      transclude: false,
      link: function (scope, element) {
        var defaultOptions = {};
        scope.initCarousel = function (element) {
          var customOptions = scope.$eval(jQuery(element).attr('data-options'));
          for(var key in customOptions) {
            defaultOptions[key] = customOptions[key];
          }
        
        };
        $timeout(function() {
          jQuery(element).owlCarousel(defaultOptions)
          scope.initCarousel();
        }, 0, false);
      },
    };
  }]);
module.directive("owlCarouselItem", [ function () {
   return {
      restrict: "E",
      transclude: false,
      link: function (scope, element) {
      if (scope.$last) {
        scope.initCarousel(element.parent());
      }
    }
  };
}]);
