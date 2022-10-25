const buttonMenu = document.querySelector('#buttonMenu')
const modalHeader = document.querySelector('#modalHeader')
const textWritter = document.querySelector('#textWritter')
const phoneButton = document.querySelector('#phoneButton')
const screen = document.querySelector('#screen')
const smartphone = document.querySelector('#smartphone')
const previous = document.querySelector('#previous')
const next = document.querySelector('#next')
const videoTablette = document.querySelector('#videoTablette')
const linkForWebSite = document.querySelector('#linkForWebSite')
const progressBar = document.querySelector('.scrollbar')
const progressBarClick = document.querySelector('.clickScrollbar')
const phoneInput = document.querySelector('#phoneInput')
const sendMessageButton = document.querySelector('#sendMessageButton')
const phoneMessage = document.querySelector('#phoneMessage')
const phoneMessageOfMe = document.querySelector('#phoneMessageOfMe')
const timeMessage = document.querySelectorAll('.time')
const helloText = document.querySelector('#helloText')
const longText = document.querySelector('#longText')
const acceptBtn = document.querySelector('#acceptBtn')
const homePhone = document.querySelector('#homePhone')
const smartphoneDiv = document.querySelector('#smartphoneDiv')
const submit = document.querySelector('#submit')
const mail = document.querySelector('#mail')


/* this function allows you to navigate by clicking on the progressbar */
let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight
progressBarClick.addEventListener('click', (e)=>{
  let newPageScroll = e.clientY / progressBarClick.offsetHeight * totalHeight
  window.scrollTo({
    top: newPageScroll,
    behavior: "smooth"
  })
})

/* this function allows you to see the progress of the prossbar */
window.addEventListener('scroll', ()=>{
  let progress = (document.documentElement.scrollTop / totalHeight) * 100
  progressBar.style.height = `${progress}%`
  progressBar.style.opacity = `${progress}%`
})

/* this function open the modal navbar header */
buttonMenu.addEventListener('click', ()=>{
  if (modalHeader.classList.contains('open')) {
    modalHeader.classList.add("close")
    modalHeader.classList.remove("open")
  }else{
    modalHeader.classList.add("open")
    modalHeader.classList.remove("close")
    modalHeader.classList.remove("none")
  }
})
/* this function write automatically */
  new Typewriter(textWritter,{
  })
  .typeString(', Dev')
  .typeString('<span style="color: #00ffa5;"> JAVASCRIPT !</span>')
  .pauseFor(2000)
  .deleteChars(13)
  .typeString('<span style="color: #9403f4;"> PHP !</span>')
  .pauseFor(500)
  .deleteChars(6)
  .typeString('<span style="color: #00ffa5;"> SYMFONY !</span>')
  .pauseFor(500)
  .deleteChars(10)
  .typeString('<span style="color: #9403f4;"> REACT !</span>')
  .pauseFor(500)
  .deleteChars(8)
  .typeString('<span style="color: #00ffa5;"> FULL-STACK !</span> ')
  .start();

/* this function remove class and add class in the phone when scroll */
  addEventListener('scroll', () => {
    if (window.scrollY > 1150) {
      smartphoneDiv.classList.add("close")
      smartphoneDiv.classList.remove("open")
    }
    if (window.scrollY < 1150) {
      smartphoneDiv.classList.remove("close")
      smartphoneDiv.classList.add("open")
    }
  }); 

phoneButton.addEventListener('click', ()=>{
  acceptBtn.classList.add('to-up')
  setTimeout(()=>{
    smartphone.classList.remove("shake")
    screen.classList.remove("none")
    homePhone.classList.add("none")
  }, 500)
})

/* this function allows to make a panel of slides */
window.onload = function () {
  let controller = new ScrollMagic.Controller({
    globalSceneOptions:{
      triggerHook:'onLeave'
    }
  })
  let slides = document.querySelectorAll("section.panel")
  
  for (let i = 0; i < slides.length; i++) {
    new ScrollMagic.Scene({
      triggerElement: slides[i]
    })
    .setPin(slides[i])
    .addTo(controller)
  }
}

