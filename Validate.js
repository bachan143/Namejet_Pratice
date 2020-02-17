$(document).ready(function()
{


	   $.validator.addMethod('strongPassword',function(value,element)
	   {
              return this.optional(element)
              || value.length>=6
              && /\d/.test(value)
              && /[a-z]/i.test(value);

	   },'Your Password must be at least characters long and contain at least one number and one char..')
    $('#form1').validate(
   {
       errorClass: 'errors',
   	rules:
   	{
   		email:
   		{
   			required:true,
   			email:true

   		},
      username:
      {
           required:true,
           	nowhitespace:true
      },
   		password1:
   		{
                 required:true,
                 strongPassword:true
   		},
   		password2:
   		{
   			required:true,
   			equalTo: "#password"
   		},
      captcha:
      {
           required:true
      },
      policy1:
      {
          required:true

      },
      policy2:
      {
        required:true
      }

   	},
   	messages:
   		{
   			email:
   			{
   				required:'Please enter an Email Adress',
   				email:'Please enter valid email'
   			},
        username:
        {
          required:'Please Enter a Username',
          nowhitespace:' No spaces or symbols.'

        },
        	password1:
          {
               required:' A password is required.'
          },
          password2:
          {
            required:'Confirm password is required'
          },
          captcha:
          {
             required:'Captcha security code is required'
          },
          policy1:
          {
               required:'Privacy Policy is required'
          }


   		}




   });
   $('#form2').validate({
     rules:
     {
       username1:
       {
          required:true

       },
       pwd:
       {
         required:true
       }


     },
     messages:
     {
       username1:
       {
           required:'Please enter a username'
       },
       pwd:
       {
         required:'Please enter a password'
       }

     }

   });


});
