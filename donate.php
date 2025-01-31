<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@300;700&family=Poppins:wght@400;500;700&display=swap');

        /* General styles to avoid class name overlap */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            transition: .3s ease;
            color: #333;
        }

        html {
            scroll-behavior: smooth;
        }

        :root {
            --primary-color: #784cfb;
        }

        body {
            background: #efefef;
            font-family: 'Poppins', sans-serif;
        }

        /* Styles for the donation wrapper */
        .donation-wrapper {
            width: 500px;
            height: 540px;
            border-radius: 10px;
            background: #fff;
            padding: 50px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* Donation heading styles */
        .donation-subhead {
            font-size: 2.5rem;
            font-weight: 700;
            color: #111;
            position: relative;
            margin-bottom: 30px;
        }
input.donation-phone.donation-input {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}
input.donation-amount.donation-input {
    width: 100%;
    padding: 15px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 1rem;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
}
        .donation-subhead::before {
            content: attr(data-item);
            font-size: .9rem;
            color: var(--primary-color);
            letter-spacing: 2px;
            text-transform: uppercase;
            top: -10px;
            position: absolute;
            font-weight: 500;
            transform: translate(-50%, -50%);
            left: 50%;
        }

        .donation-subhead::after {
            content: "";
            background: var(--primary-color);
            letter-spacing: 2px;
            height: 5px;
            width: 100px;
            border-radius: 3px;
            text-transform: uppercase;
            bottom: -2px;
            position: absolute;
            font-weight: 500;
            transform: translate(-50%, -50%);
            left: 50%;
        }

        /* Input field styles */
        .donation-input {
            padding: 1rem 2rem;
            margin: 1rem 0;
            border: 1px solid #ccc;
            width: 100%;
            outline: none;
            background: #f9f9f9;
            border-radius: 2rem;
            font-weight: 500;
            font-size: 1rem;
            transition: 0.3s ease;
        }

        .donation-input:focus {
            border: 1px solid var(--primary-color);
            background: #fff;
        }

        /* Button styles */
        .donation-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background-color: var(--primary-color);
            color: #fff;
            font-size: 1rem;
            border-radius: 2rem;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            outline: none;
            font-weight: 500;
            transition: 0.3s;
            margin-top: 30px;
            width: 100%;
        }

        .donation-btn:hover {
            background-color: #333;
            color: #fff!important;
        }

        /* Responsive Design */
        @media screen and (max-width: 600px) {
            .donation-wrapper {
                width: 90%;
                padding: 30px;
            }

            .donation-subhead {
                font-size: 2rem;
            }

            .donation-input {
                font-size: 0.9rem;
                padding: 1rem 1.5rem;
            }

            .donation-btn {
                font-size: 1rem;
                padding: 0.8rem 2rem;
            }
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".donation-btn").click(function() {
                var name = $(".donation-name").val();
                var phone = $(".donation-phone").val();
                var email = $(".donation-email").val();
                var amount = $(".donation-amount").val();

                // Ensure all fields are filled
                if (name != "" && phone != "" && email != "" && amount != "") {
                    // Simulating a successful Razorpay payment response
                    var mockResponse = {
                        razorpay_payment_id: "mock_payment_123456789",
                        razorpay_order_id: "mock_order_123456789",
                        razorpay_signature: "mock_signature_123456789"
                    };

                    // Simulating the payment success
                    alert("Payment Successful! Payment ID: " + mockResponse.razorpay_payment_id);

                    // Redirect to home page after alert is closed
                    window.location.href = "index.php"; // Change "index.php" to the correct homepage URL
                } else {
                    alert("Please fill in all the fields correctly.");
                }
            });
        });
    </script>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="donation-wrapper">
        <h2 class="donation-subhead" data-item="Help Us">Donate Us</h2>
        <br>
        <input type="text" placeholder="Name*" class="donation-name donation-input"><br>
        <input type="number" placeholder="Phone Number*" class="donation-phone donation-input"><br>
        <input type="email" placeholder="Email*" required class="donation-email donation-input"><br>
        <input type="number" placeholder="Amount*" required class="donation-amount donation-input"><br>
        <button class="donation-btn">Pay Now</button>
    </div>
</body>
</html>
