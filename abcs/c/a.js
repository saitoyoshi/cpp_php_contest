main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    let b = N.toString(2);
    let cnt = 0;
    for (let i = b.length - 1; i >= 0; i--) {
        if (b[i] === '0') {
            cnt++;
        } else {
            break;
        }
    }
    console.log(cnt);
}