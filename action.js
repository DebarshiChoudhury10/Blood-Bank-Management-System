<script type="text/javascript">
		blocks = document.getElementsByClassName('block');
		Array.from(blocks).forEach((element)=>{
			element.addEventListener("click", (e)=>{
				console.log("action ", );
				tr =  e.target.parentNode.parentNode;
				srno = tr.getElementsByTagName("th")[0].innerText;
				usertype = tr.getElementsByTagName("td")[3].innerText;
				userstatus = tr.getElementsByTagName("td")[4].innerText;
				if(confirm("Do you want to block this user?"))
				{
					console.log("yes");
					$.ajax({
						method: "post",
						url: "actionblock.php",
						data: {
							"data": srno,
							"data1": usertype,
							"data2": userstatus
						      },
						success: function(response){
							console.log("Success",response);
							location.reload();
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
		unblocks = document.getElementsByClassName('unblock');
		Array.from(unblocks).forEach((element)=>{
			element.addEventListener("click", (e)=>{
				console.log("action ", );
				tr =  e.target.parentNode.parentNode;
				srno = tr.getElementsByTagName("th")[0].innerText;
				usertype = tr.getElementsByTagName("td")[3].innerText;
				userstatus = tr.getElementsByTagName("td")[4].innerText;
				if(confirm("Do you want to unblock this user?"))
				{
					console.log("yes");
					$.ajax({
						method: "post",
						url: "actionunblock.php",
						data: {
							"data": srno,
							"data1": usertype,
							"data2": userstatus
						      },
						success: function(response){
							console.log("Success",response);
							location.reload();
							if(response === "You don't have the Action Permission for Admin.")
								alert(response);
						}		
					})
				}
				else{
					console.log("no");
				}
			})
		})


</script>

