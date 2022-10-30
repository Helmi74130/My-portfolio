const textEmail = document.querySelector('#textEmail')
const textFirstName = document.querySelector('#textFirstname')
const textName = document.querySelector('#textName')
const mail = document.querySelector('#mail')
const inputFirstname = document.querySelector('#firstname')
const inputName = document.querySelector('#name')


/**
 * Validate the email format
 * @param {string} name
 * @return {string}
 * @return {boolean}
 */

let emailValidation = true
function validateEmail(input) {
  var validRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;

  if (!input.value.match(validRegex)) {
    textEmail.textContent = 'Votre adresse e-mail n\'est pas valide'
    emailValidation = false
  }else{
    textEmail.textContent = ''
    emailValidation = true
  } 
}

/**
 * Validate the name format
 * @param {string} name
 * @return {string}
 * @return {boolean}
 */

let nameValidation = true
function validateName(input) {
  var validRegex = /^[A-Za-z .'-]+$/;
  if (!input.value.match(validRegex)) {
    textName.textContent = 'Votre Prénom ne peut pas contenir un chiffre ou des caractéres spéciaux'
    nameValidation = false
  }else{
    textName.textContent = ''
    nameValidation = true
  } 
}

/**
 * Validate the firstname format
 * @param {string} name
 * @return {string}
 * @return {boolean}
 */
let firstnameValidation = true
function validateFirstname(input) {
  var validRegex = /^[A-Za-z .'-]+$/;
  if (!input.value.match(validRegex)) {
    textFirstName.textContent = 'Votre Nom ne peut pas contenir un chiffre ou des caractéres spéciaux'
    firstnameValidation = false
  }else{
    textFirstName.textContent = ''
    firstnameValidation = true
  } 
}

function prevent(e){
  if (!emailValidation  || !nameValidation || !firstnameValidation) {
    e.preventDefault()
  }
}

inputName.addEventListener('focusout', (e)=>{
  validateName(inputName)
} )

inputFirstname.addEventListener('focusout', (e)=>{
  validateFirstname(inputFirstname)
} )

mail.addEventListener('focusout', (e)=>{
  validateEmail(mail)
} )

submit.addEventListener('click', (e)=>{
  validateEmail(mail)
  validateName(inputName)
  validateFirstname(inputFirstname)
  prevent(e)
})
