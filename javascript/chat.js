const chatForm = document.querySelector('.chatArea__input');
const sendBtn = document.querySelector('.chatArea__input-btn');
const chatAreaMsg = document.querySelector('#chatArea__msg');


chatForm.addEventListener('submit', (e) => {
    e.preventDefault();
});

sendBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/insertMsg.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                chatAreaMsg.value = "";
            }
        }
    });
    let formData = new FormData(chatForm);
    xml.send(formData);
});

const chatAreaChatBox = document.querySelector('.chatArea__chatBox');
setInterval(() => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/getMsg.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                chatAreaChatBox.innerHTML = data;
            }
        }
    });
    let formData = new FormData(chatForm)
    xml.send(formData);
}, 1000);