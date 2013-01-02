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

Testing Syntax Highlighting
---------------------------

Apparently Github pages has the <a href='http://pygments.org'>pygments</a> plugin built in! So hopefully this following code is highlighted:

{% highlight python linenos %}
def test(a, b):
    '''
    This swaps a and b and returns True, because why not.
    '''
    c = a
    a = b
    b = c

    return True
{% endhighlight %}

And now a test with Java:

{% highlight java linenos %}
class Person {

    private String _name;
    private int _favoriteNumber;

    public Person(String name, int favoriteNumber) {
        this._name = name;
        this._favoriteNumber = favoriteNumber;
    }

    public String getName() {
        return _name;
    }
}
{% endhighlight %}