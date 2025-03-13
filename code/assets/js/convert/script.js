function getFahrenheitTemp(tmp) {
    let v = parseFloat((tmp * 1.8) + 32);
    return Math.round(v * Math.pow(10, 2)) / Math.pow(10, 2);
}

function getKelvinTemp(tmp) {
    let v = parseFloat(tmp + 273.15);
    return Math.round(v * Math.pow(10, 2)) / Math.pow(10, 2);
}

let celsius = document.querySelector('.celsius p');
let kelvin = document.querySelector('.kelvin p');
let fahrenheit = document.querySelector('.fahrenheit p');

function reset(temp) {
    kelvin.textContent = getKelvinTemp(temp);
    fahrenheit.textContent = getFahrenheitTemp(temp);
}

let temp = document.querySelector('#temp');
window.addEventListener('DOMContentLoaded', function () {
    reset(temp.value);
});

temp.addEventListener('input', function () {
    if (this.value > 10 && this.value < 100) {
        document.querySelector('body').style.backgroundColor = 'rgba(255, 115, 0, 0.' + this.value + ')';
    }
    let tmp = this.value;
    celsius.textContent = tmp;
    kelvin.textContent = getKelvinTemp(tmp);
    fahrenheit.textContent = getFahrenheitTemp(tmp);
})



