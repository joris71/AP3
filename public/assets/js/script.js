const products = [
    { id: 1, name: "Maillots", price: 30, img: "assets/images/Maillots.png" },
    { id: 2, name: "Varsity", price: 50, img: "assets/images/Varsity.png" },
    { id: 3, name: "Sac", price: 40, img: "assets/images/sac.png" },
    {id : 4, name: "Survêtement", price : 60, img :"assets/images/survéte.png"}
  ];
  
  const productList = document.getElementById("product-list");
  const cart = [];
  const cartCount = document.getElementById("cart-count");
  const cartItems = document.getElementById("cart-items");
  const total = document.getElementById("total");
  
  function updateCartDisplay() {
    cartItems.innerHTML = "";
    let totalPrice = 0;
  
    cart.forEach((item, index) => {
      const li = document.createElement("li");
      li.className = "d-flex justify-content-between align-items-center mb-2";
      li.innerHTML = `
        ${item.name} - ${item.price}€
        <button class="boutique-remove" onclick="removeFromCart(${index})">❌</button>
      `;
      cartItems.appendChild(li);
      totalPrice += item.price;
    });
  
    total.textContent = `Total: ${totalPrice}€`;
    cartCount.textContent = cart.length;
  }
  function addToCart(product) {
    cart.push(product);
    updateCartDisplay();
  }
  
  products.forEach((product) => {
    const div = document.createElement("div");
    div.className = "product";
    div.innerHTML = `
      <img src="${product.img}" alt="${product.name}">
      <h3>${product.name}</h3>
      <p>${product.price}€</p>
      <button>Ajouter au panier</button>
    `;
  
    div.querySelector("button").addEventListener("click", () => {
      addToCart(product);
    });
  
    productList.appendChild(div);
  });
  
  document.getElementById("toggle-cart").addEventListener("click", () => {
    const cartBox = document.getElementById("cart");
    cartBox.style.display = cartBox.style.display === "block" ? "none" : "block";
  });
  function removeFromCart(index) {
    cart.splice(index, 1); // supprime l’élément du panier
    updateCartDisplay();
  }