

/**
 * allows you to change the video and the url when clicking on the buttons
 */

const urlSource =['video/mywebsite.mp4', 'video/illustre.mp4', 'video/richard.mp4', 'video/nike.mp4', 'video/sandrine.mp4', 'video/shampoo.mp4', 'video/earth.mp4', 'video/orange.mp4', 'video/meteo.mp4' ]
const url =['https://e-website.fr/', 'https://illustre-restaurant.helmi-elmaiel-portfolio.fr/', 'https://richards-immo.online/',  'https://nike-air-max.richards-immo.online/', 'https://sandrine-coupart.online/' , 'https://shampoo-performance.helmi-elmaiel-portfolio.fr/', 'https://earth-and-sea.helmi-elmaiel-portfolio.fr/', 'https://whispering-falls-36328.herokuapp.com/', 'https://meteo-france.helmi-elmaiel-portfolio.fr/' ]

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