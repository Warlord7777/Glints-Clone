const parts = document.getElementsByClassName("parts");

for (let x = 0; x < parts.length; x++) {
    parts[x].addEventListener("click", function () {
        const clicked = event.currentTarget;
        const arrow_div = clicked.querySelector(".arrow");
        const drop_part = clicked.querySelector(".drop")
        console.log(arrow_div)
        if (arrow_div) {
            arrow_div.classList.toggle("down");
            if (arrow_div.classList.contains("down")) {
                drop_part.style.display = "flex";
            } else {
                drop_part.style.display = "none";
            }
        }
    })
}

const notSave = document.getElementById("NotFilled");
const save = document.querySelector("#filledSave");
notSave.addEventListener("click", function (a) {
    notSave.classList.toggle("d-none")
    save.classList.add("d-block")
    save.classList.remove("d-none")
})
save.addEventListener("click", function (a) {
    notSave.classList.add("d-block")
    notSave.classList.toggle("d-none")
    save.classList.add("d-none")
})