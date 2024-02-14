const person = {
    firstName: "John",
    lastName: "Doe",
    age: 30,
    address: {
        city: "Tokyo",
        country: "Japan",
    },
    getFullName() {
        return this.firstName + " " + this.lastName;
    }
};

// console.log(person.firstName);
// console.log(person['firstName']);
// console.log(person["age"]);
// console.log(person.address.city);
// console.log(person["address"].city);
// console.log(person["address"]["city"]);
let r = person.getFullName();
console.log(r);