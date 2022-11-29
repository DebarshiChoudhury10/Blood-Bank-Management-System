<script type="text/javascript">
$(document).ready(function(){
    $('#loginbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "resetpass.php",
            data: $('#login').serialize(),
            success: function(response){
		if(response === "Passwrod Reseted successfully.")
		{		
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			const inputs = document.querySelectorAll('#password, #cpassword');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				window.open("B.php","_self");
			}, 5000);
            	}
		
		else
		{
			
			if(response === "Password not matched!")
			{
				document.getElementById("reg-exc").classList.add("open-popup");
				document.getElementById("exc-msg").style.display="block";
                		$('#exc-msg').html(response);
			}
			else
			{
				document.getElementById("reg-error").classList.add("open-popup");
				document.getElementById("error-msg").style.display="block";
                		$('#error-msg').html(response);
			}
		}	
            }
	})
    })
});

</script>