main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    if (s[2] === s[3] && s[4] === s[5]) {
        console.log("Yes");
    } else {

        console.log("No");
    }
}
