var smallNavOpen = false;
var hamburgers = $('.hamburger');

for(i = 0;i<hamburgers.length; i++){
    hamburgers[i].addEventListener('click',changeSmallNav);
}


function changeSmallNav(){
	if(smallNavOpen){
		$('#smallNav').classList.remove('navOpen');
		$('#smallNav').classList.add('navClosed');
	}else{
		$('#smallNav').classList.remove('navClosed');        
		$('#smallNav').classList.add('navOpen');        
	}
	smallNavOpen = !smallNavOpen;
	console.log("ASDASD");
}

if (window.innerWidth < 768) {
	window.addEventListener('click', function () {});
}