const submitOrderButton = document.getElementById("submit-order");

submitOrderButton.addEventListener("click", () => {
  const productImage = document.querySelector('input[name="product-image"]:checked').value;
  const name = document.getElementById("name").value;
  const mlId = document.getElementById("ml-id").value;
  const serverId = document.getElementById("server-id").value;
  const quantity = document.getElementById("quantity").value;

  const message = `Order Details:
  Product Image: ${productImage}
  Name: ${name}
  Mobile Legends ID: ${mlId}
  Mobile Legends Server ID: ${serverId}
  Quantity: ${quantity}`;

  const phone = "+919378011408";
  const url = `https://api.whatsapp.com/send?phone=${phone}&text=${encodeURIComponent(message)}`;

  window.open(url, "_blank");
});
