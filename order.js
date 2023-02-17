const submitOrderButton = document.getElementById("submit-order");

submitOrderButton.addEventListener("click", () => {
  const productImage = document.querySelector('input[name="product-image"]:checked').value;
  const name = document.getElementById("name").value;
  const mlId = document.getElementById("ml-id").value;
  const serverId = document.getElementById("server-id").value;
  const quantity = document.getElementById("quantity").value;

  const xhr = new XMLHttpRequest();

  xhr.open("POST", "submit_order.php");
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onload = () => {
    if (xhr.status === 200 && xhr.responseText === "success") {
      window.location.href = "success.html";
    } else {
      window.location.href = "error.html";
    }
  };

  const params = `product-image=${productImage}&name=${name}&ml_id=${mlId}&server_id=${serverId}&quantity=${quantity}`;

  xhr.send(params);
});
