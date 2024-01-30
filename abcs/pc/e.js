main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [H, W] = lines[0].split(' ').map(Number);
    const s = lines.slice(1);
    for (const v of s) {
        let arr = v.split('');
        for (let i = 0; i < W - 1; i++) {
            if (arr[i] === 'T' && arr[i + 1] === 'T') {
                arr[i] = 'P';
                arr[i + 1] = 'C';
            }
        }
        console.log(arr.join(''));
    }
}
