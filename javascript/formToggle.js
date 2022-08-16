const userInfImgBtn = document.querySelector(".userInfo__img-btn");
const backBtn = document.querySelectorAll(".backBtn");
const userInfoImgForm = document.querySelector(".userInfo__img-form");
const userInfoNameBtn = document.querySelector(".userInfo__name-btn");
const userInfoNameForm = document.querySelector(".userInfo__name-form");
const userInfoTxtBtn = document.querySelector(".userInfo__txt-btn");
const userInfoTxtForm = document.querySelector(".userInfo__txt-form");




userInfImgBtn.addEventListener("click", () => {
  userInfoImgForm.style.visibility = "visible";
});
backBtn.forEach((backBtn) => {
  backBtn.addEventListener("click", () => {
    userInfoImgForm.style.visibility = "hidden";
    userInfoNameForm.style.visibility = "hidden";
    userInfoTxtForm.style.visibility = "hidden";
  });
});

userInfoNameBtn.addEventListener("click", () => {
  userInfoNameForm.style.visibility = "visible";
});

userInfoTxtBtn.addEventListener('click', () => {
    userInfoTxtForm.style.visibility = "visible";
})
