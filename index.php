<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        include 'header.php';
        ?>

        <?php
        $a = mysql_query("select * from penjualan");
        ?>

        <div class="col-md-10">
            <h3>Selamat datang</h3>	
            <h3>Aplikasi Penjualan</h3>
            <h3>Test Program ICON+</h3>
        </div>
        <!-- kalender -->
        <div class="pull-right">
            <div id="kalender"></div>
        </div>

        <?php
        include 'footer.php';
        ?>
    </body>
</html>
