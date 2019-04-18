window.onload = function () {
    var cabinet_showNews = document.getElementById("cabinet_showNews");
    var cabinet_AllNewsDiv = document.getElementById("cabinet_AllNewsDiv");
    cabinet_showNews.onclick = function () {
        cabinet_AllNewsDiv.style.visibility = 'visible';
    }
};
window.onload = function () {
    var textBlocks = document.querySelectorAll('p');
    for (var i = 0; i < textBlocks.length; i++) {
        var text = textBlocks[i].innerHTML;
        textBlocks[i].innerHTML = '';
        for (var j = 101; j > 0; j--) {
            if (text[j] !== " ") {
                continue;
            }else{
                var str = j;
                break;
            }
        }
        var sliced = text.slice(0, str);
        textBlocks[i].innerHTML = sliced;
    }
};
