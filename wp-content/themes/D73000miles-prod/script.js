/**
 * Stats countdown
 */

const countDownItems = document.querySelectorAll(".count-change");

countDownItems.forEach(countdown => {
    
    function updateCount() {
        let count = parseInt(countdown.innerText.replace(/,/g,""))
        let customCountValue = parseInt(Math.random() * 10) 
        count += customCountValue
        countdown.innerText=count 
    }

    let customInterval = (Math.random() + 6) * 100

    console.log(customInterval)
    
    setInterval(updateCount,customInterval)
   
})

/**
 * Intersection Observer on 3D Icons
 */

 const images3D = document.querySelectorAll('.icon-3d')

 observer = new IntersectionObserver((entries) => {
   entries.forEach(entry => {
     if (entry.intersectionRatio > 0) {
       entry.target.classList.add('fancy');
     } else {
       entry.target.classList.remove('fancy');
     }
   }), {
     threshold: 0.1
   }
 });
 
for(const image of images3D) {
  observer.observe(image);
}

