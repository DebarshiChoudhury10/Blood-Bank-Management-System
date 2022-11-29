<script type="text/javascript">
$(document).ready(function(){
    $('#addbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "userbrtp.php",
            data: $('#managebb').serialize(),
            success: function(response){
		if(response === "Request Sent Successfully.We will inform you Shortly. (Issue Complain If you don't get email within 48hours.)")
		{		
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			const inputs = document.querySelectorAll('#blooda');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				location.reload();
			}, 3000);
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
