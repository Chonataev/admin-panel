
let update_modal=document.querySelector(".update_modal");
let update_btn = document.querySelectorAll(".btn_closse");
let close_ = document.querySelector('.close_btn')

update_btn.forEach(element => {
  element.onclick =()=>{
    update_modal.style = "transform: translateX(0px);transition: .8s;";
    body1.style = "background-color:#ccd;"
    
  }
});
close_.onclick = () =>{
   update_modal.style = "transform: translateX(-2000px); transition: .8s;"
   body1.style = ""
}
