const form=document.querySelector(".container form");
const continueBtn=form.querySelector(".btn");
const error_text=form.querySelector(".error_text");

form.onsubmit= (e)=>{
    e.preventDefault();
}
continueBtn.onclick= ()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST","php/signup.php",true);
    xhr.onload= ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status=== 200){
                let data =xhr.response;
                    if(data === "success"){
                        location.href="users.php"
                    }else{
                        error_text.style.display="block";
                        error_text.textContent=date; 
                    }
            }
        }
    }
    let formData=new FormData(form);
    xhr.send(formData);
}