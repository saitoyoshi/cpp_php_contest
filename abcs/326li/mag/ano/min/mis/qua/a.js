main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    let [N, K] = lines[0].split(' ').map(Number);
    const s = lines[1];
    for (let i = 0; i < s.length; i++) {
        if (K > 0) {
            process.stdout.write(s[i]);
        } else {
            process.stdout.write("x");
        }
        if (s[i] === "o") {
            K--;
        }
    }
    console.log("");

}