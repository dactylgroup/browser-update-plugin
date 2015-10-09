# Dactyl Browser Update Plugin

Upozorněte uživatele přistupujícího na vaše webové stránky, že používá zastaralý webový prohlížeč a nabídněte mu možnost prohlížeč aktualizovat. Plugin detekuje zastaralý prohlížeč a přes celou obrazovku zobrazí uživateli výzvu s doporučením prohlížeč aktualizovat. V nabídce jsou čtyři nejpoužívanější prohlížeče s odkazem vždy na hlavní stránku daného projektu, kde je možné prohlížeč stáhnout. V dialogovém okně je zároveň uživateli stručně vysvětleno, proč by si měl prohlížeč aktualizovat.  Uživatel má možnost plugin zavřít a aktualizaci prohlížeče neprovést. V takovém případě se mu dialogové okno znovu zobrazí až po jedno dni.

<screenshot pluginu (v pozdí bude nějaká naše stránka (která není rozbitá! 😄))>
![Alt text](/../master/image.png?raw=true "Browser Detect Plugin")

Instalace pluginu na web je možná pouhým zkopírováním jednoduchého skriptu hned za <body> tag na každé stránce, kde plugin chcete použít. Ve skriptu je možné nastavit verze jednotlivých prohlížečů, které se již mají považovat za zastaralé. Skript je možné vygenerovat na naší stránce http://dactylgroup.com/plugins/browser-update-plugin.

Ukázka instalace skriptu za <body> tag na webu:
-------
    <!DOCTYPE html>
    <html>
        <head>
        </head>
        <body>
            <script>
                var versions = {MSIE:9,Firefox:25,Opera:12.1,Safari:7,Chrome:23};
                var script = document.createElement("script");
                script.src = "https://rawgit.com/dactylgroup/browser-update-plugin/master/bupdate.js";
                document.getElementsByTagName('head')[0].appendChild(script);
            </script>
        </body>
    </html>

Je možné posílat návrhy na případná vylepšení nebo chyby na info@dactylgroup.com

Licence:
-------

    Copyright 2015 Dactyl Group s.r.o.

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and limitations under the License.
