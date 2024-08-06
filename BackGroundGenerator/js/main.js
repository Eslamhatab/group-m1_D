// linear-gradient(to right , red , green)
/***
 * Select Input => Input1 & Input2
 * select Body => id  
 * function SetUpBackground 
 */

let body = document.querySelector("#gradirnt-background"),
    input1 =document.querySelector(".input1"),
    input2 =document.querySelector(".input2")

    // console.log(body);
    
    //function SetUp BackGround
    function setUpBackground(){
        body.style.background =
            `linear-gradient(to right , ${input1.value} , ${input2.value})`;
    }

    //call Function  
    input1.addEventListener("input", setUpBackground);
    input2.addEventListener("input" , setUpBackground);