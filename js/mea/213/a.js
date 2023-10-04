main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    // a xor c = b ->a xor a xor c = a xor b
    // -> 0 xor c = a xor b -> c = a xor b;
    const [a, b] = input.trim().split(' ').map(Number);
    const c = a ^ b;
    console.log(c);
}