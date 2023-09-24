const main = (input) => {
    let [N, K] = input.trim().split(' ').map(e => parseInt(e));
    let cnt = 0;
    for (let i = 1; i <= N; i++) {
        if (i % 2 === 1) {
            cnt++;
        }
    }
    cnt >= K ? console.log('YES') : console.log('NO');
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));