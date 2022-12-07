function employee()
{
    document.getElementsByClassName("form1").innerHTML = txt;
}


function myfunction(){
    var x = document.getElementById("password");
    if(x.type == "password"){
        x.type = "text";
    }else{
        x.type = "password";
    }
}