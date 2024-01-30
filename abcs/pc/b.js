main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    const s = lines.slice(1);
    const r = [];
    for (let i = 0; i < H; i++) {
        let arr = s[i].split('');
        for (let j = 0; j < W - 1; j++) {
            if (arr[j] === 'T' && arr[j + 1] === 'T') {
                arr[j] = 'P';
                arr[j + 1] = 'C';
            }
        }
        r.push(arr.join(''));
    }
    // console.log(r);
    for (const v of r) {
        console.log(v);
    }
}
