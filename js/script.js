const btnU = document.querySelector(".btnU");
const btnD = document.querySelector(".btnD");
const rp = document.querySelector("#rp");
const rv = document.querySelector("#rv");

btnU.addEventListener("click", (e) => {
    e.preventDefault(e);
    rp.classList.toggle('hide');
})


btnD.addEventListener("click", (e) => {
    e.preventDefault(e);
    rv.classList.toggle('hide');
})