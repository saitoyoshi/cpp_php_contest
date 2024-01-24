main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const arr = lines[1].split(' ').map(Number);
    let cnt = 0;
    for (let i = 1; i <= N; i++) {
        const D = arr[i - 1];
        for (let j = 1; j <= D; j++) {
            const s = String(i) + String(j);
            if (isZoro(s)) {
                cnt++;
            }
            // console.log(s);
        }
    }
    console.log(cnt);

}

function isZoro(s) {
    const ch = s[0];
    for (let i = 1; i < s.length; i++) {
        if (ch !== s[i]) {
            return false;
        }
    }
    return true;
}
