main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const [n, m] = input.trim().split(' ').map(Number);
    let nc, mc;
    if (n <= 1) {
        nc = 0;
    } else {
        nc = n * (n - 1) / 2;
    }
    if (m <= 1) {
        mc = 0;
    } else {
        mc = m * (m - 1) / 2;
    }
    console.log(nc + mc);
}