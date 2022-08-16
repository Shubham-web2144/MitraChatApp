const contactBoxForm = document.querySelector('.contactBox__form');
const contactBoxBtn = document.querySelector('.contactBox-btn');

contactBoxForm.addEventListener('submit', (e) => {
    e.preventDefault();
});

contactBoxBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/contact.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'submited') {
                    alertBox.style.visibility = "visible";
                }
                else {
                    alert(data);
                }
            }
        }
    });
    let formData = new FormData(contactBoxForm);
    xml.send(formData);
})