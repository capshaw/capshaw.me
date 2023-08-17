---
title: Lists
layout: post
---

Welcome to the home of living notes, unrefined lists, and my personal wiki. Everything here is a continuous draft and is likely to not make much sense without context. For slightly more refined writing, see the [Journal](/journal) section.

<ul>
{% for list in site.lists %}
  <li><a href="{{list.url}}">{{list.title}}</a></li>
{% endfor %}
</ul>