---
layout: post
title: Hello Github Pages
published: true
tags: [blog]
---

This is my first test post using <a href='https://github.com/mojombo/jekyll/'>jekyll</a> and <a href='http://pages.github.com'>Github pages</a>. Considering this is a free service provided by github, and the fact this promotes open-source, this is pretty awesome. Thanks to <a href='http://www.saltesta.com'>Sal Testa</a> for the suggestion.

Testing Syntax Highlighting
---------------------------

Apparently Github pages has the <a href='http://pygments.org'>pygments</a> plugin built in! So hopefully this following code is highlighted:

{% highlight python %}
def test(a, b):
    ''' Has no purpose. '''
    if (a == 0) and (b == -100):
        return True
    if a == b:
        return True
    return False
{% endhighlight %}

{% highlight java %}
/**
 * A Person with a favorite number. Kind of pointless.
 */
class Person {

    private String name;
    private int favoriteNumber;

    public Person(String name, int favoriteNumber) {
        this.name = name;
        this.favoriteNumber = favoriteNumber;
    }

    public String getName() {
        return name;
    }
}
{% endhighlight %}

And now for some lorem ipsum text. Nam ut erat eget nisl rhoncus feugiat id vitae quam. Phasellus et ligula mauris. Maecenas elementum mollis justo, vel pharetra lorem tempor nec. Aenean vulputate imperdiet turpis sit amet molestie. Ut magna orci, pellentesque eu pulvinar sit amet, auctor eu tellus. Nulla condimentum, lectus sit amet venenatis auctor, tortor sem molestie nisi, non luctus nibh turpis porttitor eros. Suspendisse a lectus a ipsum euismod rutrum interdum quis lectus. Cras sed nunc nulla, ut dignissim massa. Quisque tristique quam vitae dui ultricies vitae porta lacus accumsan. Nam ornare sapien vel lorem scelerisque sit amet dignissim ipsum iaculis. Suspendisse condimentum sagittis volutpat.