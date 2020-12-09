function validateForm() {
    var letters = /^[a-zA-Z\s]+$/;
    var numbers = /^[0-9]+$/;
    var fname=document.forms["payment_form"]["full_name"].value;
    var city=document.forms["payment_form"]["city"].value;
    var state=document.forms["payment_form"]["state"].value;
    var zip=document.forms["payment_form"]["zip"].value;
    var cardname=document.forms["payment_form"]["cardname"].value;
    var cardnumber = document.forms["payment_form"]["cardnumber"].value;
    var cvv=document.forms["payment_form"]["cvv"].value;
    
    if(!fname.match(letters)){
        alert("Full name must contain only letters");
        return false; 
    }
    if(!city.match(letters)){
        alert("City must contain only letters");
        return false; 
    }
    if(!state.match(letters)){
        alert("State must contain only letters");
        return false; 
    }
    if(!zip.match(numbers)){
        alert("Zip must contain only numbers");
        return false; 
    }
    if(!cardname.match(letters)){
        alert("Name on card must contain only letters");
        return false; 
    }
    if (cardnumber.length!=16 || !cardnumber.match(numbers)) {
        alert("The credit card number is incorrect! Must contain 16 digits");
        return false;
    }
    if(cvv.length!=3|| !cvv.match(numbers)){
        alert("CVV is incorrect! Must contain 3 digits");
        return false; 
    }
}

