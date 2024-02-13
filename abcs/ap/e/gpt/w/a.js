main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    console.log(s.replace(/[a|i|u|e|o]/g, ""));
}