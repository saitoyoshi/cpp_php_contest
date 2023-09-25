const main = (input) => {
    let [h1, m1, h2, m2, k] = input.trim().split(' ').map(Number);
    let diffh = h2 - h1;
    let diffm = m2 - m1;
    let r = diffh * 60 + diffm - k;
    console.log(r);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));