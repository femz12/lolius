// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
    var nameregex = /^[0-9 ]+$/;
         
         $.validator.addMethod("vqty", function( value, element ) {
             return this.optional( element ) || nameregex.test( value );
         }); 
    
        var nameregex = /^[0-9 ]+$/;
         
         $.validator.addMethod("vprice", function( value, element ) {
             return this.optional( element ) || nameregex.test( value );
         }); 
	 $("#register-form").validate({
      rules:
	  {
			itm_name: {
		    required: true,
			minlength: 3
			},
          itm_price: {
		    required: true,
            vprice: true
			},
          itm_qty: {
		    required: true,
            vqty: true
			
			},
          
          sub_cate: {
		    required: true,
			
			},
          city: {
		    required: true,
			},
          itm_type: {
		    required: true,
			
			},
          itm_size: {
		    required: true,
			minlength: 1
			},
          itm_img: {
		    required: true,
			
			},
          itm_img1: {
		    required: true,
			
			},
          itm_img2: {
		    required: true,
			
			},
          itm_img3: {
		    required: true,
			
			},
	
          biz_det:{
              required: true,
              minlength: 20
          },
          
           itm_spec:{
              required: true,
              minlength: 10
          },
          
           itm_des:{
              required: true,
              minlength: 10
          }
          
          
	   },
       messages:
	   {
            itm_name: "Please enter Item Name",
            sub_cate: "Please Select Item SubCategory",
            city: "Please Select Your Location",
            itm_type: "Please Select Item Type",
            itm_price:{
                    required: "Please enter Item Price",
                    vprice: "Item Price must contain only number"  
                },
           
           itm_qty:{
                    required: "Please enter Item Quantity",
                    vqty: "Item Quantity must contain only number"  
                },
           
            itm_spec:{
                      required: "Please provide Item Specifcation",
                      minlength: "Item Specification is too short must be at least 10 characters"
                     },
           itm_des:{
                      required: "Please provide Item Description",
                      minlength: "Item Description is too short must be at least 10 characters"
                     },
           
            password:{
                      required: "Please provide a password",
                      minlength: "Password must be at least have 6 characters"
                     },
            
           itm_img:{
               required: "Please Select First Item Image",
           },
           
           itm_img1:{
               required: "Please Select Second Item Image",
           },
           
           itm_img2:{
               required: "Please Select Third Item Image",
           },
           
           itm_img3: {
           required: "Please Select Fourth Item Image", 
       },
        biz_addr:{
            required: "Please Enter A Business Address",
            minlength: "Business Address is too short"
                },
           biz_det:{
               required: "Please Fill in this space",
               minlength: "Information is too short, atleast 20 words"
           }
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				//var data = $("#register-form").serialize();
				 var data = $('#biz_name').val();
				 var data1 = $('#biz_loc').val();
				 var data2 = $('#biz_email').val();
				 var data3 = $('#biz_add').val();
				 var data4 = $('#itm_cate').val();
				 var data5 = $('#itm_name').val();
				 var data6 = $('#itm_price').val();
				 var data7 = $('#itm_qty').val();
				 var data8 = $('#itm_size').val();
				 var data9 = $('#itm_des').val();
				 var data10 = $('#sub_cate').val();
				 var data11 = $('#itm_spec').val();
				 var data12 = $('#web').val();
				 var data13 = $('#itm_type').val();
				 var data14 = $('#city').val();
				
				$.ajax({
				
				type : 'POST',
				url  : 'addproduct.php',
				data : {biz_name: data, biz_loc: data1, biz_email: data2, biz_add: data3, itm_cate: data4, itm_name: data5, itm_price: data6, itm_qty: data7, itm_size: data8, itm_des: data9, sub_cate: data10, itm_spec: data11, web: data12, itm_type: data13, city: data14},
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Processing...');
				},
				success :  function(data)
						   {						
								if(data=="registered")
								{
                                    $("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Continue to Upload Picture');
									
									$("#btn-submit").html('<img src="btn-ajax-loader.gif" /> &nbsp; Adding Item...');
                                    
									
                                    
                                     window.location = 'uploadz/index.php';
                                    
                                   // $("#register-form")[0].reset();
									
								}
								else{
										
									$("#error").fadeIn(1000, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; An Erro Occoured');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   
	   
	 

});