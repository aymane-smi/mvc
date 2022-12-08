//category
const category_list = document.querySelector(".category-list");
const category_btn = document.querySelector(".category");
const category = document.querySelector(".category-filter");
let keyCategory = true;

category_btn.addEventListener("click", async ()=>{
    if(keyCategory){
        document.querySelector(".category").style.bottom = "55px";
        await category.classList.add("input-larger");
        category_list.classList.add("category-effect");
        keyCategory = !keyCategory;
    }else{
        document.querySelector(".category").style.bottom = "15px";
        await category.classList.remove("input-larger");
        category_list.classList.remove("category-effect");
        keyCategory = !keyCategory;
    }
});

//price
const price_list = document.querySelector(".prices-list");
const price_btn = document.querySelector(".price");
const price = document.querySelector(".prices-filter");
let keyPrice = true;


price_btn.addEventListener("click", async ()=>{
    if(keyPrice){
        document.querySelector(".price").style.bottom = "55px";
        await price.classList.add("input-larger");
        price_list.classList.add("price-effect");
        keyPrice = !keyPrice;
    }else{
        document.querySelector(".price").style.bottom = "15px";
        await price.classList.remove("input-larger");
        price_list.classList.remove("price-effect");
        keyPrice = !keyPrice;
    }
});
