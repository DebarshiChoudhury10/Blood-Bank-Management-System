<script type="text/javascript">
$(document).ready(function(){
    $('#addbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "managebb.php",
            data: $('#managebb').serialize(),
            success: function(response){
		if(response === "Blood Bank added successfully.")
		{		
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			const inputs = document.querySelectorAll('#bbname, #pcode, #contact, #address, #blooda');
			inputs.forEach(input => {
				input.value = '';
			})
			location.reload();
            	}
		
		else
		{
			if(response === "Blood Bank already Added!")
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
