var mailto = document.getElementById("mailto");
mailto.addEventListener("click",function(){
	location.href = "mailto:c4rl0sill3sc4@protonmail.com"
});
var btnlang = document.getElementById("btnlang");
btnlang.addEventListener("click",function(event){
	location.href="/"+btnlang.getAttribute("data-href");	
});

document.getElementById("img-git").addEventListener("click",function(){
	window.open("https://github.com/carlos-sweb");
});

document.getElementById("img-npm").addEventListener("click",function(){
	window.open("https://www.npmjs.com/~carlos-sweb");
});



