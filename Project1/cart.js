document.addEventListener('DOMContentLoaded', function() {
    const cartList = document.getElementById('cart-list');

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function renderCart() {
        cartList.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const div = document.createElement('div');
            div.className = 'cart-item';
            div.innerHTML = `
                <img src="${item.image}" alt="${item.name}" style="width:100%; height:150px; object-fit:cover;">
                <h2>${item.name}</h2>
                <p>${item.price.toLocaleString()}₫</p>
            `;
            cartList.appendChild(div);
            total += item.price;
        });

        const totalDiv = document.createElement('div');
        totalDiv.style.marginTop = '20px';
        totalDiv.innerHTML = `<h2>Tổng tiền: ${total.toLocaleString()}₫</h2>`;
        cartList.appendChild(totalDiv);
    }

    renderCart();
});
