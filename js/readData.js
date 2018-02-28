$(document).ready(function(){
$('#file').change( function(event) {
    var tmppath = URL.createObjectURL(event.target.files[0]);
    var values = 'Documento='+tmppath;
    console.log("hello");
    $.ajax({
        url: "libs/loadSheet.php",
        type: "POST",
        data: values,
        success: function (response) {
            console.log(response);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }

    });
});
});

