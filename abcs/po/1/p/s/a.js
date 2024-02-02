main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = Number(lines[0]);
    const s = lines[1].trim();
    // console.log(s);
    let flag = false;
    for (let i = 0; i < N; i++) {
        if (s[i] === ',' && !flag) {
            process.stdout.write('.');
        } else {
            process.stdout.write(s[i]);
        }
        if (s[i] === '"') {
            flag = !flag;
        }
    }
    console.log();
}