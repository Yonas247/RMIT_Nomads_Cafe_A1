simpleCart({
     cartStyle: "table", // Display cart contents as a table.
     currency: "AUD", // Use Australian dollars as the currency.
     shippingFlatRate: 5.95, // Set a flat shipping rate of $5.95.
     shippingQuantityRate: 1.00, // Set an additional shipping rate of $1.00 per product in cart
     taxRate: 0.1, // Set a tax rate to reflect the Australian GST rate of 10%.
     cartColumns: [
         // Add image to cart contents table
         {view: function(item, column){
         return "<img src='" + item.get('image') + "' class='product_image_thumbnail'>";
         },
         attr: "image", label: "Product Image"},
         { attr: "name", label: "Name"},
         { attr: "size", label: "Size"},
         { view: "currency", attr: "price", label: "Price"},
         { view: "decrement", label: false},
         { attr: "quantity", label: "Qty"},
         { view: "increment", label: false},
         { view: "currency", attr: "total", label: "SubTotal" },
         { view: "remove", text: "Remove", label: false}
         ],
         checkout: {
         type: "SendForm" ,
         method: "POST", // Set to "GET" or "POST". Default is "POST".
         url: "http://saturn.csit.rmit.edu.au/∼s3659939"
         },
         });
    