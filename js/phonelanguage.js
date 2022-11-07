const helloText = document.querySelector('#helloText')
const longText = document.querySelector('#longText')

/**
 * this function  retrieves the value of the cookie and puts it in the correct format
 * @param {string} name
 * @return {string}
 */
 function getCookie(name){
  const cookies = document.cookie.split('; ')
  const value = cookies
      .find(c=> c.startsWith(name))
      ?.split('=')[1]
      if (value === undefined) {
        return null
      }
      return decodeURIComponent(value)
}

/**
 * retrieves the language cookie and changes the variables in relation to the language 
 * @return {array}
 */

let language = getCookie('language')
let welcomeText
let phoneText

if (language === 'en') {
  welcomeText = ['Hey!!', 'Hi!', 'Welcome!', 'Hello!', '&#128075;', '&#x1F91A;', 'Be welcome', 'Glad you are here &#x1F91A']
  phoneText = ['Enjoy your visit to my website!', 'Nice To Meet You &#x1F44D;', 'Don\'t forget to contact me at the end of your visit &#x1F4BB;', 'Don\'t forget to tell me if you enjoyed the visit', 'If you want to know me better, contact me &#9997;']

} else{
  welcomeText = ['Hey!!', 'Salut!', 'Bienvenue!', 'Bonjour!', '&#128075;', '&#x1F91A;', 'Soyez le bienvenue', 'Content que vous soyez la &#x1F91A']
  phoneText = ['Bonne visite sur mon site!', 'Enchanté moi c\'est Helmi &#x1F44D;', 'N\'oubliez pas de me contacter à la fin de votre visite &#x1F4BB;', 'N\'oubliez pas de me dire si vous avez apprécié la visite', 'Si vous voulez mieux me connaitre, contactez moi &#9997;']
}

helloText.innerHTML = welcomeText[Math.floor(Math.random() * welcomeText.length)];
longText.innerHTML = phoneText[Math.floor(Math.random() * phoneText.length)];