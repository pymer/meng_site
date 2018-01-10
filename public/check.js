$(function () {

    $("#txtSerial").keyup(function () {
        if (event.keyCode == 13) {
            $("#btnCheck").click();
        }
    });

    $("#btnCheck").click(function () {

        $("#info").html("查询中...");

        var set = {
            url: "../Action.php?opt=showData&serial=" + $("#txtSerial").val(),
            type: "GET",
            dataType: "json",
            success: function (ret) {

                var infoView = "";

                if (ret == null || ret == "null" || (ret.PFullName == null && ret.BFullName == null && ret.TelAndAddress == null))
                {
                    infoView = "<span class='red-text'>尊敬的钓友您好，暂未显示，如有问题，请致电02751501988咨询。</span>";
                    $("#info").html(infoView);
                    return;
                }               

                infoView += "产品名称:" + ret.PFullName;
                infoView += "<br/>";
                infoView += "经销商名称:" + ret.BFullName;
                infoView += "<br/>";
                //infoView += "经销商地址:" + ret.TelAndAddress;
                //infoView += "<br/>";
                infoView += "<span class='green-text'>尊敬的钓友您好，您购买的产品为客友正品，感谢支持客友，更多促销赛事活动信息，请关注客友官方公众号：keeu365 爱钓鱼爱客友钓具。</span>";

                $("#info").html(infoView);
            },
            error: function (xhr) {
                $("#info").text(xhr.responseText);
            }
        };
        $.ajax(set);
    });
});