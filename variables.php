<div class="page-header">
        <h1>Het gebruik van variabelen met LESS</h1>
</div>
<p class="lead">
<p>Met LESS kun je gebruik maken van variabelen. Hieronder staat een voorbeeld</p>
<code>
    <pre>
        @color: #0000FF + #00FF00 + #110000;
        @borderWidth: 20 + 30;
        @unit: em;

        #content
        {
            border: ~"@{borderWidth}@{unit}" solid @color;
        };
    </pre>
</code>

<div id="content">Dit is een div die di="content" heeft</div>

<p>De onderstaande div heeft opmaak die is gemaakt met 7 LESS variabelen @colorText,
@borderWidth, @borderRadius, @backgroundColor, @fontSize, @width en @height.</p>
</p>

<div id="divopmaak">it's called LESS because it is less usefull</div>

<div id="paramixin">Crawling in my Crawl.
These Crawl, they will not Crawl.
Crawling is how I Crawl.
Crawling what is Crawl.</div>