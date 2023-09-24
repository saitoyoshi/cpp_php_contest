const { exit } = require('process');

const main = (input) => {
    let [V, T, S, D] = input.trim().split(' ');
    V = parseInt(V);
    T = parseInt(T);
    S = parseInt(S);
    D = parseInt(D);
    const toutyaku = D / V;
    if (T <= toutyaku && toutyaku <= S) {
        console.log('No');
    } else {
        console.log('Yes');
    }
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));