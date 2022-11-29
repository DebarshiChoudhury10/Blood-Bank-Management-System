<script type="text/javascript">
$(document).ready(function(){
    $('#addbutnup').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "mbbupdate.php",
            data: $('#managebbu').serialize(),
            success: function(response){
		if(response === "Blood Bank Updated successfully.")
		{		
			document.getElementById("modaladds").classList.remove("openm-popup");
			document.getElementById("reg-success").classList.add("open-popup");
			document.getElementById("success-msg").style.display="block";
                	$('#success-msg').html(response);
			console.log(response);
			const inputs = document.querySelectorAll('#bbnameUp, #pcodeUp, #contactUp, #addressUp, #bloodaUp');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				location.reload();
			}, 3000);
            	}
		
		else
		{
			if(response === "It is Unchanged.If you don't want to update please press cancel.")
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
