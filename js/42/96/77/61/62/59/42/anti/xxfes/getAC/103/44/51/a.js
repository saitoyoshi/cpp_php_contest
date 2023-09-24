const main = (input) => {
    let s = input.trim();
    s = s.replaceAll(',', ' ');
    console.log(s);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));