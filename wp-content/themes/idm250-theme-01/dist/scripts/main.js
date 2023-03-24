function throwShoes() {
    var shoe1 = document.createElement("img");
    shoe1.src = "https://res.cloudinary.com/dr8jiwn4u/image/upload/v1679699895/shoes/AMBUSH-Nike-Air-Force-1-Low-phantom_pkmyra.png";
    shoe1.className = "shoe";
    shoe1.style.left = Math.floor(Math.random() * window.innerWidth) + "px";
    shoe1.style.top = Math.floor(Math.random() * window.innerHeight) + "px";
    var angle1 = Math.floor(Math.random() * 360);
    shoe1.style.animation = "throwShoe1 " + Math.floor(Math.random() * 3 + 2) + "s linear";
    shoe1.style.transform = "rotate(" + angle1 + "deg)";
  
    var shoe2 = document.createElement("img");
    shoe2.src = "https://res.cloudinary.com/dr8jiwn4u/image/upload/v1679699895/shoes/AMBUSH-Nike-Air-Force-1-Low-Black_vflphy.png";
    shoe2.className = "shoe";
    shoe2.style.left = Math.floor(Math.random() * window.innerWidth) + "px";
    shoe2.style.top = Math.floor(Math.random() * window.innerHeight) + "px";
    var angle2 = Math.floor(Math.random() * 360);
    shoe2.style.animation = "throwShoe2 " + Math.floor(Math.random() * 3 + 2) + "s linear";
    shoe2.style.transform = "rotate(" + angle2 + "deg)";
  
    while (Math.abs(angle1 - angle2) < 90) {
      angle2 = Math.floor(Math.random() * 360);
      shoe2.style.transform = "rotate(" + angle2 + "deg)";
    }
  
    var styleSheet = document.styleSheets[0];
    styleSheet.insertRule("@keyframes throwShoe1 { 0% { transform: translate(0, 0) rotate(" + angle1 + "deg); } 100% { transform: translate(" + (window.innerWidth + 100) + "px, " + (window.innerHeight + 100) + "px) rotate(" + (angle1 + 360) + "deg); } }", styleSheet.cssRules.length);
    styleSheet.insertRule("@keyframes throwShoe2 { 0% { transform: translate(0, 0) rotate(" + angle2 + "deg); } 100% { transform: translate(" + (window.innerWidth + 100) + "px, " + (window.innerHeight + 100) + "px) rotate(" + (angle2 + 360) + "deg); } }", styleSheet.cssRules.length);
  
    document.body.appendChild(shoe1);
    document.body.appendChild(shoe2);
  
    // Remove shoes from DOM after animation ends
    shoe1.addEventListener('animationend', function() {
      shoe1.remove();
    });
  
    shoe2.addEventListener('animationend', function() {
      shoe2.remove();
    });
  }
  
  window.addEventListener('load', throwShoes);
  
  