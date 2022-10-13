let title = document.getElementById("titlePage")
let home = document.getElementById("home")
let product = document.getElementById("product")
let partner = document.getElementById("partner")

// if (home.click) {
//     title.textContent = "Love The Skin You're In"
// } else if (product.click) {
//     title.textContent = "Product"
// } else if (partner.click) {
//     title.textContent = "Partnership"
// } else {
//     title.textContent = "Love The Skin You're In"
// }

partner.onclick = function () {
    title.innerHTML = "Partnership"
}

// ================================================scroll top===================================================

var scrollTop = document.getElementById("scrollTop");

window.onscroll = function () {
    scrollfunction()
};
function scrollfunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollTop.style.opacity = "1";
    } else {
        scrollTop.style.opacity = "0";
    }
}

scrollTop.addEventListener("click", function () {
    window.scrollTo({
        left: 0,
        top: 0,
        behavior: "smooth"
    })
})
