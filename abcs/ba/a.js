main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    // console.log(N);
    // console.log(a);
    let field = [0, 0, 0, 0];
    let p = 0;
    for (const v of a) {
        let nextField = [0, 0, 0, 0];
        field[0] = 1;
        for (const pos of[0, 1, 2, 3]) {
            if (field[pos] === 1) {
                if (pos + v >= 4) {
                    p++;
                } else {
                    nextField[pos + v] = 1;
                }
            }
        }
        field = nextField;
    }
    console.log(p);
}