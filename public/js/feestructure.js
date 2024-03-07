const recruitment = document.getElementById('recruitment');
const managedtalent = document.getElementById('managedtalent');
const jobsearch = document.getElementById('jobsearch');

const tabs = document.getElementsByClassName('tabs');

let active = recruitment;

for(let i = 0; i < tabs.length; i++){
    const cur = tabs[i];
    cur.addEventListener("click", (e) => {
        if(e.target.textContent.includes('Recruitment')){
            if(active == recruitment){
                return;
            }else{
                recruitment.classList.toggle('d-flex');
                recruitment.classList.remove('d-none');
                active.classList.toggle('d-none');
                active.classList.toggle('d-flex');
                active = recruitment;
            }
        } else if (e.target.textContent.includes('Managed')){
            if(active == managedtalent){
                return;
            }else{
                managedtalent.classList.toggle('d-flex');
                managedtalent.classList.remove('d-none');
                active.classList.toggle('d-none');
                active.classList.toggle('d-flex');
                active = managedtalent;
            }
        }else{
            if (active == jobsearch) {
                return;
            } else {
                jobsearch.classList.toggle('d-flex');
                jobsearch.classList.remove('d-none');
                active.classList.toggle('d-none');
                active.classList.toggle('d-flex');
                active = jobsearch;
            }
        }
    })
}
