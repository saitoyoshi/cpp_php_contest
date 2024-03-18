main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let a1 = lines[1].trim().split('');
    let a2 = lines[2].trim().split('');
    let a3 = lines[3].trim().split('');
    let cnt = 0;
    for (let i = 0; i < N; i++) {
        if (a1[i] === a2[i] && a2[i] === a3[i]) {;
        } else if (a1[i] === a2[i] && a2[i] !== a3[i]) {
            cnt++
        } else if (a1[i] !== a2[i] && a2[i] === a3[i]) {
            cnt++;
        } else if (a1[i] === a3[i] && a2[i] !== a3[i]) {
            cnt++;
        } else {
            cnt += 2;
        }
    }
    console.log(cnt);
}