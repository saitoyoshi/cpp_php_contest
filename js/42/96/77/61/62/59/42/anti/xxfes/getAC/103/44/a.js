const main = (input) => {
    let [N, K, X, Y] = input.trim().split('\n').map(e => parseInt(e));
    if (N <= K) {
        console.log(N * X);
        return;
    } else {
        let diff = N - K;
        console.log(K * X + diff * Y);
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));