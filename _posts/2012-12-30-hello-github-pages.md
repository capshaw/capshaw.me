---
layout: post
title: Hello Github Pages
---

This is my first test post using <a href='https://github.com/mojombo/jekyll/'>jekyll</a> and <a href='http://pages.github.com'>Github pages</a>. Considering this is a free service provided by github, and the fact this promotes open-source, this is a pretty awesome development.

Switching to Github Pages
-------------------------

Was really easy! I already had a repo called `andrew-capshaw-com` that held my personal website. There were only three steps required in order to change from my previous hosting to the github pages hosting: (1) Rename the repo `capshaw.github.com` (2) Add a CNAME entry to the repo and (3) Changing the DNS settings to point to github's servers.

Thanks to <a href='http://www.saltesta.com'>Sal Testa</a> for the suggestion.

Using Computer Modern
---------------------

I like computer modern as a font so much that I thought I'd use it here. It has regular, `monospace`, <em>italic</em>, and <strong>bold</strong> varieties that I can use.

Embedding Code
--------------

Maybe I'll want to embed code someday. If so, perhaps the Ace editor will be a good choice:

<div id="editor" style='width:100%; height:200px;'>function foo(items) {
    var x = "All this is syntax highlighted";
    return x;
}</div>

<script src="http://d1n0x3qji82z53.cloudfront.net/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
</script>