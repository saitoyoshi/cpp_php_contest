const main = (input) => {
    const S = input.trim().slice(0, -'FESTIVAL'.length);
    console.log(S);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));