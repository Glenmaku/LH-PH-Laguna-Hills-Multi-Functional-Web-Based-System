function addmessage() {
    var blockAdd = $('#completeBlock').val();
    var lotAdd = $('#completeLot').val();
    var streetAdd = $('#completeStreet').val();
    var statusAdd = $('#completeStatus').val();
    var areaAdd = $('#completeArea').val();
    var priceAdd = $('#completePrice').val();
    var remarksAdd = $('#completeRemarks').val();
}

function panelData(){
    var panelData = "true";
}

(function() {
    var _log = console.log;
    console.log = function() {
      _log.apply(console, arguments);
      console.error("STOP: Access to console.log has been limited");
    };
})();