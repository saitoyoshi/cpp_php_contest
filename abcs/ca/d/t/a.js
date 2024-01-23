main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, X] = lines[0].split(' ').map(Number);
    let x = X;
    const a = lines[1].split(' ').map(Number);
    const b = arrayFill(N, false);
    // console.log(b);
    i = x;
    do {
        b[i] = true;
        i = a[i - 1];
    } while (!b[i]);
    let r = 0;
    for (const v of b) {
        if (v) {
            r++;
        }
    }
    console.log(r);
}

function arrayFill(length, fillValue) {
    return Array.from({ length }, (_, index) => fillValue);
}