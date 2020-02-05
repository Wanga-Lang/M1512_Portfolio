<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="index.php">Mon Blog</a>

        <ul class="uk-navbar-nav uk-position-right">
            <li>
                <a class="uk-navbar-item uk-logo" href="index.php">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: home"></span>
                    Home
                </a>
            </li>
            <li>
                <a class="uk-navbar-item uk-logo" href="">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: plus"></span>
                    New Post
                </a>
            </li>
            <li>
                <a class="uk-navbar-item uk-logo" href="">
                    <span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>
                    Login
                </a>
            </li>
        </ul>

    </div>
</nav>

<body style="background-color: lightgrey">
    <div class="uk-flex uk-margin-small-left">
        <div class="uk-margin-medium-left">
            <div class="uk-card uk-card-default uk-margin-medium-top">
                <div class="uk-card-media-top">
                    <img src="images/icon.jpg" height="520" width="580" alt="">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Nom du Blog</h3>
                    <p>Description</p>
                </div>
            </div>
            <div class="uk-card uk-card-default uk-card-body uk-margin-medium-top">
                <h3 class="uk-card-title">A propos</h3>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Modal / Dialog</button>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Datetime Exemple</button>
                <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Data Grids</button>
            </div>
        </div>

        <div class="uk-margin-medium-left uk-margin-medium-right uk-width-3-4">

            <div class="uk-card uk-card-default uk-card-body uk-margin-medium-top">
                <form>

                    <legend class="uk-legend">
                        Nouveau post
                    </legend>
                    <div class="uk-width-auto uk-position-top-right uk-margin-medium-right uk-margin-medium-top">
                        <img class="uk-border-circle" width="40" height="40" src="images/icon.jpg">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="Input">
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
                    </div>

                    <div class="uk-margin">
                        <p class="uk-margin">
                            <button class="uk-button uk-button-default">Publier</button>
                        </p>
                    </div>

                    <div class="uk-margin uk-position-bottom-right uk-margin-medium-right">
                        <div uk-form-custom>
                            <input type="file">
                            <span class="uk-text-middle">Image</span>
                            <span class="uk-link uk-icon" uk-icon="icon: plus-circle"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<!-- UIkit CSS -->
<link rel="stylesheet" href="css/uikit.min.css" />

<!-- UIkit JS -->
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>