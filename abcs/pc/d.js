main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [N, W] = lines[0].split(' ').map(Number);
    const s = lines.slice(1);
    for (const v of s) {
        console.log(v.replace(/TT/g, 'PC'));
    }
}
