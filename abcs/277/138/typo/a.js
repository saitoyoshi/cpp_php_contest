main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const s = lines[0];
    const t = lines[1];
    if (s === t) {
        console.log('Yes');
        return;
    }
    const len = s.length;
    // console.log(len);
    // return;
    let arr = Array.from(s);
    let brr = Array.from(s);
    for (let i = 0; i < len - 1; i++) {
        [arr[i], arr[i + 1]] = [arr[i + 1], arr[i]];
        const str = (arr.join(''));
        // console.log(str);
        if (str === t) {
            console.log('Yes');
            return;
        }
        arr = [...brr];
    }
    console.log('No');

}