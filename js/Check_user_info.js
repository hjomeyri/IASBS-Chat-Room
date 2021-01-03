function checkusername()
{
    username = document.getElementById("UserN").value;
    document.getElementById("uiMessage").innerHTML="Please wait";

    $.ajax
    (
        {
            url:'check-user-info.php',
            type:'POST',
            async: !1,
            contentType:'charser=utf-8',
            data:{un:username},
            success: function(data)
            {
                document.getElementById("uiMessage").innerHTML=data;
            }
        }
    )
}