$(document).ready(function(){
  $('.grid_8 form').validate({
    rules: {
      user: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
    
      psw: {
        minlength: 6,
        required: true
      },
      psw2: {
        equalTo: "#pwdd"
      },
        newpass: {
        minlength: 6,
        required: true
      },
      newpass2: {
        equalTo: "#pwddd"
      },
        desig: {
        required: true
      },
        ticket: {
        required: true
      },
        cname: {
        required: true
      },
         ticket: {
        required: true
      },
        cphone: {
        required: true
      },
        cadd: {
        required: true
      }
	
	
    },
    success: function(label) {
      label.text('OK!').addClass('valid');
    }
  });
  $('.grid_6 form').validate({
    rules: {
      user: {
        required: true
      },
      pass: {
        required: true
      }
    	
    },
    success: function(label) {
      label.text('OK!').addClass('valid');
    }
  });
  
   
});

