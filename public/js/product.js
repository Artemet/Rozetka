function img_change(img_this){
    const get_main_img = document.querySelector(".main_choice img");
        get_main_img.src = img_this.querySelector("img").src;
    const get_choice_img = document.querySelector(".img");
        get_choice_img.style.border = "1px solid #00a046";
}
