const main = (input) => {
    // e->whi,o->bla
    const N = parseInt(input.trim());
    N % 2 === 0 ? console.log('White') : console.log('Black');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));