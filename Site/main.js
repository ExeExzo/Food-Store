const firebaseConfig = {
    apiKey: "AIzaSyBIkV4sHBmffhWSoXqbOOq1k3wgERdsK0c",
    authDomain: "food-store-346317.firebaseapp.com",
    databaseURL: "https://food-store-346317-default-rtdb.firebaseio.com",
    projectId: "food-store-346317",
    storageBucket: "food-store-346317.appspot.com",
    messagingSenderId: "689210541645",
    appId: "1:689210541645:web:1dbe2681bd72ce5d34fe04",
    measurementId: "G-8B0BP50D8S"
  };
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app); 



  //global
var products=[];
var cartItems=[];
var cart_n = document.getElementById('cart_n');
//divs
var breakfastDIV = document.getElementById('breakfastDIV');
var saladDIV = document.getElementById('saladDIV');
var firstcourseDIV = document.getElementById('firstcourseDIV');
var secondcourseDIV = document.getElementById('secondcourseDIV');
var pizzaDIV = document.getElementById('pizzaDIV');
var barbecueDIV = document.getElementById('barbecueDIV');
var drinkDIV = document.getElementById('drinkDIV');
//information
var BREAKFAST=[
    {name:'Pancakes' , price:400 },
    {name:'Pancakes with chicken' , price:1800 },
    {name:'Pancakes with beef' , price:2500}
];
var SALAD=[
    {name:'"Salad Hunter"', price:3300 },
    {name:'"Salad Royal reef"', price:3400 },
    {name:'"Chicken cesar"', price:2800},
    {name:'"Salad Beijing"', price:3500  },
    {name:'"Salad Imperial"', price:3400 },
    {name:'"Salad Palini"', price:3100 },
];
var FIRSTCOURSE=[
    {name:'"Pumpkin cream soup"', price:1800 },
    {name:'"Naryn"', price:3200 },
    {name:'"Saltwort with meat"', price:2800 },
    {name:'"Okroshka with meat"', price:1800 },
    {name:'"Beef soup"' , price:1400 },
    {name:'"Royal fish soup"' , price:2400 },
    {name:'Royal trout' , price:6000 },
    {name:'Lamb stew' , price:4200 },
    {name:'Chicken in georgian' , price:3200}
];
var SECONDCOURSE=[
    {name:'breakfast1' , price:1}

];
var PIZZA=[
    {name:'breakfast1' , price:1}

];
var BARBECUE=[
    {name:'breakfast1' , price:1}

];
var DRINK=[
    {name:'breakfast1' , price:1}

];
//HTML
function HTMLbreakfastProduct(con){
    let URL = `images/breakfast/${con}.jpg`;
    let btn = `btnBreakfast${con}`;

    return `
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" style="height:16rem;" src="${URL}"
                alt="Card image cap">
                <div class="card-body">
                    <i style="color:orange;" class="fa fa-star" ></i>
                    <i style="color:orange;" class="fa fa-star" ></i>
                    <i style="color:orange;" class="fa fa-star" ></i>
                    <i style="color:orange;" class="fa fa-star" ></i>
                    <i style="color:orange;" class="fa fa-star" ></i>
                    <p class="card-text">${FRUIT[con-1].name}</p>
                    <p class="card-text">Price: ${FRUIT[con-1].price}.00</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" onclick="cart2('${FRUIT[con-1].name}','${FRUIT[con-1].price}','${URL}','${con}',
                            ${btn}')" class="btn btn-sm btn-outline-secondary"
                            >Buy</button>
                            <button id="${btn}" type="button" onclick="cart('${FRUIT[can-1].name}','${FRUIT[con-1].price}', ${URL},'${con}',
                            '${btn}')" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `
    
    /*return `
        <div class="catalog_item" id="blin">x
        <div class="product">
            <img src="${URL}" alt="" class="product_img" style="height:400px;">
            <div class="product_content">
                <h3 class="product_title">${BREAKFAST[con-1].name}</h3>
            </div>
            <footer class="product_footer">
                <div class="product_buttom">
                <div class="product_price">
                    <span class="product_price-value">${BREAKFAST[con-1].price}</span>
                    <span class="product_currency">&#8376;</span>
                </div>
                <button class="btn btn-sm btn-outline-secondary product_btn" type="button" onclick="cart2('${BREAKFAST[con-1].name}',
                 '${BREAKFAST[con-1].price}', '${URL}', '${con}', '${btn}')">Buy</button>
                </div>
                <button id="${btn}" class="btn btn-sm btn-outline-secondary product_btn" type="button" onclick="cart2('${BREAKFAST[con-1].name}',
                 '${BREAKFAST[con-1].price}', '${URL}', '${con}', '${btn}')">Add to cart</button>
                </div>
            </footer>
            </div>
        </div>
    `>*/
}

//render
function render(){
    for (let index = 1; index <= 3; index++){
        breakfastDIV.innerHTML+=`${HTMLbreakfastProduct(index)}`;
    }

}