const main = (input) => {
    const N = parseInt(input.trim().split(' ')[0]);
    const A = parseInt(input.trim().split(' ')[1]);
    const B = parseInt(input.trim().split(' ')[2]);
    const res = N - A + B;
    console.log(res);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));