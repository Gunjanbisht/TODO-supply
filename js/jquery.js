   $(document).ready(function()
   {
   $('#submit').click(function()
    {
    if($('#name').val()==""){
        alert("please enter your name");
        return false;
    }
    if($('#mobileNo').val()=="")
    {
        alert("please enter your number");
        return false;
    }
    if($('#emailId').val()=="")
    {
        alert("please enter your email");
        return false;
    }
    if($('#emajquery.jsilId').val()==" /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z])$/;")
    {
        alert("please enter your valid email");
        return false;
    }
    if($('#password').val()=="")
    {
        alert("please enter your password");
        return false;
    }
    var password = $("#password").val();
    var cnfrmPass = $("#cnfrmPass").val();
    if(password != cnfrmPass)
    {
        alert("password do not match");
        return false; 
    }
 });
   
});