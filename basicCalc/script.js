// elements
let screenEl = document.querySelector("input.screen");
let buttons = document.querySelectorAll("button");

buttons.forEach(btn => {
    btn.addEventListener("click", 
    () =>{
        if (btn.value == "C") {
            // console.log("clear");
            clearDisplay();
            
        }
        else if (btn.value == "="){
            // console.log("equals");
            calculate();
        }
        else{
            appendValue(btn.value)
            // console.log(btn.value);
        }
    })
});


function appendValue(value) {
    screenEl.value += value;
}

function clearDisplay() {
    screenEl.value = '';
}

function calculate() {
    try {
        const result = eval(screenEl.value);
       screenEl.value = result;
    } catch (error) {
        screenEl.value = 'Error';
    }
}
