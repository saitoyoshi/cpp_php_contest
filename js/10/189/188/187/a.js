const main = (input) => {
    const A = parseInt(input.trim().split(" ")[0]);
    const B = parseInt(input.trim().split(" ")[1]);

    getS(A) >= getS(B) ? console.log(getS(A)) : console.log(getS(B));
}

function getS(n) {
    const oneth = n % 10;
    n = Math.floor(n / 10);
    const tenth = n % 10;
    n = Math.floor(n / 10);
    const hundreth = n % 10;
    return oneth + tenth + hundreth;
}
main(require('fs').readFileSync('/dev/stdin', 'utf8'));