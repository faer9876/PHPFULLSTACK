// https://picsum.photos/

const ck = document.querySelector('#url');
let input = document.querySelector('#input');
let result = document.querySelector('#result');

ck.addEventListener('mousedown', () => {
    let url = input.value;
    fetch(url)
    .then((res) => {return res.json();})
    .then((data) => makeList(data))
    .catch(alert("!!!"));
    ck.removeEventListener('mousedown',makeList);
});




function makeList(data) {
    result.replaceChildren('');
    data.forEach((item) => {
        const tagImg = document.createElement("img");
        tagImg.setAttribute("src", item.download_url);
        result.appendChild(tagImg);
    });
}
