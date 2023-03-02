//Calcul du prix de vente
const price = document.getElementById('price');
const sprice = document.getElementById('sprice');

if(price){
    price.addEventListener('blur', () => {
        sprice.value = parseInt(price.value) * 1.2;
    });
}