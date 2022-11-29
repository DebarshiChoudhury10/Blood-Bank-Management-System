<script type="text/javascript">
$(document).ready(function(){
    $('#loginbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "respass.php",
            data: $('#login').serialize(),
            success: function(response){
		console.log(response);
		if(response === "OTP Sent.")
		{		
			//document.getElementById("").classList.remove("openm-popup");
			document.getElementById("modaladds").classList.add("openm-popup");
			document.getElementById("modal-msg").style.display="block";
                	$('#modal-msg').html(response);
			console.log(response);
			const inputs = document.querySelectorAll('#email, #uname');
			inputs.forEach(input => {
				input.value = '';
			})
			/*setTimeout(function(){
				location.reload();
			}, 3000);*/
            	}
		
		else
		{
			document.getElementById("reg-error").classList.add("open-popup");
			document.getElementById("error-msg").style.display="block";
                	$('#error-msg').html(response);
		}
            }
	})
    })
});

</script>