const body = document.querySelector("body");
const buttonStart = document.getElementById("buttonStart");
const buttonAddition = document.getElementById("buttonAddition");
const buttonSoustraction = document.getElementById("buttonSoustraction");
const buttonMultiplication = document.getElementById("buttonMultiplication");
const buttonDivision = document.getElementById("buttonDivision");
const questionContainer = document.getElementById("questionContainer");

// Questions
let value1 = document.getElementById("value1");
let operationType = document.getElementById("sign");
let value2 = document.getElementById("value2");
let answerInput = document.getElementById("answer");
const validateButton = document.getElementById("validate");
// Score
const gameInfos = document.getElementById("gameInfos");
let elementScore = document.getElementById("score");
let countdownGame = document.getElementById("countdownGame");

// Déclaration des variables pour le jeu
let gameStarted = false;
let gameType = null;
let gameTime = 60; // Durée du jeu en secondes
let gameScore = 0;
let correctAnswer = null; // Réponse correcte de la question

/* Quand la fenêtre a fini de se charger */
window.addEventListener('load', function () {
    questionContainer.style.display = "none"; // On cache le conteneur des questions
    gameType = getGameType(); // On récupère le type de jeu au chargement de la page
    countdownGame.style.display = "none"; // On cache le décompte
    gameInfos.style.display = "none"; // On cache les infos de la partie
});

// Bouttons de sélection de catégorie
buttonAddition.addEventListener("click", function () {
    buttonAddition.classList.add("categoryActive");
    buttonSoustraction.classList.remove("categoryActive");
    buttonMultiplication.classList.remove("categoryActive");
    buttonDivision.classList.remove("categoryActive");
    gameType = "addition";
});

buttonSoustraction.addEventListener("click", function () {
    buttonSoustraction.classList.add("categoryActive");
    buttonAddition.classList.remove("categoryActive");
    buttonMultiplication.classList.remove("categoryActive");
    buttonDivision.classList.remove("categoryActive");
    gameType = "soustraction";
});

buttonMultiplication.addEventListener("click", function () {
    buttonMultiplication.classList.add("categoryActive");
    buttonAddition.classList.remove("categoryActive");
    buttonSoustraction.classList.remove("categoryActive");
    buttonDivision.classList.remove("categoryActive");
    gameType = "multiplication";
});

buttonDivision.addEventListener("click", function () {
    buttonDivision.classList.add("categoryActive");
    buttonAddition.classList.remove("categoryActive");
    buttonSoustraction.classList.remove("categoryActive");
    buttonMultiplication.classList.remove("categoryActive");
    gameType = "division";
});

buttonStart.addEventListener("click", function () {
    if (!gameStarted) {
        toggleCategoryMenu(); // On cache le menu de sélection de catégorie
        document.querySelector("main > p").style.display = "none"; // On cache le texte d'instruction
        // On cache le boutton de démarrage
        buttonStart.style.transition = "opacity 0.3s ease-in-out, display 0.3s ease-in-out";
        buttonStart.style.opacity = "0";
        buttonStart.style.display = "none";
        // On démarre le jeu
        startGame();
    }
});

// Fonction pour détecter le type de partie
function getGameType() {
    if (buttonAddition.classList.contains("categoryActive")) {
        return "addition";
    } else if (buttonSoustraction.classList.contains("categoryActive")) {
        return "soustraction";
    } else if (buttonMultiplication.classList.contains("categoryActive")) {
        return "multiplication";
    } else if (buttonDivision.classList.contains("categoryActive")) {
        return "division";
    }
    return null;
}

// Fonction pour cacher / afficher le menu de sélection de catégorie
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

/* ===== JEU ===== */
// Fonction pour démarrer le jeu
function startGame() {
    gameScore = 0; // Réinitialise le score
    gameTime = 60; // Réinitialise le temps de jeu
    // Met à jour le type d'opération
    if(gameType === "addition") {
        operationType.innerText = "+"; 
    } else if (gameType === "soustraction") {
        operationType.innerText = "-"; 
    } else if (gameType === "multiplication") {
        operationType.innerText = "×";
    } else if (gameType === "division") {
        operationType.innerText = "÷"; 
    }

    //On créé le decompte de démarrage
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
    }, 3000);
    setTimeout(function() {
        questionContainer.style.display = "flex"; // Affiche le conteneur des questions
        gameInfos.style.display = "block"; // Affiche les infos de la partie
        countdownGame.style.display = "block"; // Affiche le décompte
        generateQuestion(); // Génère la première question
        count.remove();
    }, 4000);

    gameStarted = true;
}

// Fonction pour générer une question aléatoire
function generateQuestion() {
    value1.innerText = Math.floor(Math.random() * 11); // Génère un nombre aléatoire entre 0 et 99
    value2.innerText = Math.floor(Math.random() * 11); // Génère un nombre aléatoire entre 0 et 99

    switch (gameType) {
        case "addition":
            correctAnswer = parseInt(value1.innerText) + parseInt(value2.innerText);
            break;
        case "soustraction":
            correctAnswer = parseInt(value1.innerText) - parseInt(value2.innerText);
            break;
        case "multiplication":
            correctAnswer = parseFloat(value1.innerText) * parseFloat(value2.innerText);
            break;
        case "division":
            // Assure que le diviseur n'est pas zéro
            if (value2.innerText === "0") value2.innerText = "1";
            correctAnswer = parseFloat(value1.innerText) / parseFloat(value2.innerText);
            break;
        default:
            console.error("Type de jeu non reconnu");
    }
    return correctAnswer;
}

// Fonction pour valider la réponse
validateButton.addEventListener("click", function () {
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
        setTimeout(function() {
        body.style.animation = ""; // Réinitialise l'animation
        }, 200); // Réinitialise l'animation après 200ms
        // On refresh le score
        elementScore.innerText = "Score: " + gameScore;
    }
});