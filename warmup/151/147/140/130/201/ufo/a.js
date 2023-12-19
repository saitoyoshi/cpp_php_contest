main(require('fs').readFileSync('/dev/stdin', 'utf8'))


function main(input) {
    let s = input.trim();
    let target = "ZONe";
    let count = (s.match(new RegExp(target, "g")) || []).length;
    console.log(count);
}
