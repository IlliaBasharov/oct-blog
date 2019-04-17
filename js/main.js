window.onload = function(){
	var cabinet_showNews = document.getElementById("cabinet_showNews");
	var cabinet_AllNewsDiv = document.getElementById("cabinet_AllNewsDiv");
	cabinet_showNews.onclick = function(){
		cabinet_AllNewsDiv.style.visibility = 'visible';
	}
};