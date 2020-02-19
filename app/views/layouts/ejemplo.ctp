tortillas<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div id="div1" class="container">

<select id="sel1">
  <option>Selecction Alguno</option>
  <select>
     
       <!-- <input type="button" onclick="get_categories('div1')"> -->
 <!--<h1>My First Bootstrap Page1</h1>-->
  <!--p>This is some text.</p>-->
  </div>

<div id="div2" class="container">

<select id="sel2">
  <option>Selecction Alguno</option>
  <select>

       <!-- <input type="button" onclick="get_categories('div2')"> -->
<!-- <h1>My First Bootstrap Page2</h1> -->
 <!--<p>This is some text.</p> -->
</div>

<script> 

$(document).ready(function(){
    
    $("#sel1").change(function() {
         var valor = $(this).children("option:selected").val();
         //Obtener el valor
         var endpoint = "http://localhost/api/bi_description_get_id/"+valor;
         $.ajax({
             url  : endpoint,
             type : "get",
             success : (function (data) {
                $("#sel2").html("<option value='"+data.BusinessDescription.id+"'>"+data.BusinessDescription.name+"</option>");
             })
        });
    });
    

    var endpoint = "http://localhost/api/bi_categories_getall";
    $.ajax({
        url  : endpoint,
        type : "get",
        success : (function (data) {
            $.each( data, function( key, value ) {
                $("#sel1").append("<option value='"+value.BusinessCategories.id+"'>"+value.BusinessCategories.name+"</option>");
            });

        })
    });

});

   // var url = "http://localhost/";
    //get_categories();
    //function get_categories()

    /*function get_categories(parameter)
    {

        $.ajax({
            url     : url+"api/bi_categories_getall",
            type    : "get",
            success : (function (data) {
                $.each( data, function( key, value) { 
                 
                    $("#"+parameter+"").append(" "+value.BusinessCategories.name);
                   
                });
            })
        });

    } */


</script>

</body>
</html>