const adventure = document.getElementById('adventure');
const board = document.getElementById('board');
const carRacing = document.getElementById('car-racing');
const soccer = document.getElementById('soccer');
const action = document.getElementById('action');


function scrollToAdventure() {
    window.scroll({
        top: 220,
        behavior: 'smooth'  
    });
    adventure.style.fontWeight = 'bold';
    board.style.fontWeight = 'normal';
    carRacing.style.fontWeight = 'normal';
    soccer.style.fontWeight = 'normal';
    action.style.fontWeight = 'normal';
}

function scrollToBoard() {
    window.scroll({
        top: 840,
        behavior: 'smooth'  
    });
    adventure.style.fontWeight = 'normal';
    board.style.fontWeight = 'bold';
    carRacing.style.fontWeight = 'normal';
    soccer.style.fontWeight = 'normal';
    action.style.fontWeight = 'normal';
}

function scrollToRacing() {
    window.scroll({
        top: 1405,
        behavior: 'smooth'  
    });
    adventure.style.fontWeight = 'normal';
    board.style.fontWeight = 'normal';
    carRacing.style.fontWeight = 'bold';
    soccer.style.fontWeight = 'normal';
    action.style.fontWeight = 'normal';
}

function scrollToSoccer() {
    window.scroll({
        top: 2335,
        behavior: 'smooth'  
    });
    adventure.style.fontWeight = 'normal';
    board.style.fontWeight = 'normal';
    carRacing.style.fontWeight = 'normal';
    soccer.style.fontWeight = 'bold';
    action.style.fontWeight = 'normal';
}

function scrollToAction() {
    window.scroll({
        top: 2950,
        behavior: 'smooth'  
    });
    adventure.style.fontWeight = 'normal';
    board.style.fontWeight = 'normal';
    carRacing.style.fontWeight = 'normal';
    soccer.style.fontWeight = 'normal';
    action.style.fontWeight = 'bold';
}