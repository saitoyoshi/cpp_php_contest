main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const a = [];
    a.push(lines[0].split(' '));
    a.push(lines[1].split(' '));
    a.push(lines[2].split(' '));
    // console.log(a);
    const N = Number(lines[3]);
    for (let i = 4; i < 4 + N; i++) {
        const v = lines[i];
        for (let j = 0; j < 3; j++) {
            for (let k = 0; k < 3; k++) {
                if (a[j][k] === v)
                    a[j][k] = true;
            }
        }
    }
    if (isBingo(a)) {
        console.log('Yes');
    } else {
        console.log('No');
    }
    // console.log(a);
}

function isBingo(a) {
    if (a[0][1] === a[0][2] && a[0][0] === a[0][1]) {
        return true;
    }
    if (a[1][1] === a[1][2] && a[1][0] === a[1][1]) {
        return true;
    }
    if (a[2][1] === a[2][2] && a[2][0] === a[2][1]) {
        return true;
    }

    if (a[0][0] === a[1][0] && a[1][0] === a[2][0]) {
        return true;
    }
    if (a[0][1] === a[1][1] && a[1][1] === a[2][1]) {
        return true;
    }
    if (a[0][2] === a[1][2] && a[1][2] === a[2][2]) {
        return true;
    }

    if (a[0][0] === a[1][1] && a[1][1] === a[2][2]) {
        return true;
    }
    if (a[0][2] === a[1][1] && a[1][1] === a[2][0]) {
        return true;
    }
    return false;
}