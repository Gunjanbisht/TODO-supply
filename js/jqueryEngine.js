$( function() {
    $('#birthDate').datepicker({
        dateFormat:'yy-mm-dd'
       
    });
});
    $('#myform').validate({
        rules:{
           
            name:"required",
            mobileNo:"required",
            emailId:{
            
            required:true,
            emailId:true,
            },
            password:{
            required:true,
            minlength:5,       
            },
            cnfrmPass:{
            required: true,
            equalTo:"#password"
            }
            
            },
            messages:{
            name:"please enter your name",
          mobileNo:"please enter your mobile number",
            emailId:{
            required:'please enter an email address',
            emailId:'please enter a <em>valid</em> email address.'
            },
            password:{
            required:"please enter your password",
            minlength:"Your password must be at least 5 characters long",
            },
            cnfrmPass:{
    
            required:"wrong password",
            } 
            },
             
            submitHandler: function(form) {
            form.submit();
            }
            });
   
  $(function(){
      var countryOption;
      $.getJSON(countries.json,function(result){
          $.each(result,function(i,country){
              countryOption+="<option value='"
              "'>"
              +country.name+
              "</option>";
          });
          $('#country').html(countryOption);
      });
  });


