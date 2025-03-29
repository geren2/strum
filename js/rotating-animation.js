document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("discoverimg").onclick = function () {
        anime({
            targets: "#discoverimg",
            rotate: '+=360',
            duration: 1000,
            easing: 'easeInOutBack'
        });
    };

    document.getElementById("eventsimg").onclick = function () {
        anime({
            targets: "#eventsimg",
            rotate: '+=360',
            duration: 1000,
            easing: 'easeInOutBack'
        });
    };

    document.getElementById("aboutusimg").onclick = function () {
        anime({
            targets: "#aboutusimg",
            rotate: '+=360',
            duration: 1000,
            easing: 'easeInOutBack'
        });
    };
});