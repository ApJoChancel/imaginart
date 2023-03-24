//Calcul du prix de vente
const price = document.getElementById('price');
const sprice = document.getElementById('sprice');

if(price){
    price.addEventListener('blur', () => {
        sprice.value = parseInt(price.value) * 1.2;
    });
}

//Gestion du panier
const btnAddToCart = document.querySelector('.addToCart')
const carts = document.querySelectorAll('.cart')

if(btnAddToCart){
    btnAddToCart.addEventListener('click', (e) => {
        e.preventDefault()
        const itemId = btnAddToCart.getAttribute('item-id')
        // console.log(itemId)
        axios.post('/api/artworks', {itemId: itemId})
            .then((res) => {return res})
            .then((response) => {
                const data = response.data
                carts.forEach(cart => cart.innerText = data.count)
            })
            .catch(err => console.log(err))
        window.location.href = '/shop'
    })
}


//Gestion de la commande
const btndelete = document.querySelectorAll('.btndelete')

for (let i = 0; i < btndelete.length; i++){
    const btn = btndelete[i]
    const section = document.querySelectorAll('.section')[i]

    btn.addEventListener('click', () => {
        const id = btn.getAttribute('item-id')
        axios.get('/api/artworks/' + id)
            .then((res) => {
                return res
            })
            .then((res) => {
                const data = res.data.item
                //On actualise l'affichage
                section.remove()
                //On actualise le panier
                axios.delete('/api/artworks/' + id)
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

//Gestoin des styles, techniques et thèmes des oeuvres
const selectElement = document.querySelector('.select')

if(selectElement){
    selectElement.addEventListener('change', (e) => {
        axios.get('/sanctum/csrf-cookie')
        axios.get('/api/user')
            .then(() => {
                return axios.get('/api/categories/' + e.target.value)
            })
            .then((data) => {
                const styles = data.data.styles
                const technics = data.data.technics
                const themes = data.data.themes
                
                const styleElement = document.getElementById('style')
                const technicElement = document.getElementById('technic')
                const themeElement = document.getElementById('theme')
    
                while (styleElement.firstChild) {
                    styleElement.removeChild(styleElement.firstChild);
                }
                while (technicElement.firstChild) {
                    technicElement.removeChild(technicElement.firstChild);
                }
                while (themeElement.firstChild) {
                    themeElement.removeChild(themeElement.firstChild);
                }
    
                styles.forEach(style => {
                    const el = document.createElement('option')
                    el.value = style.id
                    el.innerText = style.name
                    styleElement.appendChild(el)
                })
    
                technics.forEach(technic => {
                    const el = document.createElement('option')
                    el.value = technic.id
                    el.innerText = technic.name
                    technicElement.appendChild(el)
                })
    
                themes.forEach(theme => {
                    const el = document.createElement('option')
                    el.value = theme.id
                    el.innerText = theme.name
                    themeElement.appendChild(el)
                })
            })
            .catch(err => console.log(err))
    })
}
