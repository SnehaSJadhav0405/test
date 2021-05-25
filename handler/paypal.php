
    

    

    
    <!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>
<!--<script src="https://www.paypal.com/sdk/js?client-id=test"></script>
<script>paypal.Buttons().render('body');</script>-->
<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AWd06qjtfBPuTjQ1ReFFOl7nQmRmVKFX0MbcRpJ5R6i4rvjsfMSD-ETXs5nIGKoltddxYmjGjhLyVdeO&currency=USD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
</body>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AWd06qjtfBPuTjQ1ReFFOl7nQmRmVKFX0MbcRpJ5R6i4rvjsfMSD-ETXs5nIGKoltddxYmjGjhLyVdeO&currency=USD"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>
<!--
  <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script>
-->
</body>

<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script>

