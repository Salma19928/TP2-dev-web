let pomodoroTimer;
let pomodoroMinutes = 25;
let pomodoroSeconds = 0;
let isPomodoroRunning = false;

let shortTimer;
let shortMinutes = 5;
let shortSeconds = 0;
let isShortRunning = false;

function updatePomodoroDisplay() {
    console.log(`Pomodoro: ${String(pomodoroMinutes).padStart(2, '0')}:${String(pomodoroSeconds).padStart(2, '0')}`);
}

function updateShortDisplay() {
    console.log(`Pause: ${String(shortMinutes).padStart(2, '0')}:${String(shortSeconds).padStart(2, '0')}`);
}

function startPomodoro() {
    if (!isPomodoroRunning) {
        isPomodoroRunning = true;
        pomodoroTimer = setInterval(() => {
            if (pomodoroSeconds === 0) {
                if (pomodoroMinutes === 0) {
                    clearInterval(pomodoroTimer);
                    isPomodoroRunning = false;
                    alert("Pomodoro terminé ! Prenez une pause.");
                    return;
                }
                pomodoroMinutes--;
                pomodoroSeconds = 59;
            } else {
                pomodoroSeconds--;
            }
            updatePomodoroDisplay();
        }, 1000);
    }
}

function pausePomodoro() {
    clearInterval(pomodoroTimer);
    isPomodoroRunning = false;
}

function resetPomodoro() {
    clearInterval(pomodoroTimer);
    isPomodoroRunning = false;
    pomodoroMinutes = 25;
    pomodoroSeconds = 0;
    updatePomodoroDisplay();
}

function startShortTimer() {
    if (!isShortRunning) {
        isShortRunning = true;
        shortTimer = setInterval(() => {
            if (shortSeconds === 0) {
                if (shortMinutes === 0) {
                    clearInterval(shortTimer);
                    isShortRunning = false;
                    alert("Minuteur de 5 minutes terminé !");
                    return;
                }
                shortMinutes--;
                shortSeconds = 59;
            } else {
                shortSeconds--;
            }
            updateShortDisplay();
        }, 1000);
    }
}

function pauseShortTimer() {
    clearInterval(shortTimer);
    isShortRunning = false;
}

function resetShortTimer() {
    clearInterval(shortTimer);
    isShortRunning = false;
    shortMinutes = 5;
    shortSeconds = 0;
    updateShortDisplay();
}

// Exemple d'utilisation
startPomodoro(); // Démarre le minuteur Pomodoro
// startShortTimer(); // Décommentez pour démarrer le minuteur de pause
