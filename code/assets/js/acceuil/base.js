//- Opacity
scrollElements();
window.addEventListener('scroll', scrollElements);

function scrollElements() {
  const categorys = document.querySelectorAll('.scroll');
  categorys.forEach(category => {
    const categoryPosTop = category.getBoundingClientRect().top;

    if (categoryPosTop < 300) {
      category.style.opacity = "1";
      category.style.transition = "opacity 0.3s ease-in-out";
    } else {
      category.style.opacity = "0";
      category.style.transition = "opacity 0.3s ease-in-out";
    }
  });
}

//- Etoiles en fond
const main = document.querySelector("main");
const mainBack = document.getElementById("mainBack");

function createStars() {
  for (let i = 0; i < 300; i++) { // Boucle avec le nombre d'étoiles
    const star = document.createElement("div");

    // Création des étoiles, avec un random pour les types d'étoiles
    let type = Math.floor(Math.random() * 4);
    if(type == 0)star.classList.add("star_1");
    else if(type == 1)star.classList.add("star_2");
    else if(type == 2)star.classList.add("star_3");
    else if(type == 3)star.classList.add("star_4");

    // Position des étoiles
    const randomX = Math.random() * main.offsetWidth;
    const randomY = Math.random() * main.offsetHeight;
    star.style.left = randomX + "px";
    star.style.top = randomY + "px";
    star.style.zIndex = "auto";

    main.insertBefore(star, mainBack);
  }
}
createStars();