main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, m] = lines[0].split(' ').map(Number);
    const s = lines[1];
    const t = lines[2];

    //     $lettersBeginsT = substr($t,0,$n);
    const beginsT = t.substring(0, n);
    const afterT = t.slice(-n);
    const isPre = s === beginsT;
    const isSuf = s === afterT;

    if (isPre && isSuf) {
        console.log(0);
    } else if (isPre && !isSuf) {
        console.log(1);

    } else if (isSuf && !isPre) {
        console.log(2);

    } else if (!isPre && !isSuf) {
        console.log(3);

    }
}