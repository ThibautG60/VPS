//- Opacity
window.onscroll = function () {
    const hr = document.getElementById('lineMain');
    const mainContent = document.getElementById('mainContent');
    let hrPos = hr.getBoundingClientRect().y;

    if (hrPos > 800) {
        hr.style.opacity = "100%";
        mainContent.opacity = "0%";
    }
    else if (hrPos < 800 && hrPos > 1) {
        hr.style.opacity = (hrPos / 8) + "%";
        mainContent.style.opacity = 100 - ((hrPos / 8)) + "%";
    }
    else {
        hr.style.opacity = "0%";
        mainContent.opacity = "100%";
    }
};

//- Etoiles en fond
const main = document.querySelector("main");

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

    main.appendChild(star);
  }
}
createStars();