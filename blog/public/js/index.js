$(function(){
    $("*").each( function () {
        var $this = $(this);
        if (parseInt($this.css("fontSize")) < 10) {
            $this.css({ "font-size": "10px" });   
        }
    });
});