main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, k] = lines[0].split(' ').map(Number);
    const h = lines[1].split(' ').map(Number);
    h.sort((m, n) => m - n);
    let sum = 0;
    for (let i = 0; i < n - k; i++) {
        sum += h[i];
    }
    console.log(sum);

}