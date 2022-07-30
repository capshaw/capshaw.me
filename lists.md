---
title: Lists
layout: post
---

Over the years, I've stored a bunch of miscellaneous lists in various notes apps spread across the web. I figured I could store the public ones on my website instead. This area of my site is pretty unrefined—consider everything a continuous draft.

<ul>
{% for list in site.lists %}
  <li><a href="{{list.url}}">{{list.title}}</a></li>
{% endfor %}
</ul>