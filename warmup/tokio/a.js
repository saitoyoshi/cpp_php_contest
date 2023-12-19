main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    const r = s.substring(0, 3);
    console.log(r);
}
