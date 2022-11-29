<script type="text/javascript">
$(document).ready(function(){
    $('#registerbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "register.php",
            data: $('#register').serialize(),
            success: function(response){
		if(response === "User registered successfully.")
		{		
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			const inputs = document.querySelectorAll('#username, #fullname, #email, #password, #cpassword, #option');
			inputs.forEach(input => {
				input.value = '';
			})
            	}
		
		else
		{
			if(response === "Email ID already Registered!")
			{
				document.getElementById("reg-exc").classList.add("open-popup");
				document.getElementById("exc-msg").style.display="block";
                		$('#exc-msg').html(response);
			}
			else if(response === "User Name already exist!")
			{
				document.getElementById("reg-exc").classList.add("open-popup");
				document.getElementById("exc-msg").style.display="block";
                		$('#exc-msg').html(response);
			}
			else if(response === "Password not matched!")
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
