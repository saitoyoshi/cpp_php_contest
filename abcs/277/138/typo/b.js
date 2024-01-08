main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let s = lines[0];
    let t = lines[1];
    if (s === t) {
        console.log('Yes');
        return;
    }
    for (let i = 0; i < s.length - 1; i++) {
        s = swapAdjustChars(s, i, i + 1);
        if (s === t) {
            console.log('Yes');
            return;
        }
        s = swapAdjustChars(s, i, i + 1);

    }
    console.log('No');
}

function swapAdjustChars(str, idx1, idx2) {
    const arr = str.split('');
    [arr[idx1], arr[idx2]] = [arr[idx2], arr[idx1]];
    return arr.join('');
}