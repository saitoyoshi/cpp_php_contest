main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    if (s === "Hello,World!") {
        console.log("AC");
    } else {
        console.log("WA");
    }
}