// /***
//  *  2 btn 
//  *  1- dark mood  
//  *  2- light mood 
//  *  3 Eelements => (Body) , (dark) , (light) 
//  * =========
//  *  2 - function change Style Dark Mood 
//  * function change Style light  Mood 
//  *  body.style.background = ""
//  *  body.style.color      = ""
//  * 
//  * call Funtion 
//  */

// const btn1 = document.querySelector('.dark'), 
//       btn2 = document.querySelector('.light')
//       body = document.querySelector('body') 

//     function changeToDarkStyle(){
//         body.style.background = 'black';
//         body.style.color      = '#fff';
//     }

//     function changeToLightStyle (){
//             body.style.background = '#fff';
//             body.style.color      = 'green';
//     }
//     // Call Function 
//     btn1.addEventListener('click' , changeToDarkStyle)
//     btn2.addEventListener('click' , changeToLightStyle)

//     /**
//      * function Get Net Salary * texRation => .1
//      *  1000 - .1  => 900 
//      */


//         function getNetSalary(Salary , taxRation){
//             let netSalary = Salary - (Salary * taxRation);
//             console.log(netSalary);
//         }
//         getNetSalary(10000 , .1)

// =============== Array =====================

    // let students = ["Ahmed" , "Mohamed" , "Eslam"]
    // students.push("Hatab")
    // students.unshift("sara") 
    // // students.pop()
    // students.shift()
    // console.log(students[4]);
    // console.table(students); 

    // let user = []
    // user.push("M1_D" , "S1_E" )
    
    
    
    // // 1:100
    //         let number = []
    //             for(let i = 1; i<=100; i++){
    //                 number.push(i)
    //             }
    
    let students = ["Ahmed" , "Mohamed" , "Eslam"]
            for(let i = 0; i <= 2; i++){ 
                console.log(students[i]);
            }


//Length 
let employee = ["Ahmed" , "Mohamed" , "Eslam" , "Ahmed" , "Mohamed" , "Eslam" ,  "Ahmed" , "Mohamed" , "Eslam"]
    for(let i = 0; i < employee.length; i++){
        console.log(employee[i]);
    }

        let salaries = [10000 , 20000 , 30000 ]
        for(let salary of salaries){
            console.log(salary);
        }



        let employeeSalary = [10000 ,  20000 , 30000] ,
            doubleSalary   = []
            for(let emp of employeeSalary){
                doubleSalary.push(emp * 2)
            }

// Task Check Salaries For Employee And Double Salar 

// Array  Method 
/***
 * Push
 * unshift 
 * pop 
 * shift 
 * splice
 */

