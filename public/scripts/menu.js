let btn=document.querySelector("#btn");
let body1 = document.querySelector("body");
let modal=document.querySelector(".modal_info");
let close =document.querySelector('.close')
btn.onclick =()=>{
  modal.style = "transform: translateY(0px);transition: .8s;";
  body1.style = "background-color:#ccd;"
}
close.onclick = () =>{
   modal.style = "transform: translateY(-1000px); transition: .8s;"
   body1.style = ""
}


let b = document.querySelectorAll('.btn_closse');
b.forEach(element => {
  element.addEventListener('click', ()=>{
    let v = element.value;
    document.querySelector('.v').value=v;
    console.log(document.querySelector('.v').value);
  })
});
