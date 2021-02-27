

window.onload=function (){

    let button =document.getElementById("sub");
    button.onclick=validateForm;
}

function validateForm(event){
    //prevent form from being submitting
    event.preventDefault();



    let isValid=true;
    //Error reporting for first name
    let nameContent= document.getElementById("fname");
    let nameErr=document.getElementById("fnameError");
    if(nameContent.value==""){
        nameErr.textContent="Please provide your first name.";
        nameErr.style.color="red";
        document.getElementById("fname").style.border="red!important";
        isValid=false;

    }
    else nameErr.textContent="";

    //Error reporting for last name
    let lastNameContent = document.getElementById("lname");
    let lastNameErr=document.getElementById("lnameError");
    if(lastNameContent.value==""){
        lastNameErr.textContent="Please enter your last name";
        lastNameErr.style.color="red";
        isValid=false;


    }
    else lastNameErr.textContent="";

    //Validate email
    let emailContent = document.getElementById("personEmail");
    let emailError = document.getElementById("personEmailError");
    let rule = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let checkBox=document.getElementById("subscribeNews");
    if(emailContent.value.length>0){
        if(emailContent.value.match(rule)){
           emailError.textContent="";
        }
            else if(!emailContent.value.match(rule)) {
            emailError.textContent = "Please enter a valid email.";
            emailError.style.color = "red";
            isValid = false;

        }
    }

    else if ((checkBox.checked) && (emailContent.value.length==0)){
        if(emailContent.value.match(rule)){
            emailContent.textContent="";
        }
        else
            emailError.textContent="Please enter a valid email.";
        emailError.style.color="red";
        isValid=false;
        console.log("4");
    }



    //to validate linkden link
    let linkLink=document.getElementById("linkd");
    let linkError=document.getElementById("urlError");
    let linkdenRule=/^[a-zA-Z]+:[/a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(linkLink.value.length>0) {
        if(linkLink.value.match(linkdenRule)){
            linkError.textContent = "";
            isValid=true;
        }
        else if(!linkLink.value.match(linkdenRule)){
            linkError.textContent="Please Enter URL in correct format.";
            linkError.style.color="red";
            isValid=false;

        }

    }

    let testArea=document.getElementById("textArea");
    let textError= document.getElementById("textError");
    if(testArea.value.length==0) {
        textError.textContent = "This field cannot be empty.";
        textError.style.color = "red";
        isValid = false;

    }
    else textError.textContent="";


    if(isValid){
        let button = event.target;
        return button.form.submit();

    }

}


let otherOption = document.getElementById("other");
otherOption.style.display="none";
let catageoryValue = document.getElementsByTagName("select")[0];
catageoryValue.onchange = function otherBox() {

    if (catageoryValue.value === "other") {
        otherOption.style.display = "inline";
    } else {
        otherOption.style.display = "none";
    }
}



function saveEmail() {
    let validMail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    let inputEmail = document.getElementById('subEmail').value;
    let displayEmail = document.getElementById('emailConfirm');
    if (inputEmail.match(validMail)) {
        displayEmail.style.color = "Green";
        displayEmail.innerText = inputEmail + " has been added to our email list.";
    } else {
        displayEmail.style.color = "red";
        displayEmail.innerText = "Please provide us valid email.";
    }

}


function displayRadio(){
    let radioButtons= document.getElementById("radioButtons");
    let checkBox=document.getElementById("subscribeNews");
    if(checkBox.checked){
        radioButtons.style.display="inline";
    }
    else radioButtons.style.display="none";
}

