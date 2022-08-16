const chatArea = document.querySelector('.chatArea__input');
const chatAreaBtn = document.querySelector('.chatArea__input-btn');
const chatMsg = document.querySelector('#chatArea__msg');

chatArea.addEventListener('submit', (e) => {
    e.preventDefault();
});

chatAreaBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/insertMsgGroup.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                chatArea.innerHTML = "";
                window.location.reload();
            }
        }
    });
    let formData = new FormData(chatArea);
    xml.send(formData);
});

const chatAreaChatBox = document.querySelector('.chatArea__chatBox');

setInterval(() => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/getGroupMsg.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                chatAreaChatBox.innerHTML = data;
            }
        }
    });
    let formData = new FormData(chatArea);
    xml.send(formData);
})