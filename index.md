---
title: Welcome!
layout: page
---

# Welcome

I'm Andrew. I am a [software engineering manager](/work) and aspiring native gardener based out of Austin, TX. This is my personal website where I host various things I've written and things I've built. Poke around and free to [email me](mailto:andrew.capshaw@gmail.com) if you'd like to get in touch.

## Recent posts

<!-- Abomination. -->
<!-- Generally this whole thing is an experiment and needs fixing. -->
<!-- Hardcoding the year... -->
{% for post in site.posts %}
{% capture year %}{{post.date | date: "%Y"}}{% endcapture %}
{% if post.journal_tag and post.date and year == "2025" %}
- [{{ post.title }}]({{ post.url }})
{% endif %}
{% endfor %}

## Recent book reviews

{% for post in site.posts %}
{% capture year %}{{post.date | date: "%Y"}}{% endcapture %}
{% if post.book_tag and year == "2025" %}
- [{{ post.title }}]({{ post.url }})
{% endif %}
{% endfor %}