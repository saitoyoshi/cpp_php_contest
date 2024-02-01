main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    const c = [];
    for (let i = 1; i <= H; i++) {
        c.push(lines[i].trim().split(''));
    }
    // console.log(c);
    // return;
    let i;
    for (i = 0; i < H; i++) {
        for (let j = 0; j < W; j++) {
            if (c[i][j] == '.') {
                let candidates = check(c, i, j);
                c[i][j] = candidates.shift();
            }
        }
        console.log(c[i].join(''));
    }
}

function check(c, i, j) {
    const t = [1, 2, 3, 4, 5];
    const e = [];
    if (j - 1 >= 0 && c[i][j - 1] != undefined) {
        e.push(Number(c[i][j - 1]));
    }
    if (j + 1 < c[i].length && c[i][j + 1] != undefined) {
        e.push(Number(c[i][j + 1]));
    }
    if (i + 1 < c.length && c[i + 1][j] != undefined) {
        e.push(Number(c[i + 1][j]));
    }
    if (i - 1 >= 0 && c[i - 1][j] != undefined) {
        e.push(Number(c[i - 1][j]));
    }
    return t.filter(v => !e.includes(v));
}