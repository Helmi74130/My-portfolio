const buttonMenu = document.querySelector('#buttonMenu')
const modalHeader = document.querySelector('#modalHeader')
const textWritter = document.querySelector('#textWritter')


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

  new Typewriter(textWritter,{
  })
  .typeString("!")
  .pauseFor(2500)
  .deleteChars(2)
  .typeString(', Dev')
  .typeString('<span style="color: #00ffa5;"> JAVASCRIPT !</span>')
  .pauseFor(500)
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
});