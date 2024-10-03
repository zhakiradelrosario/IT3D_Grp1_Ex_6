<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <title> Exercise 6</title>
        
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arsenal&family=Play&family=Rajdhani:wght@400;500&family=Varela+Round&display=swap" rel="stylesheet">
        <style>
            /* CSS for header */
            header {
                background-color: blue;
                color: white;
                font-family: roboto;
                text-align: center;
                padding: 3px;
            }

            /* CSS for main content */
            main {
                background-color: #f9f9f9;
                color: #333;
                padding: 100px;
                text-align: center;
            }

            /* CSS for footer */
            footer {
                background-color: red;
                color: white;
                text-align: center;
                padding: 3px;
            }

            h1, h2 {
                font-family: Arial, sans-serif;
            }
        </style>
   </head>

  <body>
     

        <?php 
        include('./header.php'); 
        ?>
        <header>
            <h1>header</h1>
        </header>
        
        <?php 
        include('./main.php'); 
        ?>
        <main>
            <h1>Main</h1>
        </main>

        <?php 
        include('./footer.php'); 
        ?>
        <footer>
            <h1>Footer</h1>
        </footer>
    </body>
</html>