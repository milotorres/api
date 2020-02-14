var url = "http://localhost/";

$(document).ready(function() {

    get_categories();
    get_description();


});

function get_categories(){
    $.ajax({
        url     : url+"api/bi_categories_getall",
        type    : "get",
        success : (function (data) {
            $.each( data, function( key, value) {
                $("#category").append("<option  value='"+value.BusinessCategories.id+"'>"+value.BusinessCategories.name+"</option>");
                $("#categories .list").append("<li data-value='"+value.BusinessCategories.name+"' class='option'>"+value.BusinessCategories.name+"</li>");
            });
        }),
    });

}

function get_description(){
    $.ajax({
        url     : url+"api/bi_description_getall",
        type    : "get",
        success : (function (data) {
            $.each( data, function( key, value) {
            });
        }),
    });

}

