const numbers = [1, 2, 3, 4, 5];
const sum = numbers.reduce((accu, curr) => accu + curr, 0);
const max = numbers.reduce((max, curr) => Math.max(max, curr));
const min = numbers.reduce((min, cur) => {
    console.log("min: " + min);
    console.log("cur: " + cur);
    return Math.min(min, cur);
});
const t = numbers.reduce((a, c) => {
    console.log(c);
});
// console.log(max);