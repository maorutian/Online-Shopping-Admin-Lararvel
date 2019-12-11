// note: IE8 doesn't support DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {

    var suggestions = document.getElementById("suggestions");
    var form = document.getElementById("search-form");
    var search = document.getElementById("search");
    //
    // function suggestionsToList(items) {
    //     // <li><a href="search.php?q=alpha">Alpha</a></li>
    //     var output = '';
    //
    //     for(i=0; i < items.length; i++) {
    //         output += '<li>';
    //         output += '<a href="search.php?q=' + items[i] + '">';
    //         output += items[i];
    //         output += '</a>';
    //         output += '</li>';
    //     }
    //
    //     return output;
    // }
    //
    // function showSuggestions(json) {
    //     var li_list = suggestionsToList(json);
    //     suggestions.innerHTML = li_list;
    //     suggestions.style.display = 'block';
    // }

    function getSuggestions() {
        var q = search.value;

        // if(q.length < 3) {
        //     suggestions.style.display = 'none';
        //     return;q
        // }

        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/admin/product/search' + q, true);
        //xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if(xhr.readyState == 4 && xhr.status == 200) {
                var result = xhr.response;
                console.log('result: ' + result);
            }
        };
        xhr.send();
    }

    // use "input" (every key), not "change" (must lose focus)
    search.addEventListener("input", getSuggestions);

});
