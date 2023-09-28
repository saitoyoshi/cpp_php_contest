main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    const lines = input.trim().split('\n');
    const one = lines[0][0];
    const two = lines[1][1];
    const three = lines[2][2];
    console.log(one + two + three);
}