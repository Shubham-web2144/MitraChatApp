// Screen Loading js code
let loaderPage = document.querySelector(".logo__loader");

window.onload = () => {
  setTimeout(() => {
    loaderPage.style.visibility = "hidden";
  }, 3000);
};

// input box animation js code

// const inputBox = document.querySelectorAll(".login__form-inputBox");
const input = document.querySelectorAll(".login__form-inputBox input");

input.forEach((inp) => {
  inp.addEventListener("keydown", () => {
    inp.parentNode.classList.add('active');
      if(inp.value == '') {
        inp.parentNode.classList.remove('active');
      }
  });
});

// password show hide function 

const eyeBtn = document.querySelector('.eyeBtn');
const inputPass = document.querySelector('.inputPass');

eyeBtn.addEventListener('click', () => {
    if(inputPass.type === 'password') {
        inputPass.type = 'text';
        eyeBtn.innerHTML = 'visibility_off';
    }
    else {
        inputPass.type = 'password';
        eyeBtn.innerHTML = 'visibility';
    }
});

// display group form

