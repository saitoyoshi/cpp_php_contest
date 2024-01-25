main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    let arr = lines[1].split(' ').map(Number);
    let bArr = [...arr];
    if (isOk(bArr)) {
        console.log('YES');
        return;
    }
    for (let i = 0; i < N; i++) {
        for (let j = i + 1; j < N; j++) {
            [bArr[i], bArr[j]] = [bArr[j], bArr[i]];
            if (isOk(bArr)) {
                console.log('YES');
                return;
            }
            bArr = [...arr];
        }
    }
    console.log('NO');
}

function isOk(arr) {
    for (let i = 0; i < arr.length - 1; i++) {
        if (arr[i] > arr[i + 1]) {
            return false;

        }

    }
    return true;
}
