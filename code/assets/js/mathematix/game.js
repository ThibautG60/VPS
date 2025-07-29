const body = document.querySelector("body");
const nav = document.querySelector("nav");
const logo = document.getElementById("logo");
const gameStart = document.getElementById("gameStart");
const buttonStart = document.getElementById("buttonStart");
const questionContainer = document.getElementById("questionContainer");
// Questions
let answerInput = document.getElementById("answer");
const validateButton = document.getElementById("validate");
// Score
const gameInfos = document.getElementById("gameInfos");
let elementScore = document.getElementById("score");
let timerElement = document.getElementById("timer");
const gameResult = document.getElementById("gameResult");
// Déclaration des variables pour le jeu
let gameStarted = false;
let gameType = null;
let gameTime = 60; // Durée du jeu en secondes
let gameScore = 0;
let gameQuestionNumber = 0; 
let correctAnswer = null; 
let vTimer = null; 

/* Quand la fenêtre a fini de se charger */
window.addEventListener('load', function () {
    gameType = getGameType(); // On récupère le type de jeu au chargement de la page
    setUI("base"); // On initialise l'interface utilisateur
});

// Bouttons de sélection de catégorie
nav.children[0].addEventListener("click", function () {
    nav.children[0].classList.add("categoryActive");
    nav.children[1].classList.remove("categoryActive");
    nav.children[2].classList.remove("categoryActive");
    nav.children[3].classList.remove("categoryActive");
    gameType = "addition";
    setUI("base");
});

nav.children[1].addEventListener("click", function () {
    nav.children[0].classList.remove("categoryActive");
    nav.children[1].classList.add("categoryActive");
    nav.children[2].classList.remove("categoryActive");
    nav.children[3].classList.remove("categoryActive");
    gameType = "soustraction";
    setUI("base");
});

nav.children[2].addEventListener("click", function () {
    nav.children[0].classList.remove("categoryActive");
    nav.children[1].classList.remove("categoryActive");
    nav.children[2].classList.add("categoryActive");
    nav.children[3].classList.remove("categoryActive");
    gameType = "multiplication";
    setUI("base");
});

nav.children[3].addEventListener("click", function () {
    nav.children[0].classList.remove("categoryActive");
    nav.children[1].classList.remove("categoryActive");
    nav.children[2].classList.remove("categoryActive");
    nav.children[3].classList.add("categoryActive");
    gameType = "division";
    setUI("base");
});

buttonStart.addEventListener("click", function () {
    if (!gameStarted) {
        toggleCategoryMenu(); // On cache le menu de sélection de catégorie
        // On démarre le jeu
        startGame();
    }
});

// Fonction pour détecter le type de partie
function getGameType() {
    if (nav.children[0].classList.contains("categoryActive")) {
        return "addition";
    } else if (nav.children[1].classList.contains("categoryActive")) {
        return "soustraction";
    } else if (nav.children[2].classList.contains("categoryActive")) {
        return "multiplication";
    } else if (nav.children[3].classList.contains("categoryActive")) {
        return "division";
    }
    return null;
}

/* ===== JEU ===== */
// Fonction pour démarrer le jeu
function startGame() {
    gameScore = 0; // Réinitialise le score
    gameTime = 60; // Réinitialise le temps de jeu
    gameQuestionNumber = 0; // Réinitialise le nombre de questions
    // Met à jour le type d'opération
    if(gameType === "addition") {
        questionContainer.children[1].innerText = "+"; 
    } else if (gameType === "soustraction") {
        questionContainer.children[1].innerText = "-"; 
    } else if (gameType === "multiplication") {
        questionContainer.children[1].innerText = "×";
    } else if (gameType === "division") {
        questionContainer.children[1].innerText = "÷"; 
    }

    //On créé le decompte de démarrage
    setUI("startCount"); // Met à jour l'interface utilisateur pour le décompte de démarrage
    let count = document.createElement("p");
    count.id = "countdown";
    count.innerText = `3`;
    document.querySelector("main").appendChild(count);
    setTimeout(function() {
        count.innerText = `2`;
    }, 1000);
    setTimeout(function() {
        count.innerText = `1`;
    }, 2000);
    setTimeout(function() {
        count.innerText = `GO!`;
        count.style.color = "rgb(2, 161, 23)";
        count.style.transition = "opacity 0.8s ease-in-out";
        count.style.opacity = "0";
        playSong("top"); // Joue le son de démarrage
    }, 3000);
    setTimeout(function() {
        setUI("inGame"); // Met à jour l'interface utilisateur pour le jeu
        generateQuestion(); // Génère la première question
        count.remove();
    }, 4000);

    vTimer = setInterval(gameTimer, 1000); // Démarre le timer du jeu
    gameStarted = true;
}

