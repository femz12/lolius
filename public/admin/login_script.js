// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			
			password: {
			required: true,
			},
			email: {
            required: true,
            email: true
            }
           
	   },
       messages:
	   {
            password:{
                      required: "Please provide a password",
                      
                     },
            email: { 
                required: "Please enter an Email Address",
                email: "Please enter a valid Email Address"
            }
			
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'ajax-login.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Processing...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(1000, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry incorrect Email or Password!</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Login To Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Logging Into Account...');
                                    window.location = 'dashboard.php';
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("signup.php"); }); ',2000);
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});