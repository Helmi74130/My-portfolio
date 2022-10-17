const buttonMenu = document.querySelector('#buttonMenu')
const modalHeader = document.querySelector('#modalHeader')
const textWritter = document.querySelector('#textWritter')
const phoneButton = document.querySelector('#phoneButton')
const screen = document.querySelector('#screen')
const video = document.querySelector('#video')
const smartphone = document.querySelector('#smartphone')
const previous = document.querySelector('#previous')
const next = document.querySelector('#next')
const videoTablette = document.querySelector('#videoTablette')
const linkForWebSite = document.querySelector('#linkForWebSite')
const progressBar = document.querySelector('.scrollbar')
const progressBarClick = document.querySelector('.clickScrollbar')


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

  addEventListener('scroll', () => {
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
    new ScrollMagic.Scene({
      triggerElement: slides[i]
    })
    .setPin(slides[i])
    .addIndicators()
    .addTo(controller)
  }
}

const urlSource =['video/l\'illustre.mp4', 'video/richardsordi.mp4', 'video/richardvid.mp4' ]
const url =['https://illustre-restaurant.herokuapp.com/', 'https://richards-immobilier.herokuapp.com/', 'https://earth-and-sea.herokuapp.com/' ]

let index = 0
next.addEventListener('click', ()=>{
  index++
  console.log(videoTablette.src);
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