<script>
    // Function to update the price based on the selected size
    function updatePriceBySize(size) {
        // Example: You can define a mapping of size to price
        const priceMapping = {
            xs: 49.99,
            sm: 54.99,
            md: 59.99,
            xl: 64.99,
            '2xl': 69.99,
            'xxl': 74.99,
            '3xl': 79.99,
            '4xl': 84.99,
        };

        // Get the selected size and product ID (if applicable)
        const selectedSize = size;
        // You can determine the product ID based on your structure

        // Update the price based on the selected size and product ID
        const newPrice = priceMapping[selectedSize] || 0;

        // Assuming you have a product element for which you want to update the price
        // Replace 'product-1' with the actual product element's ID or class
        const productElement = document.getElementById('product-1'); // Update with your product ID

        if (productElement) {
            // Update the price within the product element
            productElement.querySelector('#price').textContent = '$' + newPrice.toFixed(2);
        }
    }

    // Attach event listeners to the size selection radio buttons
    const sizeRadios = document.querySelectorAll('input[name="radioGroup"]');
    sizeRadios.forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (radio.checked) {
                updatePriceBySize(radio.id);
            }
        });
    });

    // Initial update based on the default selected size (if any)
    const selectedSizeRadio = document.querySelector('input[name="radioGroup"]:checked');
    if (selectedSizeRadio) {
        updatePriceBySize(selectedSizeRadio.id);
    }
</script>



if(radioId== 'xs'){
                let newprice=P_Price + 10;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== 'sm'){
                let newprice=P_Price + 15;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== 'md'){
                let newprice=P_Price + 22;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== 'xl'){
                let newprice=P_Price + 28;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== '2xl'){
                let newprice=P_Price + 35;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== 'xxl'){
                let newprice=P_Price + 45;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== '3xl'){
                let newprice=P_Price + 54;
                $('#pprice').replaceWith(newprice);
            }elseif(radioId== '4xl'){
                let newprice=P_Price + 64;
                $('#pprice').replaceWith(newprice);
            }
\



<!--  <script>
        $(document).ready(function(){
            var radioButtons = document.querySelectorAll('input[type="radio"]');
            radioButtons.forEach(function(radioButton) {
                radioButton.addEventListener('click', getRadioId);
            });
            function getRadioId(event) {
                var clickedRadioButton = event.target;
                var productPrice;
                if (clickedRadioButton.type === "radio") {
                    var radioId = clickedRadioButton.id;
                    var product_Price =document.getElementsByClassName("pprice");
                    for (var i = 0; i < product_Price.length; i++) {
                        var productPrice= product_Price[i].innerHTML;
                        var P_Price  = Number(productPrice);
                        switch (radioId) {
                            case 'xs':
                                console.log(sm_size);
                                var newprice = P_Price + 10;
                                var p_Price =document.getElementsByClassName("pprice"); 
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var xs_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                break;
                            case 'sm':
                                newprice = P_Price + 15;
                                console.log(sm_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var sm_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(sm_size);
                                break;
                            case 'md':
                                newprice = P_Price + 22;
                                console.log(md_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var md_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(md_size);
                                break;
                            case 'xl':
                                newprice = P_Price + 28;
                                console.log(xl_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var xl_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(xl_size);
                                break;
                            case '2xl':
                                newprice = P_Price + 35;
                                console.log(xl2_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var xl2_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(xl2_size);
                                break;
                            case 'xxl':
                                newprice = P_Price + 45;
                                console.log(xxl_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // $('#pprice').replaceWith(xxl_size);
                                // var xxl_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                break;
                            case '3xl':
                                newprice = P_Price + 54;
                                console.log(xl3_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var xl3_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(xl3_size);
                                break;
                            case '4xl':
                                newprice = P_Price + 64;
                                console.log(xl4_size);
                                var p_Price =document.getElementsByClassName("pprice");
                                for (var i = 0; i < p_Price.length; i++) {
                                    p_Price[i].innerText =newprice ;
                                    }
                                // var xl4_size='<span class="pprice" id="pprice" style="font-size: larger; color: #0d0d0d;font-weight: 700;">'+ newprice +'</span>';
                                // $('#pprice').replaceWith(xl4_size);
                                break;
                            default:
                        }
                    }
                }
            }
        });
</script> -->
