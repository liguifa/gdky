/***************************************************************************
	Author:@Hao liu
	Date：2014/12/15
****************************************************************************/
var si;
$(document).ready(function(){
	var n =1;

			$("#me").click(function(){
				
				if (n%2==0) {
					
					$("#container").addClass("go2");
					$("#nav").addClass("go1");
					$("#container").removeClass("back2");
					$("#nav").removeClass("back1");

				}
				else{
					
					$("#container").removeClass("go2");
					$("#nav").removeClass("go1");
					$("#container").addClass("back2");
					$("#nav").addClass("back1");
				}
				n++;
			});
		$("li").click(function(){

				$("#progress").addClass("progressStart");
			si=	setInterval("proc()",500);
				
		});
		$("a").click(function(){

				$("#progress").addClass("progressStart");
			si=	setInterval("proc()",500);
				
		});
		addActive();
});
function proc(){
	$("#progress").removeClass("progressStart");
	clearInterval(si);
}
function rmActive(){
	$("#li0").removeClass("active");
	$("#li1").removeClass("active");
	$("#li2").removeClass("active");
	$("#li3").removeClass("active");
	$("#li4").removeClass("active");
	$("#li5").removeClass("active");
	$("#li6").removeClass("active");
	$("#li7").removeClass("active");
}
function addActive(){
	$("#li0").click(function(){
		rmActive();
		$('#li0').addClass("active");
		$('iframe').attr("src","all.html");
	});
	$("#li1").click(function(){
		rmActive();
		$('#li1').addClass("active");
		$('iframe').attr("src","addBlog.html");
	});
	$("#li2").click(function(){
		rmActive();
		$('#li2').addClass("active");
		$('iframe').attr("src","info.html");
	});
	$("#li3").click(function(){
		rmActive();
		$('#li3').addClass("active");
		$('iframe').attr("src","pic.html");
	});
	$("#li4").click(function(){
		rmActive();
		$('#li4').addClass("active");
		$('iframe').attr("src","video.html");
	});
	$("#li5").click(function(){
		rmActive();
		$('#li5').addClass("active");
		$('iframe').attr("src","col.html");
	});
	$("#li6").click(function(){
		rmActive();
		$('#li6').addClass("active");
	});
}