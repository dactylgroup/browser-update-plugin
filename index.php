<!DOCTYPE html>
<html>
    <head>
        <title>Browser Update Plugin</title>
        <link rel="stylesheet" href="/css/main.css">
        <script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <script>var versions = {MSIE:9,Firefox:25,Opera:12.1,Safari:7,Chrome:23};function browserUpdate() {var script = document.createElement("script");script.src = "https://rawgit.com/dactylgroup/browser-update-plugin/master/bupdate.js";document.body.appendChild(script);}try {document.addEventListener("DOMContentLoaded", browserUpdate, false)} catch(e){window.attachEvent("onload", browserUpdate)}</script>
    </head>
    <body>
        <main>
            <div class="content">
                <h1>Instalace upozornění na váš web</h1>
                <p><strong>Které verze prohlížečů budou považovány již za staré:</strong></p>
                <div class="settings">
                    <div class="browser">
                        <label for="MSIE">Internet Explorer</label>
                        <select name="MSIE">
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9" selected>9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="browser">
                        <label for="Firefox">Mozilla Firefox</label>
                        <select name="Firefox">
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
                        <label for="Opera">Opera</label>
                        <select name="Opera">
                            <option value="12">12</option>
                            <option value="12.1" selected>12.1</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                    <div class="browser">
                        <label for="Safari">Safari</label>
                        <select name="Safari">
                            <option value="4.1">4.1</option>
                            <option value="5">5</option>
                            <option value="5.1">5.1</option>
                            <option value="6">6</option>
                            <option value="7" selected>7</option>
                        </select>
                    </div>
                </div>
                <p><strong>Kód vložte kamkoli na svůj web: </strong></p>
                <textarea name="code" id="code"><script>var versions = {MSIE:9,Firefox:25,Opera:12.1,Safari:7,Chrome:23};function browserUpdate() {var script = document.createElement("script");script.src = "https://rawgit.com/dactylgroup/browser-update-plugin/master/bupdate.js";document.body.appendChild(script);}try {document.addEventListener("DOMContentLoaded", browserUpdate, false)} catch(e){window.attachEvent("onload", browserUpdate)}</script></textarea>
            </div>
        </main>
    </body>
</html>


<?php
