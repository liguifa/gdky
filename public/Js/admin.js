var panelId = 0;
$(document).ready(function ()
{
    $("li").click(function ()
    {
        $("#aa").find("li").attr("class", "");
        $(this).attr("class", "action");
        GetHtmlContext(GetAccessFunction($(this).val()), GetParameters($(this).val()), $(this).text());
    });
    function GetAccessFunction(value)
    {
        switch (value)
        {
            case 11: return "AdminManage"; break;
            case 12: return "UserManage"; break;
        }
    }
    function GetParameters(value)
    {
        var parameters = new Array();
        switch (value)
        {
        }
        return parameters;
    }
    function GetHtmlContext(funname, parameters, title)
    {
        $('#tt').tabs('add', {
            title: title,
            closable: true,
            id: "panel" + panelId,
            content: "<div style='windth:180px;margin:auto;margin-top:200px;text-align:center'><img src=\"../.../../../../public/Images/loading.gif\"><p>玩命加载中....</p><div>"
        });
        $.ajax({
            type: "post",
            url: funname,
            data: {
                id: panelId,
                parameter0: parameters[0],
                parameter1: parameters[1],
                parameter2: parameters[2],
                parameter3: parameters[3],
                parameter4: parameters[4],
                parameter5: parameters[5],
                parameter6: parameters[6],
                parameter7: parameters[7],
                parameter8: parameters[8],
                parameter9: parameters[9],
            },
            dataType: "html",
            success: function (data)
            {
                var id = "#panel" + panelId;
                $(id).empty();
                $(id).html(data);
                panelId++;
            }
        });
    }
});