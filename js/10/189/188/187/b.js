const main = (input) => {
    const A = (input.trim().split(" ")[0]);
    const B = (input.trim().split(" ")[1]);

    getS(A) >= getS(B) ? console.log(getS(A)) : console.log(getS(B));
}

function getS(str) {
    return parseInt(str[0]) + parseInt(str[1]) + parseInt(str[2]);
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));