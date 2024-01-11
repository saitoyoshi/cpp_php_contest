main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [h, w] = lines[0].split(' ').map(Number);
    let cnt = 0;
    const x = [];
    for (let i = 0; i < w; i++) {
        for (let j = 1; j <= h; j++) {
            if (lines[j][i] === '#') {
                cnt++;
            }
        }
        x.push(cnt);
        cnt = 0;
    }
    console.log(x.join(' '));
}