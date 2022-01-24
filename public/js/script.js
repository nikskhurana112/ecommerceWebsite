/*====== User Form ======*/

 const formWrapper = document.querySelector('.form-wrapper');

const flip = document.querySelectorAll('.top p a');
const userForm = document.querySelector(".user-form")

for(let i=0; i<flip.length; i++){
  flip[i].addEventListener('click', () =>{
    userForm.classList.toggle('active')
    formWrapper.classList.toggle('active')
  })
}

// document.getElementsByClassName('register').addEventListener('load', ()=>{
//   userForm.classList.add('active');
//   formWrapper.classList.add('active');
// })