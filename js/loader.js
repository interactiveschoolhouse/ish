(function(ish) {
    ish.showBusy = function() {
        $("body").append("<div class='loader__overlay'></div><div class='loader__spinner'></div>")
    }
    ish.hideBusy = function() {
        $(".loader__overlay").remove();
        $(".loader__spinner").remove();
    }
})(window.ish = window.ish || {});