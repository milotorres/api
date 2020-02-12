<div id="verify"></div>
<script type="text/javascript">
	$("#<?php echo $id?>").submit(function(event) {

	   var recaptcha = $("#g-recaptcha-response").val();
	   if (recaptcha === "") {
		  event.preventDefault();
		  alert("Favor de Ingresar el Capcha");
	   }
	});
	
    var onloadCallback = function() {
        grecaptcha.render('verify', {
          'sitekey' : '<?php echo $key?>'
        });
    };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>