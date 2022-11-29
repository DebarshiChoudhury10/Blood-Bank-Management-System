<script type="text/javascript">
$(document).ready(function(){
    $('#addbutnup').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "resp.php",
            data: $('#managebbu').serialize(),
            success: function(response){
		if(response === "Verified successfully.Change your password.")
		{		
			document.getElementById("modaladds").classList.remove("openm-popup");
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			console.log(response);
			const inputs = document.querySelectorAll('#otpup');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				window.open("reseted.php","_self");
			}, 5000);
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
