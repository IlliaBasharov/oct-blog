window.onload = function () {
    var cabinet_showNews = document.getElementById("cabinet_showNews");
    var cabinet_AllNewsDiv = document.getElementById("cabinet_AllNewsDiv");
    cabinet_showNews.onclick = function () {
        cabinet_AllNewsDiv.style.visibility = 'visible';
    }
};
window.onload = function () {
    var text = document.getElementById("cabinet_AllNewsDiv");
    var sliced = text.slice(0, 100);
    if (sliced.length < text.length) {
        var lastSpace = sliced.last(" ");
        if (lastSpace < sliced.length) {
            sliced = sliced.substr(0, lastSpace);
        }
        return sliced += '...';
    };
};