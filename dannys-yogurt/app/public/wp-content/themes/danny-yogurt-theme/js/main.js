let data = [
    {
        title:'Vanilla Yogurt',
        description:'Yogurt with vanilla and strawberries',
        image:"http://dannys-yogurt.local/wp-content/themes/danny-yogurt-theme/images/vanilla-yogurt2.png"
    },
    {
        title:'Chocolate Yogurt',
        description:'Yogurt with chocolate and strawberries',
        image:"http://dannys-yogurt.local/wp-content/themes/danny-yogurt-theme/images/chocolate-yogurt.png"
    },
    {
        title:'Strawberry Yogurt',
        description:'Yogurt with strawberries and strawberries',
        image:"http://dannys-yogurt.local/wp-content/themes/danny-yogurt-theme/images/strawberry-yogurt.png"
    }
];

let heroText = document.getElementById("hero-text");
let heroImage = document.getElementById("hero-image");


function handleClick(evt){
    let{action, id} = evt.target.dataset;

    if(action){
        if(action == "circle"){
            if(id == 1){
                let result = changeSlider(data[0]);
                heroText.innerHTML = result.text;
                heroImage.setAttribute("src",result.image);
            }
            else if(id == 2){
                let result = changeSlider(data[1]);
                heroText.innerHTML = result.text;
                heroImage.setAttribute("src",result.image);
            }
            else{
                let result = changeSlider(data[2]);
                heroText.innerHTML = result.text;
                heroImage.setAttribute("src",result.image);
            }
        }
    }
}

function changeSlider(data)
{
    let heroText = `<h2>${data.title}</h1>
    <p>${data.description}</p>`;

    let heroImage = data.image;

    return {text:heroText, image:heroImage};
}

document.addEventListener("click", handleClick);