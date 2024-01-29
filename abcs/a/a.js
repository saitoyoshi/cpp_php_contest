main(require('fs').readFileSync('/dev/stdin', 'utf8'))

//  AABCDDEFE
function main(input) {
    let N = Number(input.trim());
    for (let i = 100000; i < 1000000; i++) {
        let s = String(i);
        N--;
        if (N === 0) {
            console.log(s[0] + s[0] + s[1] + s[2] + s[3] + s[3] + s[4] + s[5] + s[4]);
        }
    }
}
