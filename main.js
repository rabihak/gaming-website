const center = document.querySelector('.inner_slide');
const left = document.querySelector('.left_side');
const right = document.querySelector('.right_side');
const transition = document.querySelector('.slider_wrapper');

//buttons
const prev = document.getElementById('prev');
const next = document.getElementById('next');
//navbar
const car = document.querySelector('.car');
const sport = document.querySelector('.sport');
const shooter = document.querySelector('.shooter');
const kids = document.querySelector('.kids');
const fashion = document.querySelector('.fashion');
const girl = document.querySelector('.girl');
const multiplayer = document.querySelector('.multiplayer');
const cooking = document.querySelector('.cooking');
const puzzle = document.querySelector('.puzzle');
const strategy = document.querySelector('.strategy');
const action = document.querySelector('.action');
//filters
const actionf = document.querySelector('.actionf');
const cookingf = document.querySelector('.cookingf');
const sportf = document.querySelector('.sportf');
const girlf = document.querySelector('.girlf');
const kidf  = document.querySelector('.kidf ');
const shooterf = document.querySelector('.shooterf');
const puzzlef = document.querySelector('.puzzlef');
const strategyf = document.querySelector('.strategyf');
const fashionf = document.querySelector('.fashionf');
const multif = document.querySelector('.multif');
const carf = document.querySelector('.carf');
const mostpop = document.querySelector('.mostpop');
let mostpopwrap = document.querySelector('.mostpop .mostpopwrap')
function close(){
  mostpop.style.display = "none";
  carf.style.display = "none";
  actionf.style.display = "none";
  fashionf.style.display = "none";
  multif.style.display = "none";
  puzzlef.style.display = "none";
  strategyf.style.display = "none";
  shooterf.style.display = "none";
  kidf.style.display = "none";
  girlf.style.display = "none";
  sportf.style.display = "none";
  cookingf.style.display = "none";
}

car.addEventListener('click',function(){
  close();
  carf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".carf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
  //let ran = divs[Math.floor(Math.random()* divs.length)];
  //mostpopwrap.innerHTML = ran.innerHTML;
  
  //console.log(ran);
})

action.addEventListener('click',function(){
  close();
  actionf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".actionf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }

})
strategy.addEventListener('click',function(){
  close();
  strategyf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".strategyf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
kids.addEventListener('click',function(){
  close();
  kidf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".kidf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
girl.addEventListener('click',function(){
  close();
  girlf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".girlf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
multiplayer.addEventListener('click',function(){
  close();
  multif.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".multif .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
puzzle.addEventListener('click',function(){
  close();
  puzzlef.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".puzzlef .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
fashion.addEventListener('click',function(){
  close();
  fashionf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".fashionf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
cooking.addEventListener('click',function(){
  close();
  cookingf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".cookingf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
sport.addEventListener('click',function(){
  close();
  sportf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".sportf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})
shooter.addEventListener('click',function(){
  close();
  shooterf.style.display = "unset";
  mostpop.style.display ="unset";
  let divs = document.querySelectorAll(".shooterf .filtered .filtwrap .filtsec .filt-img ");
  console.log(divs);
  var arrdivs = Array.prototype.slice.call(divs);
  mostpopwrap.innerHTML="";
  for (let index = 0; index < 3; index++) {
    let ran = Math.floor(Math.random()* arrdivs.length);
    let temp = arrdivs[ran].cloneNode(true);
    temp.style.marginBottom = "15px";
    mostpopwrap.appendChild(temp);
    arrdivs.splice(ran, 1);
  }
})







next.addEventListener('click',function(){
  const centerht = center.innerHTML;
  const leftht = left.innerHTML;
  const rightht = right.innerHTML;
  center.innerHTML= rightht;
  left.innerHTML = centerht;
  right.innerHTML = leftht;
})
prev.addEventListener('click',function(){
  const centerht = center.innerHTML;
  const leftht = left.innerHTML;
  const rightht = right.innerHTML;
  center.innerHTML= leftht;
  left.innerHTML = rightht;
  right.innerHTML = centerht; 
})

