---
layout: default
title: Andrew Capshaw
permalink: /posts/
---

<ul class='posts'>
    {% for post in site.posts %}
    <li>
        <span>{{ post.date | date: "%d %B %Y" }}</span>
        {% if post.layout == 'photo' %}
            <i class='icon icon-white icon-camera'> </i>
        {% elsif post.layout == 'post' %}
            <i class='icon icon-white icon-align-justify'> </i>
        {% elsif post.layout == 'playlist' %}
            <i class='icon icon-white icon-music'> </i>
        {% endif %}
        <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
    {% endfor %}
</ul>