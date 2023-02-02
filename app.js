const color1 = document.querySelector(".main_resistanceContainer_core__color1");
const color2 = document.querySelector(".main_resistanceContainer_core__color2");
const color3 = document.querySelector(".main_resistanceContainer_core__color3");
const color4 = document.querySelector(".main_resistanceContainer_core__color4");

const selectColor1 = document.querySelector(".main_choiseContainer_color1");
const selectColor2 = document.querySelector(".main_choiseContainer_color2");
const selectColor3 = document.querySelector(".main_choiseContainer_color3");
const selectColor4 = document.querySelector(".main_choiseContainer_color4");

selectColor1.addEventListener("change", changeColor1)

function changeColor1() {
    if(selectColor1.value == 0) {
        color1.style.backgroundColor = "black"
    } if (selectColor1.value == 1) {
        color1.style.backgroundColor = "brown"
    } if(selectColor1.value == 2) {
        color1.style.backgroundColor = "red"
    } if (selectColor1.value == 3) {
        color1.style.backgroundColor = "orange"
    } if(selectColor1.value == 4) {
        color1.style.backgroundColor = "yellow"
    } if (selectColor1.value == 5) {
        color1.style.backgroundColor = "green"
    } if (selectColor1.value == 6) {
        color1.style.backgroundColor = "blue"
    } if(selectColor1.value == 7) {
        color1.style.backgroundColor = "violet"
    } if (selectColor1.value == 8) {
        color1.style.backgroundColor = "grey"
    } if (selectColor1.value == 9) {
        color1.style.backgroundColor = "white"
    }
}

changeColor1()

selectColor2.addEventListener("change", changeColor2)

function changeColor2() {
    if(selectColor2.value == 0) {
        color2.style.backgroundColor = "black"
    } if (selectColor2.value == 1) {
        color2.style.backgroundColor = "brown"
    } if(selectColor2.value == 2) {
        color2.style.backgroundColor = "red"
    } if (selectColor2.value == 3) {
        color2.style.backgroundColor = "orange"
    } if(selectColor2.value == 4) {
        color2.style.backgroundColor = "yellow"
    } if (selectColor2.value == 5) {
        color2.style.backgroundColor = "green"
    } if (selectColor2.value == 6) {
        color2.style.backgroundColor = "blue"
    } if(selectColor2.value == 7) {
        color2.style.backgroundColor = "violet"
    } if (selectColor2.value == 8) {
        color2.style.backgroundColor = "grey"
    } if (selectColor2.value == 9) {
        color2.style.backgroundColor = "white"
    }
}

changeColor2()

selectColor3.addEventListener("change", changeColor3)

function changeColor3() {
    if(selectColor3.value == 1) {
        color3.style.backgroundColor = "black"
    } if (selectColor3.value == 10) {
        color3.style.backgroundColor = "brown"
    } if(selectColor3.value == 100) {
        color3.style.backgroundColor = "red"
    } if (selectColor3.value == 1000) {
        color3.style.backgroundColor = "orange"
    } if(selectColor3.value == 10000) {
        color3.style.backgroundColor = "yellow"
    } if (selectColor3.value == 100000) {
        color3.style.backgroundColor = "green"
    } if (selectColor3.value == 1000000) {
        color3.style.backgroundColor = "blue"
    } if(selectColor3.value == 10000000) {
        color3.style.backgroundColor = "violet"
    } if (selectColor3.value == 100000000) {
        color3.style.backgroundColor = "grey"
    } if (selectColor3.value == 1000000000) {
        color3.style.backgroundColor = "white"
    } if (selectColor3.value == 0.1) {
        color3.style.backgroundColor = "gold"
    } if (selectColor3.value == 0.01) {
        color3.style.backgroundColor = "silver"
    }
}

changeColor3()

selectColor4.addEventListener("change", changeColor4)

function changeColor4() {
    if(selectColor4.value == 1) {
        color4.style.backgroundColor = "brown"
    } if(selectColor4.value == 2) {
        color4.style.backgroundColor = "red"
    } if(selectColor4.value == 0.5) {
        color4.style.backgroundColor = "green"
    } if(selectColor4.value == 0.25) {
        color4.style.backgroundColor = "blue"
    } if(selectColor4.value == 0.10) {
        color4.style.backgroundColor = "violet"
    } if(selectColor4.value == 0.05) {
        color4.style.backgroundColor = "grey"
    } if(selectColor4.value == 5) {
        color4.style.backgroundColor = "gold"
    } if(selectColor4.value == 10) {
        color4.style.backgroundColor = "silver"
    }
}

changeColor4();