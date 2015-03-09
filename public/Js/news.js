function Pagination(pageIndex,newsSize)
{
	var pageIndex=pageIndex;
	//var newsSize=newsSize%20==0?newsSize/20:parseInt(newsSize/20)+1;
	var nodeDiv=$(".quotes");
	if(pageIndex==1)
	{
		nodeDiv.append("<span class='disabled'> < </span>");
	}
	else
	{
		nodeDiv.append("<a href='"+(pageIndex-1)+".html'> < </a>");
	}
	var i=(pageIndex+10)<=newsSize?pageIndex:((newsSize-10)>=1?newsSize-10:1);
	var size=(pageIndex+10)<=newsSize?(pageIndex+10):newsSize;
	for(;i<=size;i++)
	{
		if(i==pageIndex)
		{
			nodeDiv.append("<span class='thisclass'>"+pageIndex+"</span>");
		}
		else
		{
			nodeDiv.append("<a href='"+i+".html'>"+i+"</a>");
		}
	}
	if(pageIndex==newsSize)
	{
		nodeDiv.append("<span class='disabled'> > </span>");
	}
	else
	{
		nodeDiv.append("<a href='"+(pageIndex+1)+".html'> > </a>");
	}
}