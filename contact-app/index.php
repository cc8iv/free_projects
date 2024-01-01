<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact App</title>

    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- 
        - insert contact
        - retrieve contact
        - delete contact
        - All contact 
     -->
     <div class="main-container">
         <div class="contact-form">
            <div class="header">
                <h2>
                    Contact App
                </h2>

                <span>
                    search contacts with either names or numbers
                </span>
            </div>
            <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
                <div class="contact-search">
                    <input type="search" name="search" id="search" placeholder="Search Contact">
                    <button>Search Contact</button>
                </div>

                <input type="text" name="contact-name" id="name" placeholder="Contact name">
                <input type="number" name="contact-number" id="phone" placeholder="Contact number">
                <div class="btn-grp">
                    <button>Add Contact</button>
                    <button>Remove Contact</button>
                </div>
            </form>
         </div>

         <div class="contact-list">
            <form action="index.php" method="post">
                <button>See All Contacts</button>
            </form>

            <div class="contact-list-table">
                <?php 
                    //model importation
                ?>
            </div>
         </div>
     </div>

    <script src="main.js"></script>
</body>
</html>