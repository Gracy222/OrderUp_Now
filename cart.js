const product = [
    {
        id: 0,
        image: 'image/unsplash.webp',
        title: 'Jollof Rice',
        price: 107.62,
        restaurant_id:1,
    },
    {
        id: 1,
        image: 'image/Unsplash1 (1).webp',
        title: 'beef',
        price: 175.71,
        restaurant_id:1,
    },
    {
        id: 2,
        image: 'image/coffee and burger.webp',
        title: 'coffee',
        price: 155.71,
        restaurant_id:1,
    },
    {
        id: 3,
        image: 'image/fried rice - Copy.jpg',
        title: ' Rice ',
        price: 175.71 ,
        restaurant_id:1,
    },
    {
        id: 4,
        image: 'image/iyan and efo (1) - Copy.webp',
        title: 'iyan and efo',
        price: 259 ,
        restaurant_id:2,
    },
    {
        id: 5,
        image: 'image/logo.webp',
        title: 'drink',
        price: 209 ,
        restaurant_id:2,
    },
    {
        id: 6,
        image: 'image/meat (1) - Copy.webp7',
        title: 'meat',
        price: 199,
        restaurant_id:2,
    },
    {
        id: 7,
        image: 'image/ogbono - Copy.webp',
        title: 'Ogbono',
        price:279,
        restaurant_id:2,
    },
    {
        id: 8,
        image: 'image/rice (2) - Copy.webp',
        title: 'Rice',
        price: 249,
        restaurant_id:2,
    },
    {
        id: 9,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/zpmz8kmwbbfptd8ahya0',
        title: 'Tandoori Chicken Tikka Sandwich',
        price:  249,
        restaurant_id:2,
    },
    {
        id: 10,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/z0c4xpovma1qtmu4tlls',
        title: 'Chilli Paneer Sizzle',
        price: 179,
        restaurant_id:3,
    },
    {
        id: 11,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/b7d1f56df6414f8b6e49001af95e259a',
        title: 'Ultimate Tandoori Veggie',
        price: 379,
        restaurant_id:3,
    },
    {
        id: 12,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/s5ld93rsknx0fhj6xarn',
        title: 'Tandoori Paneer',
        price: 319,
        restaurant_id:3,
    },
    {
        id: 13,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/quxirmjttzksp7xlhysc',
        title: 'Triple Chicken Feast',
        price: 409,
        restaurant_id:3,
    },
    {
        id: 14,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/d9eddb1993da4e5dc65ef2ceaa8503f7',
        title: 'Dhabe Da Keema',
        price: 319,
        restaurant_id:3,
    },
    {
        id: 15,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/4061af0525c00c89f0d1edbe7216765c',
        title: 'Sizzling Schezwan Chicken',
        price: 319,
        restaurant_id:3,
    },
    {
        id: 16,
        image: 'https://m.economictimes.com/thumb/msid-99118050,width-1200,height-900,resizemode-4,imgsize-64776/idli_istock.jpg',
        title: 'Idly',
        price: 85,
        restaurant_id:4,
    },
    {
        id: 17,
        image: 'https://img77.uenicdn.com/image/upload/v1570257131/service_images/shutterstock_1008673420.jpg',
        title: 'Plain Dosa',
        price: 100,
        restaurant_id:4,
    },
    {
        id: 18,
        image: 'image/unsplash2.webp',
        title: 'Jollof',
        price: 120,
        restaurant_id:4,
    },
    {
        id: 19,
        image: 'image/WhatsApp Image 2024-09-02 at 18.01.40_66688bb3.jpg',
        title: 'Onion Dosa',
        price: 120,
        restaurant_id:4,
    },
    {
        id: 20,
        image: 'https://www.yummytummyaarthi.com/wp-content/uploads/2012/03/1-1.jpg',
        title: 'Onion Rava Dosa',
        price: 140,
        restaurant_id:4,
    },
    {
        id: 21,
        image: 'https://i.ytimg.com/vi/c0PQz7TF7RQ/maxresdefault.jpg',
        title: 'Pesarattu',
        price: 120,
        restaurant_id:4,
    },
    {
        id: 22,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/36901b422d759c19c2799c10eeb416c8',
        title: 'Zinger Pro Burger',
        price: 239.05,
        restaurant_id:5,
    },
    {
        id: 23,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/418e7dc325cf65d7c1d9faab2e646421',
        title: 'Chicken Zinger Burger - Classic with Cheese',
        price: 224.05,
        restaurant_id:5,
    },
    {
        id: 24,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/6d8c645fcd7d5368741ccc61933fafed',
        title: 'Veg Zinger Burger with Cheese',
        price: 213.57,
        restaurant_id:5,
    },
    {
        id: 25,
        image: 'https://lh3.googleusercontent.com/hGmIuGfxKanA6t3YL1fEE9duEUfGKbs0SgdOO2D_206jSW2bvJohNmSbPq9KZuOLzS9jry0UXEEtJIAFeSR1F2huRqZ1T6ntaQxDEJRd=w512-rw',
        title: 'Chicken Bucket for Two',
        price:599.05,
        restaurant_id:5,
    },
    {
        id: 26,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/kt0vzw4bzztarxnl0wcl',
        title: 'Chicken Mingles Bucket Meal',
        price: 499.05,
        restaurant_id:5,
    },
    {
        id: 27,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_208,h_208,c_fit/31f899d11feb6a4bc6b3af7815e0f06f',
        title: 'll in One Chicken Bucket',
        price: 548.57,
        restaurant_id:5,
    },
    {
        id: 28,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/ad20daa26b978ebff5d08572cb6cca7f',
        title: 'McSpicy Paneer Burger',
        price: 214.71,
        restaurant_id:6,
    },
    {
        id: 29,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/51352086abd3efaaef530188aec16631',
        title: 'McChicken Burger',
        price: 141.65,
        restaurant_id:6,
    }   , 
    {
        id: 30,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/FOOD_CATALOG/IMAGES/CMS/2024/3/14/d064fb5e-fb2e-4e1d-9515-18f26489f5b1_f6f49dba-2ae7-4ebf-8777-548c5ad4d799.png',
        title: 'Veg Maharaja Mac Burger Combo',
        price: 384.76,
        restaurant_id:6,
    }    ,
    {
        id: 31,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/FOOD_CATALOG/IMAGES/CMS/2024/3/14/ead090f2-5f80-4159-a335-d32658bcfc7c_8bcc5cd9-b22a-4f5d-8cde-0a2372c985c8.png',
        title: 'Chicken Maharaja Mac Burger Combo',
        price: 384.76,
        restaurant_id:6,
    },
    {
        id: 32,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/5a18fbbff67076c9a4457a6b220a55d9',
        title: 'Fries (Regular)',
        price: 85.71,
        restaurant_id:6,
    },
    {
        id: 33,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/8a61e7fd97c454ea14d0750859fcebb8',
        title: 'Fries (Medium)',
        price:  119.05 ,
        restaurant_id:6,
    },
    {
        id: 34,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/a4b3002d0ea35bde5e5983f40e4ebfb4',
        title: 'Fries (Large)',
        price: 139.05,
        restaurant_id:6,
    },
    {
        id: 35,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/b7517a8167332b92dd2a8e1f92a98708',
        title: 'Nutty Chocolate Milkshake',
        price: 279,
        restaurant_id:7,
    },
    {
        id: 36,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/1a8d68470ebc719b5a6b67389f721c51',
        title: 'Red Velvet Milkshake',
        price: 239,
        restaurant_id:7,
    },
    {
        id: 37,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/053457cb719c3a406d14289d50c2c25f',
        title: 'Ferroro Rocher Milkshake',
        price: 289,
        restaurant_id:7,
    },
    {
        id: 38,
        image: 'https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_300,h_300,c_fit/638b004e5994443040a04ba96194b78a',
        title: 'Nutty Chocolate Ice Cream Dessert Jar',
        price: 269,
        restaurant_id:7,
    },
    {
        id: 39,
        image: 'https://static.toiimg.com/thumb/54308405.cms?imgsize=510571&width=800&height=800',
        title: 'Hyderabadi Chicken Dum Biryani 2pcs',
        price: 349,
        restaurant_id:8,
    }   , 
    {
        id: 40,
        image: 'https://lh3.googleusercontent.com/dkhDijF2NVWEoIBIaaLUJo-hLRQ5XtViD6k0nR-YeE5pIKJzwayycuKaApUrbkE45-KVqk7MdeuMlh9zZmyqclt1ah-eCYzxPDAQGQSG=w512-rw',
        title: 'Special Chicken Biryani',
        price: 444,
        restaurant_id:8,
    }  ,
    {
        id: 41,
        image: 'https://lh5.googleusercontent.com/proxy/oROL3DFxKnE998ZWlIRxeWlj-tFZ7_Cizq43_yX9tIOeQkhalvPn2iXtYa91FJdEOg-uWkyiV8dq_8C557tN515kub6aqo0BDz7vgrGWDdVMws6loIaZhrLvoQzToQv8',
        title: 'Special Chicken Fry Piece Biryani 3pcs',
        price: 444,
        restaurant_id:8,
    }   
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>₹ ${price}</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}
function displaycart() {
    let total = 0;
    document.getElementById("count").innerHTML = cart.length;
    if (cart.length === 0) {
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "₹ " + total.toFixed(2);
    } else {
        // Filter out any empty or undefined values from the cart array
        const filteredCart = cart.filter(item => item !== undefined && Object.keys(item).length > 0);

        document.getElementById("cartItem").innerHTML = filteredCart.map((items, index) => {
            var { image, title, price } = items;
            total += price;
            return (
                `<div class='cart-item'>
                    <div class='row-img'>
                        <img class='rowimg' src=${image}>
                    </div>
                    <p style='font-size:12px;'>${title}</p>
                    <h2 style='font-size: 15px;'>₹ ${price.toFixed(2)}</h2> ` + "<i class='fa-solid fa-trash' onclick='delElement(" + index + ")'></i></div>"
            );
        }).join('');
        document.getElementById("total").innerHTML = "₹ " + total.toFixed(2); 
    }
}

function checkout() {
    // Get phone and address input values
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;

    // Validate phone and address
    if (!phone || !address) {
        alert("Please enter phone number and delivery address.");
        return;
    }

    // Create an array to store selected items
    var selectedItems = [];

    // Add phone and address to the selectedItems array
    selectedItems.push({
        phone: phone,
        address: address
    });

    // Loop through the cart items and add name and price to the selectedItems array
    cart.forEach(item => {
        selectedItems.push({
            title: item.title,
            price: item.price
        });
    });

    // Send the selectedItems array to a PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "store_billing.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
            window.location.href = "thankyou.php?phone=" + encodeURIComponent(phone);
        }
    };
    xhr.send(JSON.stringify(selectedItems));
}
