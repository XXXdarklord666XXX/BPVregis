<div class="page-header">
        <h1>Het gebruik van variabelen met LESS</h1>
</div>
<p class="lead">
<p>Met LESS kun je gebruik maken van mixins. Dit zijn een soort van functies binnen less.
    Hieronder staat een voorbeeld</p>
<code>
    <pre>
@bordercolor: rgba(150, 140, 255, 0,8);
@borderthickness: 28;
@linestyle: solid;
@backgroundcolor: black;
@fontsize: 4;
@width: 400;
@height: 400;
@color2: lighten(@backgroundcolor, 60%);
@padding: 0.8em;;
@font_extension: family;

#divopmaak {
    border: ~"@{borderthickness}px" @linestyle @bordercolor;
    width: @width;
    height: @height;
    background-color: @backgroundcolor;
    color: @color2;
    padding: @padding;
}
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