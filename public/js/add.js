let add = document.querySelector(".add");
let close = document.querySelector(".close")
let model = document.querySelector(".model");

add.addEventListener("click", (evt)=>{
    model.style.display = "flex";
});

close.addEventListener("click", (evt)=>{
    console.log("close");
    model.style.display = "none";
});