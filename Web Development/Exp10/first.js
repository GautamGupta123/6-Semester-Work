function check(){
    let dp=document.getElementById("cards1")
    let op=dp.options[dp.selectedIndex];
    if(op.value==="Select"){
       alert("Please select some card");
    }
    else if(op.value==="mastercard"){
        let a="";
        let inp=document.getElementById("inputing")
        if(inp.value.length>16){
            alert("Length of card is exceeded");
        }
        if(inp.value==''){
            alert("Please enter card Number");
        }
        for(i=0;i<=1;i++){
           a+=inp.value.charAt(i);
        }
        console.log(a);
        if((a.startsWith(51) || a.startsWith(52) || a.startsWith(53) || a.startsWith(54) || a.startsWith(54)) && inp.value.length==16){
                   alert("All good");
        }
    }
    else if(op.value==="visa"){
        let inp=document.getElementById("inputing")
        if(inp.value.length>16){
            alert("Length of card is exceeded");
        }
        if(inp.value==''){
            alert("Please enter card Number");
        }
        if((inp.value.length==13 || inp.value.length==16) && inp.value.charAt(0)=='4'){
            alert("All Good");
        }
        else{
            alert("Invalid Card Number");
        }
    }
    else if(op.value==="americanexpress"){
        let inp=document.getElementById("inputing")
        if(inp.value.length>15){
            alert("Length of card is exceeded");
        }
        if(inp.value==''){
            alert("Please enter card Number");
        }
       if(inp.value.length==15 && ((inp.value.charAt(0)=='3' && inp.value.charAt(1)=='4') || (inp.value.charAt(0)=='3' && inp.value.charAt(1)=='7'))){
        alert("All Good");
       }
       else{
        alert("Invalid Card Number");
       }
    }
}
