<?php
include __DIR__ . '/partials/database.php';
include __DIR__ . "/partials/template/head.php";
?>

<body>
    <header class="df">
        <div class="header__logo df">
            <i class="fas fa-compact-disc"></i>
            <h1 class="big-text">Discs</h1>
        </div>
    </header>

    <main>
        <!-- contenitore cards -->
        <div class="wrapper-cd df">
            <!-- card disco -->
            <?php foreach ($discs as $disco) { ?>
                <div class="cd df">
                    <img src=<?php echo $disco["poster"]; ?> alt="disco-img">
                    <h3 class="small-text"><?php echo $disco["title"]; ?></h3>
                    <span class="xsmall-text"><?php echo $disco["author"]; ?></span>
                    <span class="xsmall-text"><?php echo $disco["year"]; ?></span>
                    <span class="xsmall-text"><?php echo $disco["genre"]; ?></span>
                </div>
            <?php } ?>
            <!-- /card disco -->
        </div>
        <!-- /contenitore cards -->
    </main>
</body>

</html>