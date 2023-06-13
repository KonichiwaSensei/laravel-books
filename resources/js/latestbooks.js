const url = '/api/books/latest'

const loadData = async () => {
    const response = await fetch(url);
    const parsedData = await response.json();

    

    parsedData.forEach(data => {

        console.log(data);

        const listElement = document.getElementById('latest-books');

        let newList = document.createElement("li");
        let newImg = document.createElement("img");
        let newBr = document.createElement("br");

        newImg.src = data.image;


        newList.innerText = data.title + " | Price: " + data.price;


        newList.appendChild(newBr);
        newList.appendChild(newImg);
        listElement.appendChild(newList);




    });
}


document.addEventListener('DOMContentLoaded', () => {
    
    const button = document.getElementById('load-books');

    button.addEventListener('click', loadData);
})