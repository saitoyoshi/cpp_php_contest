main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    arr = input.trim().split(' ').map(Number);
    const m = arr[0];
    // console.log(m);
    const d = arr[1];
    // console.log(m);
    // return;
    let cnt = 0;
    for (let i = 1; i <= m; i++) {
        for (let j = 1; j <= d; j++) {
            const one = j % 10;
            const ten = Math.floor(j / 10);
            if (one >= 2 && ten >= 2) {
                if (i === (one * ten)) {
                    // console.log(i, j);
                    cnt++;
                }
            }
        }
    }
    console.log(cnt);
}