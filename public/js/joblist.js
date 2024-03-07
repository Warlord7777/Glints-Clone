
    // const cards = document.getElementsByClassName("cards");
    // let current = cards[0];
    // current.classList.add("activeSection");
    // const names = document.getElementsByClassName("job-name");
    // const first = document.querySelector("#job_name_0");
    // first.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add("d-block");
    // first.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove("d-none");

    // for (let i = 0; i < cards.length; i++) {
    //     cards[i].addEventListener("click", function (e) {
    //         if (!cards[i].classList.contains("activeSection")) {
    //             let name = document.querySelector("#job_name_" + i);
    //             for (let j = 0; j < cards.length; j++) {
    //                 cards[j].classList.remove("activeSection");
    //                 const cardName = document.querySelector("#job_name_" + j);
    //                 cardName.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove('d-block');
    //                 cardName.parentElement.parentElement.parentElement.parentElement.parentElement.classList.add('d-none');
    //             }
    //             cards[i].classList.add("activeSection");
    //             if (names[i].textContent == name.textContent && names[i].nextElementSibling.textContent == name.nextElementSibling.textContent) {
    //                 names[i].parentElement.parentElement.parentElement.parentElement.classList.add('d-block');
    //                 name.parentElement.parentElement.parentElement.parentElement.parentElement.classList.remove('d-none');
    //             }
    //         }
    //     });
    // };


$(document).ready(function () {
    const cards = $(".cards");
    let current = cards.eq(0);
    current.addClass("activeSection");
    const names = $(".job-name");
    const first = $("#job_name_0");
    first.parent().parent().parent().parent().parent().addClass("d-block");
    first.parent().parent().parent().parent().parent().removeClass("d-none");

    for(let i = 0; i < cards.length; i++){
        cards.eq(i).on("click", function (e) {
            if (!cards.eq(i).hasClass("activeSection")) {
                let name = $("#job_name_" + i);
                for(let j = 0; j < cards.length; j++){
                    cards.eq(j).removeClass("activeSection");
                    const cardName = $('#job_name_' + j);
                    cardName.parent().parent().parent().parent().parent().removeClass("d-block");
                    cardName.parent().parent().parent().parent().parent().addClass("d-none");
                }
                cards.eq(i).addClass("activeSection");
                if (names.eq(i).text() == name.text() && names.eq(i).next().text() == name.next().text()){
                    names.eq(i).parent().parent().parent().parent().addClass("d-block");
                    name.parent().parent().parent().parent().parent().removeClass("d-none");
                }   
            }
        });
    }
    
    $('#save').on('click', function(){
        let jobId = $(this).data('job-id');
        $.ajax({
            url: '/bookmark',
            method: 'POST',
            data: {
                job_vacancy_id: jobId,
            },
            async: true,
            success: function (response) {
                console.log("response");
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        })
    })

    $('#form-select-filter').on('change', function () {
        var selected = $(this).val();

        $.ajax({
            url: '/opportunities',
            method: 'GET',
            data: { sortBy: selected },
            async: true,
            success: function (response) {
                console.log("success!");
            },
            error: function (xhr, status, error) {
                console.log(error);
            }
        });
    });
});
