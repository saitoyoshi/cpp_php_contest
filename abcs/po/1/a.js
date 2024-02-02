main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    arr = input.trim().split(' ');
    const num = arr[0] + arr[1];
    // console.log(num);
    // console.log(Number(Math.sqrt(num)));
    // return;
    if (isHeihou(num)) {
        console.log('Yes');
    } else {
        console.log('No');
    }

}

function isHeihou(n) {
    const sqrt = Math.sqrt(n);
    if (Number.isInteger(sqrt)) {
        return true;
    }
    return false;

}