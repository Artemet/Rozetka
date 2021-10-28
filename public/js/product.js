function img_change(img_this){
    const get_main_img = document.querySelector(".main_choice img");
        get_main_img.src = img_this.querySelector("img").src;
}
//ok_choice
const get_just_circle = document.querySelector("i.just_circle");
function ok_button(ok_this){
    get_just_circle.classList = "fas fa-check-circle";
    get_just_circle.style.color = "#00a046"
}
