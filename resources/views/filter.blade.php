<!-- <!DOCTYPE html>
<html>
<head>
    <title>Product Price Update</title>
</head>
<body>
    <h1>Product Selection</h1>
    <p>Choose a size:</p>
    <select id="sizeSelector">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>

    <h2>Products:</h2>

    <div class="product">
        <h3>Product 1</h3>
        <p>Price: <span class="productPrice">$10.00</span></p>
    </div>

    <div class="product">
        <h3>Product 2</h3>
        <p>Price: <span class="productPrice">$12.00</span></p>
    </div>

    <div class="product">
        <h3>Product 3</h3>
        <p>Price: <span class="productPrice">$8.00</span></p>
    </div>

    <script>
        // Define price mapping for different sizes
        const priceMap = {
            small: 10.00,
            medium: 15.00,
            large: 20.00
        };

        // Get reference to the size selector and all product price elements
        const sizeSelector = document.getElementById("sizeSelector");
        const productPrices = document.querySelectorAll(".productPrice");

        // Add an event listener to the size selector
        sizeSelector.addEventListener("change", updatePrices);

        // Function to update all product prices based on the selected size
        function updatePrices() {
            const selectedSize = sizeSelector.value;
            const updatedPrice = priceMap[selectedSize].toFixed(2); // Format to 2 decimal places

            // Update prices for all products
            productPrices.forEach((priceElement) => {
                priceElement.textContent = "$" + updatedPrice;
            });
        }

        // Initial price update
        updatePrices();
    </script>
</body>
</html> -->



<!-- <!DOCTYPE html>
<html>
<head>
    <title>Product Price Update</title>
</head>
<body>
    <h1>Product Selection</h1>
    <p>Choose a size:</p>
    <select id="sizeSelector">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>

    <h2>Products:</h2>

    <div class="product">
        <h3>Product 1</h3>
        <p>Price: $<span class="productPrice">10.00</span></p>
    </div>

    <div class="product">
        <h3>Product 2</h3>
        <p>Price: $<span class="productPrice">12.00</span></p>
    </div>

    <div class="product">
        <h3>Product 3</h3>
        <p>Price: $<span class="productPrice">8.00</span></p>
    </div>

    <script>
        const sizeSelector = document.getElementById("sizeSelector");
        const productPrices = document.querySelectorAll(".productPrice");
        sizeSelector.addEventListener("change", updatePrices);
        function updatePrices() {
            const selectedSize = sizeSelector.value;
            let priceModifier = 0;
            if (selectedSize === "small") {
                priceModifier = 10.00;
            } else if (selectedSize === "medium") {
                priceModifier = 15.00;
            } else if (selectedSize === "large") {
                priceModifier = 20.00;
            }

            productPrices.forEach((priceElement) => {
                const existingPrice = parseFloat(priceElement.textContent);
                const updatedPrice = (existingPrice + priceModifier).toFixed(2); 
                priceElement.textContent = updatedPrice;
            });
        }

        // Initial price update
        updatePrices();
    </script>
</body>
</html> -->




<!DOCTYPE html>
<html>
<head>
    <title>Product Price Update</title>
</head>
<body>
    <h1>Product Selection</h1>
    <p>Choose a size:</p>
    <form id="sizeForm">
        <label>
            <input type="radio" name="size" value="small"> Small
        </label>
        <label>
            <input type="radio" name="size" value="medium"> Medium
        </label>
        <label>
            <input type="radio" name="size" value="large"> Large
        </label>
    </form>

    <h2>Products:</h2>

    <div class="product">
        <h3>Product 1</h3>
        <p>Price: $<span class="productPrice">10.00</span></p>
    </div>

    <div class="product">
        <h3>Product 2</h3>
        <p>Price: $<span class="productPrice">12.00</span></p>
    </div>

    <div class = "product">
        <h3>Product 3</h3>
        <p>Price: $<span class="productPrice">8.00</span></p>
    </div>

    <script>
        const sizeForm = document.getElementById("sizeForm");
        const productPrices = document.querySelectorAll(".productPrice");

        // Function to update all product prices based on the selected size
        function updatePrices() {
            const selectedSize = document.querySelector('input[name="size"]:checked').value;
            let priceModifier = 0;

            if (selectedSize === "small") {
                priceModifier = 10.00;
            } else if (selectedSize === "medium") {
                priceModifier = 15.00;
            } else if (selectedSize === "large") {
                priceModifier = 20.00;
            }

            productPrices.forEach((priceElement) => {
                const existingPrice = parseFloat(priceElement.textContent);
                const updatedPrice = (existingPrice + priceModifier).toFixed(2);
                priceElement.textContent = updatedPrice;
            });
        }

        // Add event listeners to radio buttons
        const radioButtons = document.querySelectorAll('input[name="size"]');
        radioButtons.forEach((radioButton) => {
            radioButton.addEventListener("change", updatePrices);
        });

        // Initial price update
        updatePrices();
    </script>
</body>
</html>

