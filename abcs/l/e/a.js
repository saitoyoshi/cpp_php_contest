main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = [];
    for (let i = 1; i <= N; i++) {
        a.push(lines[i].trim());
    }
    // console.log(a);
    let max = 0;
    let result;
    for (let i = 0; i < N; i++) {
        const name = a[i];
        let cnt = 0;
        for (let j = 0; j < N; j++) {
            if (name === a[j]) {
                cnt++;
            }
        }
        if (max < cnt) {
            max = cnt;
            result = name;
        }
    }
    console.log(result);
}