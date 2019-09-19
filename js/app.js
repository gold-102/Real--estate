/* contact form section*/
function formSubmit(){
    var your_name = document.getElementById("your_name").value;
    var mobile_no = document.getElementById("mobile_no").value;
    var email_id = document.getElementById("email_id").value;
    var message = document.getElementById("message").value;
    var error = document.getElementById("error");
    
    //name validation
    if(your_name == ""){
        error.innerHTML = "**please enter name**";
        return false;
    }
    if(!isNaN(your_name)) {
        error.innerHTML ="**characters are allowed**";
        return false;
    }



    //mobile no validation
    if(mobile_no == ""){
        error.innerHTML = "**please enter mobile number**";
        return false;

    }
    if(isNaN(mobile_no)) {
        error.innerHTML = "**only numbers are allowed**";
        return false;
    }
    if(mobile_no.length != 10) {
        error.innerHTML = "**length of digits must be 10**";
        return false;
    }




   

    //email validagtion
    var regx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;
    if(email_id == "") {
        error.innerHTML = "**please enter email**";
        return false;
    }
    
    if(!regx.test(email_id))
    {
        error.innerHTML = "**Invalid Email**";
        return false;
    }
    
    /* */
    if(message == ""){
        error.innerHTML = "**please write your message**";
        return false;
    }

    


    
}
/* end of contact form*/




























/* signup form section*/


/*display form*/
document.getElementById('signup-btn').addEventListener("click", function() {
    document.querySelector('.form-modal_signup').style.display = "block";
    event.preventDefault();
});


/*hide form*/
document.querySelector('.modal-close-signup').addEventListener("click", function() {
    document.querySelector('.form-modal_signup').style.display = "none";
});



/*end of signup form section*/

/*signup form  validation */

function signupForm(){
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var password = document.getElementById("passwords").value;
    var conPassword = document.getElementById("confirm-password").value;

    var msg = document.getElementById("msg-1");
    //email validation
    var regxx = /^([a-z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,3})(.[a-z]{2,3})$/;
    if(email == "") {
        msg.innerHTML = "**please enter email**";
        return false;
    }
    
    if(!regxx.test(email))
    {
        msg.innerHTML = "**Invalid Email**";
        return false;
    }
    
    /* */




    //mobile no. validation
    if(mobile == "") {
        msg.innerHTML = "**please enter your mobile number**";
        return false;
    }

    if(isNaN(mobile)) {
        msg.innerHTML = "**only digits are allowed**";
        return false;
    }
    if(mobile.length != 10) {
        msg.innerHTML = "**length of digits must be 10**";
        return false;
    }












    //password validation
    if(password == "") {
        msg.innerHTML = "**please enter password **";
        return false;
    }
    
    if(password.length != 5 )
    {
        msg.innerHTML = "**length of password must be 5 **";
        return false;
    }

    if(conPassword == "") {
        msg.innerHTML = "**please Re-enter password **";
        return false;
    }
      
    if(password != conPassword) {
        msg.innerHTML = "**passwords do not match **";
        return false;
    }
   

}
/*end of signup form*/














































/*login form section*/

/*display form*/
document.getElementById('login-btn').addEventListener("click", function() {
    document.querySelector('.form-modal').style.display = "block";
    event.preventDefault();
});


/*hide form*/
document.querySelector('.modal-close').addEventListener("click", function() {
    document.querySelector('.form-modal').style.display = "none";
});


/* end of login form section*/



/*login form validation*/

function loginForm(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var msg_2 = document.getElementById("msg");

    if(username == ""){
        msg_2.innerHTML = "**please enter username**";
        return false;
    }

    if(password == ""){
        msg_2.innerHTML = "**please enter password**";
        return false;
    }

    if(password.length != 5) {
        msg_2.innerHTML = "**password length must be 5 digits long**";
        return false;
    }
}
/*end of login valid*/

