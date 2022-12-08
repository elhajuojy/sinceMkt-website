
function deleteUser(member_id) {
    alert(member_id);
    console.log(member_id);
    $.ajax({
        url: 'listproduct',
        type: 'post',
        data: {
            "DELETE": true,
            id: member_id
        },
        success: function(data, status) {
            displayDataUser();
        }
    })
}

function displayDataUser(){
    var displatData = "true";
    $.ajax({
        url: 'listproduct',
        type: 'get',
        data: {
            displaySend: displatData
        },
        success: function(data, status) {
            $("#containerProducts").html = "";
            $("#containerProducts").html(data);
        }
    })

};