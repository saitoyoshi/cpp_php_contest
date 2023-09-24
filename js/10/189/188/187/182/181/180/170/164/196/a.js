const main = (input) => {
    const b = parseInt(input.trim().split('\n')[0].split(' ')[1]);
    const c = parseInt(input.trim().split('\n')[1].split(' ')[0]);
    const r = b - c;
    console.log(r);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));
// x->b y->c