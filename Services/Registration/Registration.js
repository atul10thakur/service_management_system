document.getElementById("registration_btn").addEventListener("click",()=>{

window.scrollTo({
    top: 1300,
  left: 0,
  behavior: 'smooth'
})

})

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
    
     
        if(Obj.responseText == 1){
            document.getElementById("reg_msg").innerHTML = "<div class = 'bg-info btn btn-md btn-block text-white'>Account Created Successfully , Now You can login</div>"
           document.getElementById("reg_form").reset();
        }
        else{
            document.getElementById("reg_msg").innerHTML = `<div class='btn btn-block bg-info text-white btn-lg'>
            ${Obj.responseText} !!!
            </div> `
        }
}
 }
}

const Reg_data = {
    name:name ,
    email: email,
    password:password
}

 Obj.send(JSON.stringify(Reg_data));

    })