const color1 = document.querySelector(".main_resistanceContainer_core__color1");
const color2 = document.querySelector(".main_resistanceContainer_core__color2");
const color3 = document.querySelector(".main_resistanceContainer_core__color3");
const color4 = document.querySelector(".main_resistanceContainer_core__color4");

const selectColor1 = document.querySelector(".main_choiseContainer_color1");
const selectColor2 = document.querySelector(".main_choiseContainer_color2");
const selectColor3 = document.querySelector(".main_choiseContainer_color3");
const selectColor4 = document.querySelector(".main_choiseContainer_color4");

color1.style.backgroundColor = selectColor1[0].label;

console.log(selectColor1[0].label);