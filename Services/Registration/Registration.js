// ......................................More Validation has to be Done .................
// ......................................Also Give Some Effects On the Form .................

document.getElementById("registration_btn").addEventListener("click",()=>{

window.scrollTo({               // ........... Smoothning  And Sliding Effect When User Clicks On Registration ............... 
    top: 1300,
  left: 0,
  behavior: 'smooth'
})

})


//.................................. Submitting Form And Creating User .............................


document.getElementById("sign_up").addEventListener("click", (e)=>{
    e.preventDefault()
  const name =  document.getElementById("reg_name").value
   const email =  document.getElementById("reg_email").value
  const password =  document.getElementById("reg_password").value
  
const Obj = new XMLHttpRequest();

Obj.open("POST" , "http://localhost/service_management_system/Services/Registration/signUp.php" , 'true') ;

Obj.setRequestHeader("Content-Type","application/json")

Obj.onload = ()=>{

 if(Obj.readyState === 4){

    if(Obj.status === 200){
    
      // ..............If User Successfully Created Account .............
     
        if(Obj.responseText == 1){      
            document.getElementById("reg_msg").innerHTML = "<div class = 'bg-info btn btn-md btn-block text-white'>Account Created Successfully , Now You can login</div>"
           document.getElementById("reg_form").reset();
        }

        // ............................. If User Gets Error ...............

        else{
            document.getElementById("reg_msg").innerHTML = `<div class='btn btn-block bg-info text-white btn-lg'>
            ${Obj.responseText} !!!
            </div> `
        }
}
 }
}

const Reg_data = {
    name:name.trim() ,
    email: email.trim(),
    password:password.trim()
}

 Obj.send(JSON.stringify(Reg_data));

    })