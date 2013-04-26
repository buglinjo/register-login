<div id="register">
<strong>Register</strong>
	<form action="insert.php" method="post" onsubmit="return validateForm(this);">
		Username: <input type="text" name="user"><br>
		Password: <input type="password" name="pass"><br>
		<input type="submit">
	</form>
</div>	
<script type="text/javascript">
	function validateForm(formElement) {
	  if(formElement.pass.value.length < 5 || formElement.pass.value.length > 20 || formElement.pass.value == ''){
	  	alert('Please enter a password that is between 5 and 20 characters long and not empty string');
	  	return false;
	  }
	  return true;
	}
</script>