<?php
include __DIR__ . "/partials/template/head.php";
?>

<body>
    <div id="root">
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
                <div class="cd df" v-for="disco in dischi">
                    <img :src="disco.poster" :alt="disco.title">
                    <h3 class="small-text">{{disco.title}}</h3>
                    <span class="xsmall-text">{{disco.author}}</span>
                    <span class="xsmall-text">{{disco.year}}</span>
                    <span class="xsmall-text">{{disco.genre}}</span>
                </div>
                <!-- /card disco -->
            </div>
            <!-- /contenitore cards -->
        </main>
    </div>

    <?php include __DIR__ . "/partials/template/script.php";?>
</body>

</html>