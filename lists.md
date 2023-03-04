---
title: Lists
layout: post
---

Below are unrefined lists and notes. Everything here is a continuous draft and might be nonsensical context. For slightly more refined writing, see the [Journal](/journal) section.

<ul>
{% for list in site.lists %}
  <li><a href="{{list.url}}">{{list.title}}</a></li>
{% endfor %}
</ul>