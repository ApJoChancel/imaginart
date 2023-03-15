// const { default: axios } = require("axios");

//Calcul du prix de vente
const price = document.getElementById('price');
const sprice = document.getElementById('sprice');

if(price){
    price.addEventListener('blur', () => {
        sprice.value = parseInt(price.value) * 1.2;
    });
}

//Gestion du panier
const btnsAddToCart = document.querySelectorAll('.addToCart')
const carts = document.querySelectorAll('.cart')

btnsAddToCart.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault()
        const itemId = item.getAttribute('item-id')
        // console.log(itemId)
        axios.get('/sanctum/csrf-cookie')
        axios.get('/api/user')
            .then(() => {
                let response = axios.post('/api/products', {
                    itemId: itemId
                })
                return response
            })
            .then((data) => {
                carts.forEach(cart => cart.innerText = data.data.count)
            })
            .catch(err => console.log(err))
    })
})

//Gestion de la commande
const quantities = document.querySelectorAll('.qty')
const amounts = document.querySelectorAll('.amount')
const prices = document.querySelectorAll('.price')
const btnless = document.querySelectorAll('.btnless')
const btnmore = document.querySelectorAll('.btnmore')
const btndelete = document.querySelectorAll('.btndelete')

for (let i = 0; i < btnless.length; i++){
    const btn = btnless[i]
    const txtQuantity = quantities[i]
    const txtAmount = amounts[i]

   if(Number(txtQuantity.innerText) === 1)
        btn.setAttribute('disabled', 'disabled')
    btn.addEventListener('click', () => {
        if(Number(txtQuantity.innerText) === 1)
            btn.setAttribute('disabled', 'disabled')
        else{
            const id = btn.getAttribute('item-id')
            axios.get('/api/products/' + id)
                .then((res) => {
                    return res
                })
                .then((res) => {
                    const data = res.data.item
                    if(data.quantity > 1){
                        //On actualise l'affichage
                        quantities[i].innerText = data.quantity - 1
                        txtAmount.innerText = (data.quantity - 1) * data.price
                        //On actualise le panier
                        axios.get('/api/products/decrease/' + id)
                            .then((res) => {
                                return res
                            })
                            .then((data) => {
                                carts.forEach(cart => cart.innerText = data.data.count)
                                document.getElementById('amount').innerText = data.data.amount
                            })
                            .catch(err => console.log(err))
                    }
                    //console.log(data)
                })
                .catch(err => console.log(err))

        }
    })
}

for (let i = 0; i < btnmore.length; i++){
    const btn = btnmore[i]
    const txtAmount = amounts[i]

    btn.addEventListener('click', () => {
        const id = btn.getAttribute('item-id')
        axios.get('/api/products/' + id)
            .then((res) => {
                return res
            })
            .then((res) => {
                const data = res.data.item
                //On actualise l'affichage
                quantities[i].innerText = data.quantity + 1
                txtAmount.innerText = (data.quantity + 1) * data.price
                //On actualise le panier
                axios.get('/api/products/increase/' + id)
                    .then((res) => {
                        return res
                    })
                    .then((data) => {
                        carts.forEach(cart => cart.innerText = data.data.count)
                        document.getElementById('amount').innerText = data.data.amount
                    })
                    .catch(err => console.log(err))
                //console.log(data)
            })
            .catch(err => console.log(err))
    })
}

for (let i = 0; i < btndelete.length; i++){
    const btn = btndelete[i]
    const txtAmount = amounts[i]

    btn.addEventListener('click', () => {
        const id = btn.getAttribute('item-id')
        axios.get('/api/products/' + id)
            .then((res) => {
                return res
            })
            .then((res) => {
                const data = res.data.item
                //On actualise l'affichage
                document.querySelectorAll('.section')[i].remove()
                //On actualise le panier
                axios.get('/sanctum/csrf-cookie')
                axios.delete('/api/products/' + id)
                    .then((res) => {
                        return res
                    })
                    .then((data) => {
                        carts.forEach(cart => cart.innerText = data.data.count)
                        document.getElementById('amount').innerText = data.data.amount
                    })
                    .catch(err => console.log(err))
                //console.log(data)
            })
            .catch(err => console.log(err))
    })
}

