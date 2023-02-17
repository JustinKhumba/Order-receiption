 // Replace with your own WhatsApp number and message
const whatsappNumber = 'whatsapp:+919378011408';
const whatsappMessage = 'New order received:\n';

// Get the form data and format the message
const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
	event.preventDefault();
	const formData = new FormData(event.target);
	const selectedProduct = formData.get('product');
	const message = whatsappMessage + 'Name: ' + formData.get('name') + '\nEmail: ' + formData.get('email') + '\nAddress: ' + formData.get('address') + '\nProduct: ' + selectedProduct + '\nOrder: ' + formData.get('order');
	const encodedMessage = encodeURIComponent(message);
	const url = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`;
	window.open(url);
});
