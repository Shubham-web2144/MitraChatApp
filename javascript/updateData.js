// uodate image code
const userInfoImgBtn = document.querySelector(".userInfo__img-form button");

userInfoImgForm.addEventListener("submit", (e) => {
  e.preventDefault();
});

userInfoImgBtn.addEventListener("click", () => {
  let xml = new XMLHttpRequest();
  xml.open("POST", "../php/updateImg.php");
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        if(data === 'changed') {
          window.location.reload();
        }
      }
    }
  });
  let formDataImg = new FormData(userInfoImgForm);
  xml.send(formDataImg);
});

// -------------------------------------------------------------------------------------------------------
// update name code

const userInfoNameFrmBtn = document.querySelector(
  ".userInfo__name-form button"
);
userInfoNameForm.addEventListener("submit", (e) => {
  e.preventDefault();
});
userInfoNameFrmBtn.addEventListener("click", () => {
  let xml = new XMLHttpRequest();
  xml.open("POST", "../php/updateName.php");
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        if(data === 'updated') {
          window.location.reload();
        }
      }
    }
  });
  let formData = new FormData(userInfoNameForm);
  xml.send(formData);
});


// ---------------------------------------------------------------------------------------------------------
// update bio code

const userInfoBioFrmBtn = document.querySelector(".userInfo__txt-form button");
userInfoTxtForm.addEventListener("submit", (e) => {
  e.preventDefault();
});
userInfoBioFrmBtn.addEventListener("click", () => {
  let xml = new XMLHttpRequest();
  xml.open("POST", "../php/updateBio.php");
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        if(data === 'updated') {
          window.location.reload();
        }
      }
    }
  });
  let formData = new FormData(userInfoTxtForm);
  xml.send(formData);
});


