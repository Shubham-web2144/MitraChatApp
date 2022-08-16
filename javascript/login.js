const loginFormForm = document.querySelector(".login__form-form");
const loginFormBtn = document.querySelector(".login__form-btn button");
const errorBox = document.querySelector('.errorBox');

loginFormForm.addEventListener("submit", (e) => {
  e.preventDefault();
});

loginFormBtn.addEventListener("click", () => {
  let xml = new XMLHttpRequest();
  xml.open("POST", "../php/login.php");
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        if(data === 'login') {
            window.location.href = '../pages/userHome.php';
        }
        else {
            errorBox.innerHTML = data;
            errorBox.style.display = "block";
        }
      }
    }
  });

  let formData = new FormData(loginFormForm);
  xml.send(formData);
});
