var user = alert("🎡HEY! PAL! WELCOME :ADVICE( TRY USE🎗🧨 BIG SCREEN FOR ENJOYING🎡)");
//challenge:1
function AgeInDays() {
    var user = prompt('whats your Year of Birth mofos?');
    var ageInDays = (2023 - user) * 365;
    var h1 = document.createElement('h1');
    var textAnswer = document.createTextNode('You are ' + ageInDays + ' days old mofo!');
    h1.setAttribute('id', 'AgeInDays');
    h1.appendChild(textAnswer);
    document.getElementById('flex-box-result').appendChild(h1);
}

function reset() {
    document.getElementById('flex-box-result').remove();
    alert("Thanks buddy ,Welcome again");



}
//challenge:2
let all_buttons = document.getElementsByTagName('button');
let copyAllButtons = [];
for (let i = 0; i < all_buttons.length; i++) {
    copyAllButtons.push(all_buttons[i].classList[1]);
}
document.write(copyAllButtons);

function buttonChangeColor(thingy) {
    //console.log(thingy.value);
    if (thingy.value === 'red') {
        buttonRed();
    } else if (thingy.value === 'green') {
        buttonGreen();
    } else if (thingy.value === 'blue') {
        buttonBlue();
    } else if (thingy.value === 'yellow') {
        buttonYellow();
    } else if (thingy.value === 'reset') {
        buttonColorReset();
    } else if (thingy.value === 'random') {
        randomColors();
    }
}

function buttonRed() {
    for (let i = 0; i < all_buttons.length; i++) {
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add('red');
    }
}

function buttonGreen() {
    for (let i = 0; i < all_buttons.length; i++) {
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add('green');
    }
}

function buttonYellow() {
    for (let i = 0; i < all_buttons.length; i++) {
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add('yellow');
    }
}

function buttonBlue() {
    for (let i = 0; i < all_buttons.length; i++) {
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add('blue');
    }
}

function buttonColorReset() {
    for (let i = 0; i < all_buttons.length; i++) {
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add(copyAllButtons[i]);
    }
}

function randomColors() {
    var choices = ['red', 'green', 'yellow', 'blue']

    for (let i = 0; i < all_buttons.length; i++) {
        var randomNumber = Math.floor(Math.random() = 4);
        all_buttons[i].classList.remove(all_buttons[i].classList[1]);
        all_buttons[i].classList.add(choices[randomNumber]);
    }
}

//challenge:3
function generate() {
    var image = document.createElement('img');
    var div = document.getElementById('flex-box-gen');
    image.src = "https://cataas.com/cat/gif/says/Hello?filter=sepia&color=orange&size=40&type=or";
    div.appendChild(image);
}