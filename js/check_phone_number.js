function checkphone_number()
{
    Phone_Number = document.getElementById("PhoneNumber").value;
    $.ajax({
        url: 'Check_Phone_Number.php',
        type: 'POST',
        async: !1,
        data:{un:username},
        success: function(data)
        {
            document.getElementById("Message").innerHTML = data;
        }
    });
}