// Fonction pour terminer le jeu
function endGame() {
    gameStarted = false; // Met à jour l'état du jeu
    gameResult.children[1].innerText = "Votre score final est de: " + gameScore; 
    gameResult.children[2].innerText = "Vous avez " + ((gameScore / gameQuestionNumber) * 100).toFixed(2) + "% de bonnes réponses";
    playSong("applause"); // Joue le son de fin de jeu
    setUI("result"); // Met à jour l'interface utilisateur pour afficher le résultat

}

// Fonction pour générer une question aléatoire
function generateQuestion() {
    questionContainer.children[0].innerText = Math.floor(Math.random() * 11); // Génère un nombre aléatoire entre 0 et 99
    questionContainer.children[2].innerText = Math.floor(Math.random() * 11); // Génère un nombre aléatoire entre 0 et 99
    answerInput.focus();

    switch (gameType) {
        case "addition":
            correctAnswer = parseInt(questionContainer.children[0].innerText) + parseInt(questionContainer.children[2].innerText);
            break;
        case "soustraction":
            correctAnswer = parseInt(questionContainer.children[0].innerText) - parseInt(questionContainer.children[2].innerText);
            break;
        case "multiplication":
            correctAnswer = parseFloat(questionContainer.children[0].innerText) * parseFloat(questionContainer.children[2].innerText);
            break;
        case "division":
            // Assure que le diviseur n'est pas zéro
            if (questionContainer.children[2].innerText === "0") questionContainer.children[2].innerText = "1";
            correctAnswer = parseFloat(questionContainer.children[0].innerText) / parseFloat(questionContainer.children[2].innerText);
            break;
    }
    return correctAnswer;
}

// Fonction pour valider la réponse
validateButton.addEventListener("click", validateAnswer);
answerInput.addEventListener("keypress", function(event) {
    if (event.key === "Enter") {
        validateAnswer();
    }
});

function validateAnswer() {
    if (gameStarted) {
        if(answerInput.value == correctAnswer) {
            gameScore++;
            generateQuestion(); 
            answerInput.value = "";
            body.style.animation = "0.2s 2 alternate goodAnswer";
        }
        else{
            generateQuestion(); 
            answerInput.value = "";
            body.style.animation = "0.2s 2 alternate badAnswer";
        }
        gameQuestionNumber++;

        setTimeout(function() {
        body.style.animation = ""; // Réinitialise l'animation bonne ou mauvaise réponse
        }, 200); // Réinitialise l'animation après 200ms
        // On refresh le score
        gameInfos.children[2].innerText = "Score: " + gameScore;
    }
}

// Timer pour la fin du jeu
function gameTimer(){
    gameTime--;
    gameInfos.children[0].value = gameTime;
    gameInfos.children[1].innerText = "Temps restant: " + gameTime + " secondes";

    if(gameTime <= 0) {
        clearInterval(vTimer);
        endGame();
    }
}

/* ===== User Interface ===== */
function setUI(uiType){
    switch (uiType) {
        case "base":
            gameStart.style.display = "flex";
            questionContainer.style.display = "none";
            gameInfos.style.display = "none";
            gameResult.style.display = "none";
            changeColorLogo("whitesmoke"); // Change la couleur du logo
            break;
        case "startCount":
            gameStart.style.display = "none";
            questionContainer.style.display = "none";
            gameInfos.style.display = "none";
            gameResult.style.display = "none";
            changeColorLogo("rgb(14, 36, 102)"); // Change la couleur du logo
            break;
        case "inGame":
            gameStart.style.display = "none";
            questionContainer.style.display = "flex";
            gameInfos.style.display = "block";
            gameResult.style.display = "none";
            break;
        case "result":
            toggleCategoryMenu();
            gameStart.style.display = "flex";
            questionContainer.style.display = "none";
            gameInfos.style.display = "none";
            gameResult.style.display = "block";
            changeColorLogo("rgb(2, 161, 23)"); // Change la couleur du logo
            break;
    }
}

function changeColorLogo(color) {
    logo.children[0].style.transition = "box-shadow 0.3s ease-in-out";
    logo.children[0].style.boxShadow = "0px 0px 15px " + color;
}

function playSong(song){
    if(song == "applause"){
        const applause = new Audio("/assets/file/mathematix/applause.mp3");
        applause.play();
    }
    else if(song == "top"){
        const top = new Audio("/assets/file/mathematix/top.mp3");
        top.play();
    }
}

function toggleCategoryMenu() {
    const categorys = document.querySelectorAll(".category");
    categorys.forEach(category => {
        if(category.style.visibility != "hidden" && category.classList.contains("categoryActive") == false) {
            // Si la catégorie n'est pas active, on la cache
            category.style.transition = "opacity 0.3s ease-in-out, visibility 0.3s ease-in-out";
            category.style.opacity = "0";
            category.style.visibility = "hidden";
        }
        else {
            // Si la catégorie est active, on l'affiche
            category.style.transition = "opacity 0.3s ease-in-out, visibility 0.3s ease-in-out";
            category.style.opacity = "1";
            category.style.visibility = "visible";
        }
    });
}