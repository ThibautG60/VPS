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