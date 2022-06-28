const btnHam = document.querySelector('.btnHam')
const logo = document.querySelector('.logo')

btnHam.addEventListener('click', (e) => {

   logo.classList.toggle('open')
   btnHam.classList.toggle('open');


})