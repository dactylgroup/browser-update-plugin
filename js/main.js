$( document ).ready(function() {
    $("select").change(function() {
        var browser = $(this).attr("name");
        var version = $(this).val();
        var script = $("#code").html();
        var re = new RegExp(browser+":.*?,");
        script = script.replace(re, browser+":"+version+",");
        $("#code").html(script);
    });
});