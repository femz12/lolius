// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			name: {
		    required: true,
			minlength: 3
			},
			password: {
			required: true,
			minlength: 6,
			maxlength: 15
			},
			cpassword: {
			required: true,
			equalTo: '#password'
			},
			email: {
            required: true,
            email: true
            },
            phone: {
            required: true,
            minlength: 11,
			maxlength: 11
            },
            biz_cate: {
                required: true,
                
            },
          
          biz_offer: {
                required: true,
                
            },
          
          biz_loc: {
              required: true,
              
          },
          
          biz_lga: {
              required: true,
              
          },
          
           biz_stage: {
              required: true,
              
          },
          
          biz_addr: {
              required: true,
              minlength: 4
          },
          biz_det:{
              required: true,
              minlength: 4
          },
          
          web:{
              required: true,
              minlength: 4
          }
          
          
	   },
       messages:
	   {
            name: "Please enter your Business Name",
            password:{
                      required: "Please provide a password",
                      minlength: "Password must be at least 6 characters"
                     },
            email: { 
                required: "Please enter an Email Address",
                email: "Please enter a valid Email Address"
            },
			cpassword:{
						required: "Please retype your password",
						equalTo: "Password doesn't match !"
					  },
           
           phone:{
						required: "Please enter your Phone Number",
						minlength: "password at least have 11 characters",
						maxlength: "password at least have 11 characters",
						
					  },
           biz_cate:{
               required: "Please Select Business Category",
           },
           
           biz_offer:{
               required: "Please Select Business Offer",
           },
           
           biz_stage:{
               required: "Please Select Business Stage",
           },
           
           biz_loc: {
           required: "Please Select A Business Location", 
       },
            biz_lga: {
           required: "Please Select A Business LGA", 
       },
        biz_addr:{
            required: "Please Enter A Business Address",
            minlength: "Business Address is too short"
                },
           biz_det:{
               required: "Please Fill in this space",
               minlength: "Information is too short"
           },
           
            web:{
               required: "Please Fill in Your Nearest Bus Stop",
               minlength: "Information is too short"
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
				url  : 'ajax-reg.php',
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
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry email already taken !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Registering Seller...');
                                    
                                    window.location = 'success.php';
									//setTimeout('$(".form-signin").fadeOut(500, function(){ $(".signin-form").load("success.php"); }); ',2000);
									
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