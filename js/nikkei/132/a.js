main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const arr = input.trim().split('');
    // console.log(arr);
    let uniq = Array.from(new Set(arr));
    let uniqArr = [...uniq];
    let count1 = arr.filter(v => v === uniqArr[0]);
    let count2 = arr.filter(v => v === uniqArr[1]);
    // console.log(count1);
    // console.log(count2);
    // console.log(uniqArr);
    if (uniq.length === 2 && count1.length === 2 && count2.length === 2) {
        console.log('Yes');
    } else {
        console.log('No');
    }
}