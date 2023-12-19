main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    const d = N % 10;
    if (d === 2 || d === 4 || d === 5 || d === 7 || d === 9) {
        console.log("hon");
    } else if (d === 3) {
        console.log("bon");
    } else {
        console.log("pon");
    }
}
