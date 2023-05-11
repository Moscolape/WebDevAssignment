const btn1 = document.getElementById('btn1');
const btn2 = document.getElementById('btn2');
const btn3 = document.getElementById('btn3');
const btn4 = document.getElementById('btn4');
const btn5 = document.getElementById('btn5');
const btn6 = document.getElementById('btn6');
const btn7 = document.getElementById('btn7');
const btn8 = document.getElementById('btn8');
const btn9 = document.getElementById('btn9');
const btn10 = document.getElementById('btn10');
const btn11 = document.getElementById('btn11');
const btn12 = document.getElementById('btn12');
const btn13 = document.getElementById('btn13');
const btn14 = document.getElementById('btn14');
const btn15 = document.getElementById('btn15');
const btn16 = document.getElementById('btn16');
const btn17 = document.getElementById('btn17');
const btn18 = document.getElementById('btn18');
const btn19 = document.getElementById('btn19');
const btn20 = document.getElementById('btn20');
const btn21 = document.getElementById('btn21');
const btn22 = document.getElementById('btn22');
const btn23 = document.getElementById('btn23');
const btn24 = document.getElementById('btn24');
const btn25 = document.getElementById('btn25');
const btn26 = document.getElementById('btn26');
const btn27 = document.getElementById('btn27');
const btn28 = document.getElementById('btn28');
const btn29 = document.getElementById('btn29');
const btn30 = document.getElementById('btn30');
const btn31 = document.getElementById('btn31');
const btn32 = document.getElementById('btn32');
const btn33 = document.getElementById('btn33');
const btn34 = document.getElementById('btn34');
const btn35 = document.getElementById('btn35');
const btn36 = document.getElementById('btn36');


const any = document.getElementById('any');
const placeIt = document.getElementById('place');


const buttons = [btn1, btn2, btn3, btn4, btn5, btn6, btn7, btn8, btn9, btn10, btn11, btn12, btn13, btn14, btn15, btn16, btn17, btn18, btn19, btn20, btn21, btn22, btn23, btn24, btn25, btn26, btn27, btn28, btn29, btn30, btn31, btn32, btn33, btn34, btn35, btn36];

let cart = [];
let user = document.getElementById('user-order');


for(let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', () => {
        if (buttons[i].innerHTML === 'Add'){
            buttons[i].innerHTML = 'Remove';
            cart.push(buttons[i].title);
            
            let show = "";
            for(let k = 0; k < cart.length; k++){
                show += cart[k] + "- $5" + ", ";
            }
            user.value = show;
        } else {
            buttons[i].innerHTML = 'Add';
            for( let j = 0; j < cart.length; j++){ 
                if ( cart[j] === buttons[i].title) { 
                    cart.splice(j, 1); 
                }
            }

            let show = "";
            for(let k = 0; k < cart.length; k++){
                show += cart[k] + "- $5" + ", ";
            }
            user.value = show;
        }

        if (cart.length !== 0) {
            any.style.display = 'none';
            placeIt.style.display = 'inline-block';
        } else {
            any.style.display = 'inline';
            placeIt.style.display = 'none';
        }
    })
};
