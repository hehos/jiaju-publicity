(function(jq,window) {
	var freeDesign = {
		init:function() {
			freeDesignInit();
		}
	};
	function freeDesignInit() {
		scrollTopFn(10,"#scrolldiv1 > table > tbody > tr");
	}
	window.freeDesign = freeDesign;
})(jQuery,window);

function scrollTopFn(num,selc) {
	var curNum = jq(selc).length;
	if(curNum > num) {	
		var SD=24,
			myScroll,
			tardiv = document.getElementById('scrolldiv'),
			tardiv1 = document.getElementById('scrolldiv1'),
			tardiv2 = document.getElementById('scrolldiv2'); 
		
		tardiv2.innerHTML=tardiv1.innerHTML; 
		function Marquee2(){ 
			if(tardiv2.offsetTop-tardiv.scrollTop<=0) 
				tardiv.scrollTop-=tardiv1.offsetHeight; 
			else{
				tardiv.scrollTop++; 
			} 
		} 
		myScroll=window.setInterval(Marquee2,24); ;
		tardiv.onmouseover=function() {clearInterval(myScroll)}; 
		tardiv.onmouseout=function() {myScroll=setInterval(Marquee2,SD)};	
	}
}
