const fizzBuzzElement = document.getElementById("fizz-buzz");

const fizzBuzz = (limit) => {
    var array = [];
    for(var i = 1; i <= limit; i++) {
        
        if (i % 3 == 0 || i % 5 == 0) {
            array.push(`<p>${(i % 3 == 0)? "Fizz" : ""}${(i % 5 == 0)? "Buzz" : ""}</p>`);
        } else {
            array.push(`<p>${i}</p>`);
        }
    }
    return array;
};
console.log(fizzBuzz(100));
fizzBuzz(100).map((el) => {
    console.log(el);
    fizzBuzzElement.innerHTML += el;
});

