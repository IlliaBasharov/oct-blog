window.onload = function () {
    // отображение новостей
    var cabinet_showNews = document.getElementById('logoFirst');
    var header = document.getElementById('header');
    var cabinet_AllNewsDiv = document.getElementById("cabinet_allNews");
    var fisrtPage = document.getElementById("fisrtPage");
    cabinet_showNews.onclick = function () {
        cabinet_AllNewsDiv.style.visibility = 'visible';
        fisrtPage.style.visibility = 'hidden';
        header.style.visibility = 'visible';
    };
    
    // обрезка текста
    var textBlocks = document.querySelectorAll('p');
    for (var i = 0; i < textBlocks.length; i++) {
        var text = textBlocks[i].innerHTML;
        textBlocks[i].innerHTML = '';
        for (var j = 101; j > 0; j--) {
            if (text[j] !== " ") {
                continue;
            } else {
                var str = j;
                break;
            }
        }
        var sliced = text.slice(0, str);
        textBlocks[i].innerHTML = sliced;
        
    } 
};
