<!DOCTYPE html>
<html>
    <head>
        <title>Browser Update Plugin</title>
        <link rel="stylesheet" href="/css/main.css">
        <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
    </head>
    <body>
        <main>
            <div class="content">
                <h1>Instalace upozornění na váš web</h1>
                <p><strong>Které verze prohlížečů budou považovány již za staré:</strong></p>
                <div class="settings">
                    <div class="browser">
                        <label for="ie">Internet Explorer</label>
                        <select name="ie">
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9" selected>9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="browser">
                        <label for="f">Mozilla Firefox</label>
                        <select name="f">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25" selected>25</option>
                            <option value="30">30</option>
                            <option value="35">35</option>
                        </select>
                    </div>
                    <div class="browser">
                        <label for="o">Opera</label>
                        <select name="o">
                            <option value="12">12</option>
                            <option value="12.1" selected>12.1</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                    <div class="browser">
                        <label for="s">Safari</label>
                        <select name="s">
                            <option value="4.1">4.1</option>
                            <option value="5">5</option>
                            <option value="5.1">5.1</option>
                            <option value="6">6</option>
                            <option value="7" selected>7</option>
                        </select>
                    </div>
                </div>
                <p>Kód vložte kamkoli na svůj web: </p>
                <textarea name="code" id="code" cols="30" rows="10"><script>var versions = {MSIE:9,Firefox:25,Opera:12.1,Safari:7,Chrome:23};function browserUpdate() {var script = document.createElement("script");script.src = "https://rawgit.com/dactylgroup/browser-update-plugin/master/bupdate.min.js";document.body.appendChild(script);}try {document.addEventListener("DOMContentLoaded", browserUpdate, false)} catch(e){window.attachEvent("onload", browserUpdate)}</script></textarea>
            </div>
        </main>
        <script>
            var versions = {MSIE:9,Firefox:25,Opera:12.1,Safari:7,Chrome:23};
            function browserUpdate() {
                var script = document.createElement("script");
                script.src = "bupdate.min.js";
                document.body.appendChild(script);
            }
            try {document.addEventListener("DOMContentLoaded", browserUpdate, false)}
            catch(e){window.attachEvent("onload", browserUpdate)}
        </script>
    </body>
</html>


<?php
