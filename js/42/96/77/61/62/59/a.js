const main = (input) => {
    let [s1, s2, s3] = input.trim().split(' ').map(e => e.toUpperCase());
    console.log(s1[0] + s2[0] + s3[0]);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));