let userBox = document.querySelector(".users");

let userInterval = setInterval(() => {
  let xml = new XMLHttpRequest();
  xml.open("GET", "../php/userList.php");
  xml.addEventListener("load", () => {
    if (xml.readyState === XMLHttpRequest.DONE) {
      if (xml.status === 200) {
        let data = xml.response;
        userBox.innerHTML = data;
      }
    }
  });

  xml.send();
}, 500);
