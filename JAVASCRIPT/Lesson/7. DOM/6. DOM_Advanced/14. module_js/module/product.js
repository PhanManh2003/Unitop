const a = 15;

let products = [
    {
        id: 1,
        url: '#',
        product_name: 'Iphone 13 Pro Max',
        ram: '6GB',
        price: '27.790.000đ',
        product_thumb: 'https://cdn.tgdd.vn/Products/Images/42/223602/iphone-13-xanh-la-thumb-new-600x600.jpg'
    },
    {
        id: 2,
        url: '#',
        product_name: 'Iphone 14 Pro Max',
        ram: '6GB',
        price: '33.990.000đ',
        product_thumb: 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-600x600.jpg'
    }
];

function show(){
    console.log('function show');
}

class Product{
    constructor(){

    }
    render(){
        console.log('class Product');
    }
}
export  {a,products,show, Product} ;
