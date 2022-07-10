 <!DOCTYPE HTML>
 <html>

 <head>
     <title>Lab1</title>
 </head>

 <body>
     <?php
        include 'conn.php';
        ?>
     <h2>Ладоня Виталий, КИУКИу-20-1, Лаба 1, Вар №5</h2>
     <p>Для товара задается название, фирма-производитель,
         категория товара (процессоры, материнские платы и т.д.),
         цена товара, количество единиц на складе.</p>
     <ul>
         <li>товары выбранного производителя;</li>
         <li>товары выбранной категории;</li>
         <li>товары в выбранном ценовом диапазоне.</li>
     </ul>

     <form method="GET" action="1_1.php">
         <p>Товары производителя: <select name="vendor" id="vendor">
                 <?php
                    $sqlSelect = "SELECT DISTINCT name FROM $db.vendors";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             <button> Получить </button>
         </p>
     </form>


     <form method="GET" action="1_2.php">
         <p>Товары категории <select name="category" id="category">
                 <?php
                    $sqlSelect = "SELECT DISTINCT name FROM $db.category";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             <button> Получить </button>
         </p>
     </form>


     <form method="GET" action="1_3.php">
         <p>По цене от <select name="min_price" id="min_price">
                 <?php
                    $sqlSelect = "SELECT DISTINCT price FROM $db.items";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[0]);
                        echo "</option>";
                    }
                    ?>
             </select>
             до <select name="max_price" id="max_price">
                 <?php
                    $sqlSelect = "SELECT DISTINCT * FROM $db.items";
                    $document = $dbh->query($sqlSelect);
                    foreach ($document as $cell) {
                        echo "<option>";
                        print($cell[2]);
                        echo "</option>";
                    }
                    ?>
         </p>
         </select>
         <button> Получить </button>
     </form>
 </body>

 </html>