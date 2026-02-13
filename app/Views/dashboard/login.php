<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        html, body {
            height: 100%;
        }

        .left-panel {
            position: relative;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
            color: white;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.6);
        }

        .left-content {
            position: relative;
            z-index: 2;
            padding: 60px;
        }

        .login-container {
            height: 100vh;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row login-container">

        <!-- Sol Panel -->
        <div id="leftPanel" class="col-md-6 d-flex align-items-center left-panel">
            <div class="overlay"></div>
            <div class="left-content">
                <h1>DijitalPano Yönetim Ekranı</h1>
                <p>Erişmek için giriş yapın.</p>
            </div>
        </div>

        <!-- Sağ Panel -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div style="max-width:350px;width:100%;">
                <?php if (session("error") !== null): ?>
                    <div class="alert alert-danger" role="alert"><?= esc(
                        session("error"),
                    ) ?></div>
                <?php elseif (session("errors") !== null): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session("errors"))): ?>
                            <?php foreach (session("errors") as $error): ?>
                                <?= esc($error) ?>
                                <br>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <?= esc(session("errors")) ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if (session("message") !== null): ?>
                    <div class="alert alert-success" role="alert"><?= esc(
                        session("message"),
                    ) ?></div>
                <?php endif; ?>

                <form action="<?= url_to("login") ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label><?= lang("Auth.email") ?></label>
                        <input name="email" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label><?= lang("Auth.password") ?></label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <!-- Remember me -->
                    <?php if (
                        setting("Auth.sessionConfig")["allowRemembering"]
                    ): ?>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (
                                    old("remember")
                                ): ?> checked<?php endif; ?>>
                                <?= lang("Auth.rememberMe") ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <div class="d-flex gap-2">
                        <button class="btn btn-dark w-50"><?= lang(
                            "Auth.login",
                        ) ?></button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    const panel = document.getElementById("leftPanel");

    function changeBackground() {
        const random = Math.floor(Math.random() * 1000);
        panel.style.backgroundImage =
            `url('https://picsum.photos/1200/800?random=${random}')`;
    }

    changeBackground(); // ilk yükleme
    setInterval(changeBackground, 10000); // 10 sn'de bir değiş
</script>

</body>
</html>
