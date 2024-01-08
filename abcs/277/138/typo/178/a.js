main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const N = lines[0];
    let [s, t] = lines[1].split(' ');
    // console.log(s);
    // console.log(t);
    for (let i = 0; i < N; i++) {
        process.stdout.write(s[i]);
        process.stdout.write(t[i]);
    }
    console.log();
}