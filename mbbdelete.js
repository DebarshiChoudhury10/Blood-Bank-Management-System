<script type="text/javascript">
		deletes = document.getElementsByClassName('delete');
		Array.from(deletes).forEach((element)=>{
			element.addEventListener("click", (e)=>{
				console.log("delete ", );
				tr =  e.target.parentNode.parentNode;
				srno = tr.getElementsByTagName("th")[0].innerText;
				if(confirm("Do you want to delete?"))
				{
					console.log("yes");
					$.ajax({
						method: "post",
						url: "mbbdelete.php",
						data: {
							"data": srno
						      },
						success: function(response){
							console.log("Success",response);
							setTimeout(function(){
								location.reload();
							}, 3000);
							if(response === "You don't have the Action Permission for Admin.")
								alert(response);
							//
						}	
					})
				}
				else{
					console.log("no");
				}
			})
		})
</script>