const form = document.querySelector('.about__feedback-form');
const formBtn = document.querySelector('.about__feedback-form-btn');

form.addEventListener('submit', (e) => {
    e.preventDefault();
});

formBtn.addEventListener('click', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/feedback.php");
    xml.addEventListener("load", () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                if(data === 'submited') {
                    form.innerHTML = `<div class="feedback__result">
                    <span class="material-icons">
                check_circle
                </span>
                    <h1>Thank You!</h1>
                    <h4>Your response is valuble for us</h4>
                </div>`;
                }
                else {
                    alert(data);
                }
            }
        }
    });
    let formData = new FormData(form);
    xml.send(formData);
});