    
    /**Tasks  */
    //Check The Number Is Even or Odd
    // Fizz Buzz Game 
    //  Compute Circle Area and Circumference 
    // check from two given integers, whether one is positive and another one is negative. 
    // print the sum of two numbers 
    //============ Data Type =================

    let str = "Hello" // String 
    console.log(typeof(str)); 
    let num = 100;  //Number 
    console.log(typeof(num)); 
    let bool = true; //Boolean 
    console.log(typeof(bool)); 
    let nud = undefined;  //Undefined 
    console.log(typeof(und)); 
    let nul = null ;      // Object 
    console.log(typeof(nul)); 
    // Array & Object 
    let arr = [1,2,3,4,5,6,7,8] // Array 
    console.log(arr);
    let obj = {name : "Eslam" , age : 24} //Object  
     //============ Operators =================================
     //Arithmetic Operators
     let sum = 10 + 5; //Sumition 
     let sub = 10 - 5; //Subtraction 
     let mul = 10 * 5; // Multiplication 
     let div = 10 / 5; // Division
     //Comparison 
        /***
         * iS Equal 
         * is Strict Equal 
         * is Not Equal 
         * is Not Strict Equal  
         * is  Greater Than >  
         * is Greater Tham Equal >= 
         * is  less Than < 
         * is less Than Equal <=
         *  is true if(true)
         * is true if(true)
         * 
         * 
         * 
         */

        let isEqual = (10 == "10"); //true 
        let isStrictEqual = (10 === "10"); //false
        let isNotEqual = (10 != "10");
        let IsNotStrictEqual = (10 !== "10"); 

        //=======Logical 
        /**
         * and 
         * or  
         * not 
         * 
         */
                let and  = (true && false) //false 
                let or   = (true || false ) //true 
                let not  = !true           //false 

                //==========conditionals ==========================================

            /***
             * DASHBOARD UserTYpe  Admin & Modertor  & Emplooye  
             * Task  Print 1 : 15 
             * Fizz : Buzz : FizzBuzz
             *   For Loop 1: 15 
             * condition 
             * 
             * 
             */     

            for(let i = 1 ; i <= 15 ; i++){
                if( i % 3 === 0 && i % 5 ===0 ){
                    console.log("FizzBuzz");
                } else if(i % 5 === 0 ){
                    console.log("Buzz");
                }else if(i % 3 === 0 ){
                    console.log("Fizz");
                }else{
                    console.log(i);
                }
            }


                if(condition){
                    //code
                }else if (anotherCondition){
                    //code 
                }else{
                    //code
                }

// //Ternary Opeator
//                 let result = (condition) ? 'true' : 'false ';
