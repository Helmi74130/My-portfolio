

/**
 * allows you to change the video and the url when clicking on the buttons
 */

const urlSource =['video/illustre.mp4', 'video/richard.mp4', 'video/earth.mp4', 'video/orange.mp4', 'video/meteo.mp4', 'video/dice.mp4' ]
const url =['https://illustre-restaurant.herokuapp.com/', 'https://richards-immo.herokuapp.com/', 'https://earth-and-sea.herokuapp.com/', 'https://whispering-falls-36328.herokuapp.com/', 'https://meteo-france-apps.herokuapp.com/', 'https://dicerollthegame.herokuapp.com/' ]

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