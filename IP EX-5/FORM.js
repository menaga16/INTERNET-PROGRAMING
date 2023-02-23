let idError = document.getElementById('iderror');
let name_Error = document.getElementById('name_error');
let dobError = document.getElementById('doberror');
let ageError = document.getElementById('ageerror');
let adError = document.getElementById('aderror');
let adCrt = document.getElementById('adcrt');
let contactError=document.getElementById('contacterror');
let INTRESTError=document.getElementById('INTERESTerror');
let EXPError=document.getElementById('EXPerror');
let submit=document.getElementById('submiterror');

function id_valid() {
    let i = document.getElementById("eid").value;
    if (i.length == 0) {
        idError.innerHTML = 'ID is required';
        return false;
    }
    if (!i.match(/^[a-zA-z]{2}[0-9]{4}/) || i.length>6) {
        idError.innerHTML = 'Enter Valid Employee ID';
        return false;
    }
    idError.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}

function name_valid() {
    let name = document.getElementById("name").value;
    if (name.length == 0) {
        name_Error.innerHTML = 'ENTER NAME!!!';
        return false;
    }
    if (!n.match(/^[A-z a-z]*\s{1}[A-Z a-z]/)) {
        name_Error.innerHTML = 'Enter Valid Name';
        return false;
    }
    name_Error.innerHTML = '<i class="fa fa-check-circle"></i>';
    return true;
}

function date_valid() {
        let dateString = document.getElementById("edob").value;
        let regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
        if (regex.test(dateString)) {
            let parts = dateString.split("/");
            let dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            let dtCurrent = new Date();
            dobError.innerHTML = "Eligibility 21 years ONLY."
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 21) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 21) {
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            let age=dtCurrent.getFullYear() - dtDOB.getFullYear();
            dobError.innerHTML = '<i class="fa fa-check-circle"></i>';
            document.getElementById("eage").value=age;
            agevalid();
            ageError.innerHTML='<i class="fa fa-check-circle"></i>';
            return true;
        } else {
            dobError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
            return false;
        }
}
function age_valid(){
    document.getElementById('eage').onkeydown = function(e){
        e.preventDefault();
    }
}
function add_valid()
{
    let ad=document.getElementById("ead").value;
    let required=25;
    let left=required-ad.length;

    if(ad.length==0){
        adError.innerHTML="Error: Enter Address";
        return false;
    }
    if(left>0)
    {
        adError.innerHTML=left+" characters required";
        return false;
    }
    else{
    adError.innerHTML=" ";
    }
    adCrt.innerHTML='<i class="fa fa-check-circle"></i>';
    return true;
}
function contact_valid(){
    let c=document.getElementById("contact").value;
    if(c.length==0)
    {
        contactError.innerHTML="Enter Contact Number";
        return false;
    }
    if(c.length>10)
    {
        contactError.innerHTML="Contact Number should be 10 digits";
        return false;
    }
    if(!c.match(/^[0-9]{10}/) || c.length>10)
    {
        contactError.innerHTML="Enter Valid Contact Number";
        return false;
    }
    contactError.innerHTML='<i class="fa fa-check-circle"></i>';
    return true;
}
function INTEREST_valid(){
    let ai=document.getElementById("aoi").value;
    if(ai.length==0)
    {
        INTERESTError.innerHTML="Enter Area of Interest";
        return false;
    }
    if(!ai.match(/^[A-Z a-z]/))
    {
        INTERESTError.innerHTML="Enter Valid area of Interest";
        return false;
    }
    INTERESTError.innerHTML='<i class="fa fa-check-circle"></i>';
    return true;
}
function EXP_valid(){
    let y=document.getElementById("EXP").value;
    if(y.length==0)
    {
        EXPError.innerHTML="Enter Year of Experiencce";
        return false;
    }
    EXPError.innerHTML='<i class="fa fa-check-circle"></i>';
    return true;
}
function submit_valid()
{
    if(namevalid()==true && idvalid()==true && datevalid()==true && advalid()==true && aoivalid()==true && yoevalid()==true && contactvalid()==true)
    {
        alert("REGISTERED SUCCESSFULLY");
    }
    else{
        alert("Enter all the details to submit");
        return;
    }
}
function clear()
{
    document.getElementById("form").reset();
}