for(let i = 1; i <= 100;) {
    console.log((i++ % 3 ? "": "Fizz") + (i % 5? "": "Buzz") || i);
}