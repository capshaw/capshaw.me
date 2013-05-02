---
layout: post
title: Leaving Facebook, a Thirty Day Test
tags: [blog]
published: false
---

Facebook is great for a lot of things, especially communicating with friends; however, lately I have felt Facebook is not right for me. Because of this, I have decided to undergo a thirty day test to see if Facebook is really a necessity for me or whether it is possible to survive without one.

## Thirty days
A thirty day test is a simple idea. Take something that you want to make a habit, or something that you have put off trying, and do that thing for thirty days straight. If you break your promise to yourself, you must start over from the top. At the end of the thirty days, you can decide to break the habit or continue. I'm doing this with Facebook: I deactivated my account as of this posting and will attempt to stay away from the site for thirty days. It has now been <strong><span id='how_long'>-</span></strong> since I last visited Facebook.

## Reasons I want to Leave Facebook
+ **Graph Search**, the new feature that Facebook just unveiled is great. It reveals just how useful their data is. I'm not particularly paranoid about the search functionality itself (in fact, it is a great improvement and step in the right direction for them), but the product itself reveals just how much data the company has about my life. Like others have said before, members of Facebook are its product, not its customer.
+ **It literally makes me unhappy.** As noted by studies out of Stanford, and [reported in the media](http://www.slate.com/articles/double_x/doublex/2011/01/the_antisocial_network.html), networking on the web is capable of making a lot of people unhappy. While the study notes that this isn't unique to social networking, I have definitely noticed that browsing Facebook gives me a negative outlook on life. People primarily post achievements and boast on Facebook. Because of this, it's easy to feel like "everyone else [is] leading a perfect life."
+ **Time.** I have spent an embarrassingly large amount of time on Facebook the last 6 years of my life. What could I have done with this time? I will never know, but that is something I'd like to find out. I've made a habit of opening up Facebook first thing each morning to check what's new; I hate this habit.
+ **I know too much about people I haven't seen in a long time.** I know this might sound ridiculous, but I like catching up with people after a long time away. Knowing exactly what's going on in everyone's life is a little much for me.
+ **Not having a Facebook is shunned (by people my age).** Not having a Facebook should not be weird. There are plenty of ways of networking and talking with friends besides Facebook (see *real life*).

## Reasons I want to stay
+ I will completely lose contact with some friends to whom I have no other mode of communication.
+ It is awfully convenient for group projects. Opening up a quick chat with a peer to coordinate coding assignments is a breeze.
+ Everyone else is doing it.

## What I hope to get out of this
I don't know. I just want to prove to myself that I can live without Facebook. I've tried to leave multiple times, but these attempts have proven unsuccessful up until this point. Maybe this will be the time?

If you need to contact me, you can do so via email or phone.

<script type='text/javascript'>
    /**
     * TODO: clean this up and modularize time code so that the code for
     * this and last.fm module can be the same.
     */
    var left_fb = 1359230400000;
    var now = new Date();
    var utc = Date.UTC(
        now.getFullYear(),
        now.getMonth(),
        now.getDate(),
        now.getHours(),
        now.getMinutes()
    );
    var tz = now.getTimezoneOffset() * 60 * 1000;

    var a_second = 1000;
    var a_minute = 60 * a_second;
    var an_hour = 60 * a_minute
    var a_day = 24 * an_hour;

    /* TODO: fix this. */
    var time_since_left = utc + tz - left_fb - 6 * an_hour;

    var time = 1;
    var unit = "unknown";
    if (time_since_left > a_day) {
        time = Math.round(time_since_left / a_day);
        unit = "day";
    } else if (time_since_left > an_hour) {
        time = Math.round(time_since_left / an_hour);
        unit = "hour";
    } else if (time_since_left > a_minute) {
        time = Math.round(time_since_left / a_minute);
        unit = "minute";
    } else {
        time = Math.round(time_since_left / a_second);
        unit = "second";
    }
    var s = time > 1 ? "s" : "";
    $('#how_long').html(time + ' ' + unit + s);
</script>