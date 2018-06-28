<!DOCTYPE html>
<html>
    <head>
        <title>SIMON DICE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/style.css?1.0.0" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="img/PICALLEX-WrtcOff.png">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:600" rel="stylesheet">
    </head>
    <body>
        <div class="container_simon">
            <nav>Simón dice...</nav>
            <div class="key_box">
                <div class="key_row">
                    <div class="key" data-key="81">Q</div>
                    <div class="key" data-key="87">W</div>
                    <div class="key" data-key="69">E</div>
                    <div class="key" data-key="82">R</div>
                    <div class="key" data-key="84">T</div>
                    <div class="key" data-key="89">Y</div>
                    <div class="key" data-key="85">U</div>
                    <div class="key" data-key="73">I</div>
                    <div class="key" data-key="79">O</div>
                    <div class="key" data-key="80">P</div>
                </div>

                <div class="key_row">
                    <div class="key" data-key="65">A</div>
                    <div class="key" data-key="83">S</div>
                    <div class="key" data-key="68">D</div>
                    <div class="key" data-key="70">F</div>
                    <div class="key" data-key="71">G</div>
                    <div class="key" data-key="72">H</div>
                    <div class="key" data-key="74">J</div>
                    <div class="key" data-key="75">K</div>
                    <div class="key" data-key="76">L</div>
                </div>

                <div class="key_row">
                    <div class="key" data-key="90">Z</div>
                    <div class="key" data-key="88">X</div>
                    <div class="key" data-key="67">C</div>
                    <div class="key" data-key="86">V</div>
                    <div class="key" data-key="66">B</div>
                    <div class="key" data-key="78">N</div>
                    <div class="key" data-key="77">M</div>
                </div>
            </div>
        </div>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.numeric.js"></script>
        <script>
            // $(function(){
            //     document.addEventListener('keydown', function (ev) {
            //         console.log(ev.keyCode);
            //     })
            // })

            const niveles = 15;
            let keys      = generateKeys();

            function generateKeys () {

            }

            function generateKeysRandom () {
                const min = 65;
                const max = 90;

                return Math.round(Math.random() * (max - min) + min);
            }

            function getElementByKeyCode(keyCode) {
                return document.querySelector(`[data-key="${keyCode}"]`);
            }

            function active (keyCode, opts = {}) {
                const el = getElementByKeyCode(keyCode);

                el.classList.add('active');

                if (opts.success) {
                    el.classList.add('success');
                } else if (opts.fail) {
                    el.classList.add('fail');
                }

                setTimeout(() => { deactivate (el) }, 1500);
            }

            function deactivate (el) {
                el.className = 'key';
            }
        </script>
    </body>
</html>
