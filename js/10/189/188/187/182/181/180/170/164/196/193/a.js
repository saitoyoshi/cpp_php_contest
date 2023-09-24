const main = (input) => {
    const teika = parseInt(input.trim().split(' ')[0]);
    const urine = parseInt(input.trim().split(' ')[1]);
    const r = ((teika - urine) / teika) * 100;
    console.log(r);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));