const searchBoxInput = document.querySelector('.search__box form input');
const searchForm = document.querySelector('.search__box form');


searchForm.addEventListener('submit', (e) => {
    e.preventDefault();
})

searchBoxInput.addEventListener('keyup', () => {
    let xml = new XMLHttpRequest();
    xml.open("POST", "../php/search.php");
    xml.addEventListener('load', () => {
        if(xml.readyState === XMLHttpRequest.DONE) {
            if(xml.status === 200) {
                let data = xml.response;
                userBox.innerHTML = data;
            }
        }
    });

    let formData = new FormData(searchForm);
    xml.send(formData);
}); 


