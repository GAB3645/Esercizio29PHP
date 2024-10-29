let img = document.getElementById("img");



document.querySelector("select").addEventListener("change", function() {
    switch(this.value) {
        case "USD":
            img.src = "https://www.worldometers.info/img/flags/us-flag.gif";
            break;
        case "JPY":
            img.src = "https://www.worldometers.info/img/flags/ja-flag.gif";
            break;
        case "CHF":
            img.src = "https://www.worldometers.info/img/flags/sz-flag.gif";
            break;
        case "GBP":
            img.src = "https://www.worldometers.info/img/flags/uk-flag.gif";
            break;
    }
})






