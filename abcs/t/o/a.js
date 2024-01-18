main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const a = lines[1].split(' ').map(Number);
    let cnt = 0;
    for (let i = 0; i < N - 2; i++) {
        if (ok(a[i], a[i + 1], a[i + 2])) {
            cnt++;
        }

    }
    console.log(cnt);

}

function ok(n1, n2, n3) {
    if (n1 < n2 && n2 < n3) {
        return true;
    }
    if (n1 > n2 && n2 > n3) {
        return true;
    }
    return false;
}