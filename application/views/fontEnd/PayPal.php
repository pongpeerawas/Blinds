<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>

<body>
    <div id="paypal-button-container"></div>

    <script>
        paypal.Button.render({

            env: 'production', // sandbox | production

            // PayPal Client IDs - replace with your own
            // Create a PayPal app: https://developer.paypal.com/developer/applications/create
            client: {
                // sandbox:    'AU0MBAjVUc5YfobHITWGHsbs92bRU1Y1HBv0Ga4Zfjj5AhPGsj4SZp3CgRYUFq8RW7WdUUOmaB9hCLMR',
                production: 'AWAtcIvh6BNhhtqVB5416q2Bh1Y8IYVP70oEm84tUUWMh9nxBuF6K2UjMxhULnwuFz2z2et4obQzmHOQ'
            },

            // Show the buyer a 'Pay Now' button in the checkout flow
            commit: true,

            // payment() is called when the button is clicked
            payment: function(data, actions) {

                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '1', currency: 'THB' }
                            }
                        ]
                    }
                });
            },

            // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {

                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
                    // window.alert('Payment Complete!');
                    // redirect('fontEnd/PaymentOnline/SavePay');
                    redirect('fontEnd/Home');

                });
            }

        }, '#paypal-button-container');

    </script>
</body>
