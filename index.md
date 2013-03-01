---
layout: default
title: Andrew Capshaw
---

## About
I'm an Junior studying computer science at Rice University in Houston, TX. This is where I keep links to various projects I've been a part of and a blog of my writing and photos.

If you would like to contact me, my email is [capshaw@rice.edu](mailto:capshaw@rice.edu).

## Posts
<ul class='posts'>
    {% for post in site.posts %}
    <li>
        <span>{{ post.date | date: "%d %B %Y" }}</span>
        {% if post.layout == 'photo' %}
            <i class='icon icon-camera'> </i>
        {% elsif post.layout == 'post' %}
            <i class='icon icon-align-justify'> </i>
        {% endif %}
        <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
    {% endfor %}
</ul>
<!--
<ul class='posts'>
    <li><a href='https://www.github.com/capshaw'>Some cool code</a> on Github</li>
    <li><a href='http://www.last.fm/user/premendax'>Music I listen to</a> on Last.fm</li>
</ul> -->