let a = 0, b = 0, c = 0;
let x = 0, y = 0, z = 0;
let p = 1, q = 1, r = 1;
var body = document.getElementsByTagName("BODY")[0];

setInterval(function () {
    randomy();
    body.style.backgroundColor = "rgb(" + a + "," + b + "," + c + ")";
}, 500);

function randomy() {
    if (p == 1) {
        a = a + 1;
        if (a > 50) { p = 0; }
    } else {
        a = a - 2;
        if (a < 20) { p = 1; }
    }
    if (q == 1) {
        b = b + 1;
        if (b > 50) { q = 0; }
    } else {
        b = b - 3;
        if (b < 20) { q = 1; }
    }
    if (r == 1) {
        c = c + 2;
        if (c > 50) { r = 0; }
    } else {
        c = c - 1;
        if (c < 20) { r = 1; }
    }
    x = 255 - a;
    x = Math.abs(x);
    
    y = 255 - b;
    y = Math.abs(y);
    
    z = 255 - c;
    z = Math.abs(z);
}