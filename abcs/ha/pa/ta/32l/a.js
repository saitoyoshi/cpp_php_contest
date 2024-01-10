main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const N = Number(input.trim());
    for (let i = N; i <= 919; i++) {
        const o = i % 10;
        const t = Math.floor(i / 10) % 10;
        const h = Math.floor(i / 100) % 10;
        if (h * t === o) {
            console.log(i);
            return;
        }

    }
}