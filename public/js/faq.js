const arrow = document.getElementsByClassName("arrow");
for (let i = 0; i < arrow.length; i++) {
    const arrow_parent = arrow[i].parentNode;
    arrow_parent.addEventListener("click", function () {
        if (arrow_parent.nextElementSibling != null) {
            const parent_sibling = arrow_parent.nextElementSibling;
            parent_sibling.classList.toggle("show");
            parent_sibling.classList.toggle("d-none");
            arrow[i].classList.toggle("on");
        }
    })
}