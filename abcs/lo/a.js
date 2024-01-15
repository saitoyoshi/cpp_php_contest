main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    process.stdout.write('L');
    for (let i = 0; i < N; i++) {
        process.stdout.write('o');
    }
    console.log('ng');
}