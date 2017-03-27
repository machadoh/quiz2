class register {
	var $first;
	var $last;
	var $email;
		
	function __construct()
	{
		echo "In constructor!";
		$first="";
		$last="";
		$email="";
	}
	function __constructor_multiple($n, $e, $a)
	{
		$first=$n;
		$last=$e;
		$email=$a;
	}
	function set_first($n)
	{
		$first=$n;
	}
	function set_last($e)
	{
		$last=$e;
	}
	function set_email($a)
	{
		$email=$a;
	}	
	
	if(first = getCookie("first")) document.myForm.first.value = first;
	if(last = getCookie("last")) document.myForm.last.value = last;
	if(email = getCookie("email")) document.myForm.email.value = email;
  
	function setCookie(name, value)
	{
		document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
	}
	function storeValues(form)  
	{
		setCookie("first", form.first.value);
		setCookie("last", form.last.value);
		setCookie("email", form.email.value);
		return true;
	}	
	function __toString()
	{
		return "HI," . $this->first . ", you recently signed up with the email address:" . $this->email . ", thank you!";
	}
}