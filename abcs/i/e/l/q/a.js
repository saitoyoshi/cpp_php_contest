main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let [N, x] = lines[0].split(' ').map(Number);
    const s = lines[1].trim();
    // console.log(s);
    for (let i = 0; i < N; i++) {
        if (s[i] === 'o') {
            x++;
        } else if (s[i] === 'x' && x !== 0) {
            x--;
        }
    }
    console.log(x);
}