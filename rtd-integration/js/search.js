jQuery('#rtd-search').ready(function(){
    jQuery('#rtd-search-btn').click(function () {
        var box = jQuery('#rtd-search-box');
        var query = box.val();
        var url = box.data('rtd');
        if (query !== "") {
            url = url + "search.html?q=" + query + "&check_keywords=yes&area=default";
        }
        window.location.href = url;
    });
});
