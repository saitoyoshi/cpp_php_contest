const main = (input) => {
    const K = input.trim();
    let evenCount = 0;
    let oddCount = 0;
    for (let i = 1; i <= K; i++) {
        if (i % 2 === 0) {
            evenCount++;
        } else {
            oddCount++;
        }
    }
    const r = evenCount * oddCount;
    console.log(r);
}


main(require('fs').readFileSync('/dev/stdin', 'utf8'));