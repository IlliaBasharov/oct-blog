window.onload = function () {
    var cabinet_showNews = document.getElementById("cabinet_showNews");
    var cabinet_AllNewsDiv = document.getElementById("cabinet_AllNewsDiv");
    cabinet_showNews.onclick = function () {
        cabinet_AllNewsDiv.style.visibility = 'visible';
    }
};
window.onload = function () {
    var textBlocks = document.querySelectorAll('p');
    console.log(textBlocks);
    for(var i=0; i<textBlocks.length; i++){
        var text = textBlocks[i].innerHTML;
        textBlocks[i].innerHTML = '';
        var  sliced = text.slice(0,101);
        if(sliced[100]!==' '){
            for(var i=sliced.length; i>0;i--){
                if(sliced[i]== ' '){
                    var space = sliced[i];
                    break;
                }
                sliced = sliced.slice(0,space);
            }
        }
        textBlocks[i].innerHTML = sliced;
    }
//    var text = document.getElementById("cabinet_AllNewsDiv");
//    var sliced = text.slice(0, 100);
//    if (sliced.length < text.length) {
//        var lastSpace = sliced.last(" ");
//        if (lastSpace < sliced.length) {
//            sliced = sliced.substr(0, lastSpace);
//        }
//        return sliced += '...';
//    };
};