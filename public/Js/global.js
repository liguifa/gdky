var navigationMenu={home:0,news:1,technology:2,projects:3,shares:4,questions:5,teahouse:6,study:8};

function checkBrower(href)
{
	var browser=navigator.appName;
	var b_version=navigator.appVersion; 
	var version=b_version.split(";"); 
	var trim_Version=version[1].replace(/[ ]/g,""); 
	if(browser=="Microsoft Internet Explorer" && (trim_Version=="MSIE7.0"||trim_Version=="MSIE6.0"))
	{
		window.location.href=href;
	}
}

function setCookie(c_name,c_value,c_time)
{
    var date=new Date();
    date.setHours(date.getHours() + c_time);
    document.cookie=c_name+"="+c_value+";expires="+date.toGMTString();
}

function getCookie(c_name)
{

    if (document.cookie.length > 0)
    {
        var cookie = document.cookie.replace(" ","");
        var cookies = cookie.split(";");
        for (var x in cookies)
        {
            var ce = cookies[x].split(",")[0].split("=");
            if (ce[0].replace(" ","")==c_name)
            {
                return ce[1];
            }
        }
    }
    return null;
}

function setNavigation(navIndex)
{
    $("#header_bottom_main ul li:eq("+navIndex+")").attr("class","active");
}

function setLogin(html)
{
    $("#header_top_main_user").html(html);
    var oldHeaderHtml=localStorage.getItem("header");
    localStorage.setItem("header",oldHeaderHtml.replace(/<span role-mark=\"start\">.*<\/span role-mark=\"end\">/,html));
}

function setData(d_header,d_footer)
{
	localStorage.setItem("header",d_header);
	localStorage.setItem("footer",d_footer);
	setCookie("userdata","1",100000000);
}

function getData(d_name)
{
	if(getCookie("userdata")==1)
		document.write(localStorage.getItem(d_name));
}

function Share(url,summary,title,pics)
{
	var p = {
		url:url,
		showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
		desc:'',/*默认分享理由(可选)*/
		summary:summary,/*分享摘要(可选)*/
		title:title,/*分享标题(可选)*/
		site:'工大开源社区',/*分享来源 如：腾讯网(可选)*/
		pics:pics, /*分享图片的路径(可选)*/
		style:'102',
		width:80,
		height:30
	};
	var s = [];
	for(var i in p)
	{
		s.push(i + '=' + encodeURIComponent(p[i]||''));
	}
	document.write(['<a version="1.0" class="qzOpenerDiv" 	href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));

}
$(document).ready(function(){
	$("#indexPage").click(function(){
		location.href="/index.php/Home/Index/index.html";
	});
	$("#savePage").click(function(){
		window.external.addFavorite('http://www.gdky.top','工大开源社区');
	});
});