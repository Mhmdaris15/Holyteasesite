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

