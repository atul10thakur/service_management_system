

document.getElementById("login").addEventListener("click",(e)=>{
e.preventDefault()
const email = document.getElementById("login_email").value;
const password = document.getElementById("login_password").value;
const msg = document.getElementById("login_msg")
if(email=="" || password==""){
  msg.innerHTML = "<div class='btn btn-solid bg-danger text-white mb-2'>Please Fill all the fields</div>"
}
else{

   const login_Obj = new XMLHttpRequest();

    login_Obj.open("POST" , "checkUser.php" , "true");

    login_Obj.responseType = "text";

    login_Obj.onload = ()=>{
        if(login_Obj.readyState == 4){
            if(login_Obj.status == 200){
                if(login_Obj.responseText == 1){
                    msg.innerHTML = "";
                   window.location.href="../../Requester/requester.php";
                }
                else{
                    msg.innerHTML = `<div class='btn btn-solid bg-danger text-white mb-2'>${login_Obj.responseText}!!</div>`;
                   }
            }
        }
    }

   const data = {
        email:email.trim() ,
        password:password.trim()
    }
    login_Obj.send(JSON.stringify(data));
}
})