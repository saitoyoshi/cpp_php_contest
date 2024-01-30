main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W, X, Y] = lines[0].split(' ').map(Number);
    const s = lines.slice(1);
    let cnt = 1;
    for (let i = X - 1; i >= 1; i--) {
        if (s[i - 1][Y - 1] === '#') {
            break;
        } else {
            cnt++;
        }
    }
    for (let i = X + 1; i <= H; i++) {
        if (s[i - 1][Y - 1] === '#') {
            break;
        } else {
            cnt++;
        }
    }
    for (let i = Y - 1; i >= 1; i--) {
        if (s[X - 1][i - 1] === '#') {
            break;
        } else {
            cnt++;
        }
    }
    for (let i = Y + 1; i <= W; i++) {
        if (s[X - 1][i - 1] === '#') {
            break;
        } else {
            cnt++;
        }
    }
    console.log(cnt);
}
