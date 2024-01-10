main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const [n, m] = lines[0].split(' ').map(Number);
    let a = lines[1].split(' ').map(Number);
    let b = lines[2].split(' ').map(Number);
    let max = Math.max(...a);
    let indexes = a.reduce((acc, curv, curi) => {
        if (curv === max) {
            acc.push(curi + 1);
        }
        return acc;
    }, []);
    // console.log(indexes);
    for (const v of b) {
        if (indexes.includes(v)) {
            console.log('Yes');
            return;
        }
    }
    console.log('No');
}