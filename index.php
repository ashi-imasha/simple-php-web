<?php
// Your variables with emojis!
 $title = "I Change My Web Page";
 $message = "Created␣by␣Ashini␣";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width,␣
 initial-scale=1.0">
 <title><?php echo $title; ?></title>
 <link rel="preconnect" href="https://fonts.googleapis.com
 ">
 <link rel="preconnect" href="https://fonts.gstatic.com"
 crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=
 Poppins:wght@300;400;600&display=swap" rel="stylesheet
 ">
 <style>
 /* Define CSS animations (Keyframes) */
 @keyframes gradientBG {
 0% { background-position: 0% 50%; }
 50% { background-position: 100% 50%; }
 100% { background-position: 0% 50%; }
 }
 @keyframes fadeInDown {
 from {
 opacity: 0;
 transform: translateY(-20px);
 }
 to {
 }
 }
 opacity: 1;
 transform: translateY(0);
 @keyframes fadeInUp {
 from {
 opacity: 0;
 transform: translateY(20px);
 }
 to {
 }
 }
 opacity: 1;
 transform: translateY(0);
 /*--- Body & General Styling--- */
 
body {
 font-family: ’Poppins’, Arial, sans-serif; /* Use
 the new font */
 margin: 0;
 padding: 20px;
 /* Animated Gradient Background */
 background: linear-gradient(-45deg, #ee7752, #
 e73c7e, #23a6d5, #23d5ab);
 background-size: 400% 400%;
 animation: gradientBG 15s ease infinite;
 /* Use Flexbox to center content */
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 min-height: 100vh; /* Full viewport height */
 text-align: center;
 overflow: hidden; /* Hide scrollbars from
 animations */
 }
 /*--- UI Elements--- */
 h1 {
 color: #ffffff;
 font-size: 2.5em; /* Larger title */
 font-weight: 600;
 text-shadow: 0 2px 4px rgba(0,0,0,0.2);
 /* On-load animation */
 animation: fadeInDown 0.8s ease-out;
 }
 .card {
 background-color: white;
 padding: 25px 40px;
 border-radius: 12px; /* Softer corners */
 box-shadow: 0 10px 30px rgba(0,0,0,0.15);
 /* On-load animation (with a slight delay) */
 animation: fadeInUp 0.8s ease-out 0.2s;
 animation-fill-mode: backwards; /* Ensures it
 starts invisible */
 /* UX: Transition for hover effect */
 transition: transform 0.3s ease, box-shadow 0.3s
 ease;
 }
 /* UX: Hover animation */
 
.card:hover {
 transform: translateY(-8px); /* "Lift" the card
 */
 box-shadow: 0 15px 35px rgba(0,0,0,0.2);
 }
 .card p {
 color: #444;
 font-size: 1.3em;
 font-weight: 300;
 margin: 0; /* Remove default p margin */
 }
 </style>
 </head>
 <body>
 <h1><?php echo $title; ?></h1>
 <div class="card">
 <p><?php echo $message; ?></p>
 </div>
 </body>
 </html>