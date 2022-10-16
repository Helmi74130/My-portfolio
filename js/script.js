const buttonMenu = document.querySelector('#buttonMenu')
const modalHeader = document.querySelector('#modalHeader')
const textWritter = document.querySelector('#textWritter')
const phoneButton = document.querySelector('#phoneButton')
const screen = document.querySelector('#screen')
const video = document.querySelector('#video')
const smartphone = document.querySelector('#smartphone')

/* this function open the modal header */
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
  .typeString("!")
  .deleteChars(2)
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

  addEventListener('scroll', (event) => {
    console.log(window.scrollY);
    
    if (window.scrollY > 1150) {
      smartphone.classList.add("none")
      smartphone.classList.remove("open")
    }
    if (window.scrollY < 1150) {
      smartphone.classList.remove("none")
      smartphone.classList.add("open")
    }
  }); 

phoneButton.addEventListener('click', ()=>{
  if (screen.classList.contains('none')) {
    video.classList.add("none")
    screen.classList.add("open")
    screen.classList.remove("none")
  }else{
    screen.classList.add("none")
    video.classList.add("open")
    video.classList.remove("none")
    
  }
})

window.onload = function () {
  let controller = new ScrollMagic.Controller({
    globalSceneOptions:{
      triggerHook:'onLeave'
    }
  })
  let slides = document.querySelectorAll("section.panel")
  
  for (let i = 0; i < slides.length; i++) {
    console.log(slides);
    new ScrollMagic.Scene({
      triggerElement: slides[i]
    })
    .setPin(slides[i])
    .addIndicators()
    .addTo(controller)
  }
}

