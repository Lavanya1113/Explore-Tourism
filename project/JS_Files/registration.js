     var k=1;
     function valusername(id){
        var username=document.getElementById('uname');
        if(username.value.length<5){
                document.getElementById('username').style.visibility='visible';
                username.style.border="2px orange solid";
                k=0;
            }
            else{
                document.getElementById('username').style.visibility='hidden';
                username.style.border="2px solid #00ff00";
            }
       }
       function valemail(id){
        var email=document.getElementById('email');
        var emailRegex = /^\S+@\S+\.\S+$/
        if(!emailRegex.test(email.value)){
            document.getElementById('emailid').style.visibility='visible';
                email.style.border="2px orange solid";
                return false;
                k=0;
        }
        else{
            document.getElementById('emailid').style.visibility='hidden';
                email.style.border="2px solid #00ff00";
        }
       }
       function valpwd(id){
        var pwd=document.getElementById('password1');
        var pwd1Regex=/^[a-zA-z]+(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=!])(?=.*[0-9])/;
        if(!pwd1Regex.test(pwd.value)){
            document.getElementById('pwd1').style.visibility='visible';
                pwd.style.border="2px orange solid";
                return false;
                k=0;
        }
        else{
            document.getElementById('pwd1').style.visibility='hidden';
                pwd.style.border="2px solid #00ff00";
        }
       }
       function valconfirmpwd(id){
        var pwd=document.getElementById('password2');
        var pwd1=document.getElementById('password1').value;
        if(pwd.value!=pwd1){
            document.getElementById('pwd2').style.visibility='visible';
                pwd.style.border="2px orange solid";
                return false;
                k=0;
        }
        else{
            document.getElementById('pwd2').style.visibility='hidden';
                pwd.style.border="2px solid #00ff00";
        }
       }
      
      
   console.log(k)
        function validateForm(){
        var username=document.getElementById('uname').value;
        console.log(k);
        // var email=form.elements['email'].value;
        // var password1=form.elements['password'].value;
        // var password2=form.elements['confirm-password'].value;
        // var mobilenum=form.elements['phone-number'].value;
        // var firstname=form.elements['firstname'].value;
        // var lastname=form.elements['lastname'].value; 
        if(k=0){
            alert("Can't be null");
            return false;
        }
        else{
            return true;
        }
    }
   