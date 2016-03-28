var Init_tooltip = (function () {
  var init = function () {
    $("[data-toggle='tooltip']").tooltip();
    $("[data-toggle='popover']").popover();
  };
  return { init : init }
})();
