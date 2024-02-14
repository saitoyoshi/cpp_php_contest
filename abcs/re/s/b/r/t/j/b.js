const people = [
    { name: "Alice", age: 25 },
    { name: "Bob", age: 30 },
    { name: "Charlie", age: 20 },
    { name: "David", age: 35 },
];

// function findYongest(people) {
//     people.sort((a, b) => a.age - b.age);
//     return people[0];
// }
function findYongest(people) {
    if (people.length === 0) {
        return null;
    }
    return people.reduce((youngest, person) => {
        return person.age < youngest.age ? person : youngest;
    }, people[0]);
}
// findYongest(people);
const youngestPerson = findYongest(people);
console.log(youngestPerson);
// {name: "Charlie",age:20},