<script type="text/javascript">
$(document).ready(function(){
    $('#loginbtn').click(function(e){
        e.preventDefault();
        $.ajax({
            method: "post",
            url: "login.php",
            data: $('#login').serialize(),
            success: function(response){
		if(response === "admin Login Successful")
		{
			document.getElementById("log-success").classList.add("open-popup");
			document.getElementById("lsuccess-msg").style.display="block";
                	$('#lsuccess-msg').html("Please wait, redirecting.....");
			const inputs = document.querySelectorAll('#email, #password, #option');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				window.open("A.php","_self");
			}, 5000);
		}
		else if(response === "user Login Successful")
		{
			document.getElementById("log-success").classList.add("open-popup");
			document.getElementById("lsuccess-msg").style.display="block";
                	$('#lsuccess-msg').html("Please wait, redirecting.....");
			const inputs = document.querySelectorAll('#email, #password, #option');
			inputs.forEach(input => {
				input.value = '';
			})
			setTimeout(function(){
				window.open("U.php","_self");
			}, 5000);
		}
		else if(response === "Incorrect Email or Password or User Type!")
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
	})
    })
});

</script>