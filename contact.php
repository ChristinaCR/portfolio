<?php include("includes/header.php");?>

<title>Portfolio Contact</title>

<?php include("includes/nav.php");?>

		<div id="main">
        
<?php include("includes/contactinfo.php");?>
               
	        <div id="sectmiddle">
	        	<h2>Contact</h2>
				<h3>Interested in Knowing More? Let's Talk.</h3>
					 <form action="contact-form-handler.php" method="post" name="contactform">
						<label>Your Name:</label>
						<input type="text" name="name" id="name">
						<label>Your Company:</label>
						<input type="text" name="company" id="company">
						<!--Don't forget that the label and input tags are inline therefore if you would like to present them vertically, in CSS, display them block-->
						<label>Your Email:</label>
						<input type="email" name="email" id="email">
						<label>Message:</label>
						<textarea name="comments" id="comments" rows="6">
						</textarea>
						<br />
						<button class="red" type="submit">Submit</button>   
					</form>		
	        </div><!--end sectmiddle-->
              
		</div><!--end main-->
			
<?php include("includes/footer.php");?>	
		
	</div><!--end wrapper-->
 
<script language="JavaScript">
// Code for validating the form
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>


</body>
</html>