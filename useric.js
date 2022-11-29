<script type="text/javascript">
$(document).ready(function(){
    $('#addbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "useric.php",
            data: $('#managebb').serialize(),
            success: function(response){
		if(response === "Issue/Report Sent Successfully.We will inform you Shortly. (within 24hours.)")
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
