main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const x = Number(input.trim());
    let r;
    if (1800 <= x && x <= 1999) {
        r = 1;
    } else if (1600 <= x && x <= 1799) {
        r = 2;
    } else if (1400 <= x && x <= 1599) {
        r = 3
    } else if (1200 <= x && x <= 1399) {
        r = 4;
    } else if (1000 <= x && x <= 1199) {
        r = 5;
    } else if (800 <= x && x <= 999) {
        r = 6;
    } else if (600 <= x && x <= 799) {
        r = 7;
    } else {
        r = 8;
    }
    console.log(r);
}