/* this two function change video source and url */
const urlSource =['video/illustre.mp4', 'video/richard.mp4', 'video/earth.mp4', 'video/orange.mp4', 'video/meteo.mp4', 'video/dice.mp4' ]
const url =['https://illustre-restaurant.herokuapp.com/', 'https://richards-immobilier.herokuapp.com/', 'https://earth-and-sea.herokuapp.com/', 'https://whispering-falls-36328.herokuapp.com/', 'https://meteo-france-apps.herokuapp.com/', 'https://dicerollthegame.herokuapp.com/' ]

let index = 0
next.addEventListener('click', ()=>{
  index++
    if ( urlSource.length === index) {
      videoTablette.src=urlSource[0]
      linkForWebSite.href = url[0]
      index=0
    }else{
      videoTablette.src=urlSource[index]
      linkForWebSite.href = url[index]
    }
})

previous.addEventListener('click', ()=>{
  index--
    if ( index < 0) {
      videoTablette.src=urlSource[urlSource.length-1]
      index=urlSource.length-1
      linkForWebSite.href = url[urlSource.length-1]
    }else{
      videoTablette.src=urlSource[index]
      linkForWebSite.href = url[index]
    }
})

let dateNow = new Date()
let hour = dateNow.getHours()
let minutes = dateNow.getMinutes()

/* this loop  writes the time for each message sent*/
for (let i = 0; i < timeMessage.length; i++) {
  timeMessage[i].textContent = hour+':'+minutes
}

let welcomeText = ['Hey!!', 'Salut!', 'Bienvenue!', 'Bonjour!', '&#128075;', '&#x1F91A;']
let phoneText = ['Bonne visite sur mon site!', 'Enchanté moi c\'est Helmi &#x1F44D;', 'Avez vous pensé à me contacter? &#x1F4BB;', 'Oubliez pas de me dire si vous avez apprécié la visite', 'Si vous voulez en savoir plus n\'hésitez pas à me contacter &#9997;']

helloText.innerHTML = welcomeText[Math.floor(Math.random() * welcomeText.length)];
longText.innerHTML = phoneText[Math.floor(Math.random() * phoneText.length)];

sendMessageButton.addEventListener('click', ()=>{
  let message = phoneInput.value

  if (message.length > 400) {
    phoneMessageOfMe.innerHTML +=`
      <div class="phone-text first-right-message right-message">
        <p>Attention ton message est trop long !</p>
        <div class="phone-seen">
          <p class="time"></p>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
            <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
          </svg>
        </div>
      </div>
      `
  }else {
    phoneMessage.innerHTML +=`
      <div class="phone-text left-message first-left-message">
        <p>${message}</p>
        <div class="phone-seen">
          <p>${hour}:${minutes}</p>
        </div>
      </div>
      `
  }
  phoneInput.value =""
})

acceptBtn.addEventListener('click', ()=>{
  acceptBtn.classList.add('to-up')

  setTimeout(()=>{
    smartphone.classList.remove("shake")
    screen.classList.remove("none")
    homePhone.classList.add("none")
  }, 500)
})


document.addEventListener('mousemove', parallax)
function parallax(e){
  this.querySelectorAll('.layer').forEach(Layer =>{
    const speed = Layer.getAttribute('data-speed')

    const x = (window.innerWidth - e.pageX*speed)/100
    const y = (window.innerHeight - e.pageY*speed)/100

    Layer.style.transform = `translateX(${x}px) translateY(${y}px)`
  })
}

function ValidateEmail(input) {
  var validRegex = /^\S+@\S+\.\S+$/;

  if (input.value.match(validRegex)) {

   console.log("Valid email address!");
    return true;
  } else {
    console.log("INValid email address!");
    return false;
  }
}

submit.addEventListener('click', (e)=>{
  e.stopPropagation()
  e.preventDefault()
  ValidateEmail(mail)
})

