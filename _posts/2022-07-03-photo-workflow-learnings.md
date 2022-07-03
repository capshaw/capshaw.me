---
title: Photo workflow learnings
layout: post
date: 2022-07-03
---

A few weeks ago <a href="https://www.flickr.com/photos/capshaw/">I rejoined Flickr</a> after years off of the platform. 

I joined after realizing that the service effectively fulfills two needs I have around photography, two needs that I hadn't solved very well up to this point. The first need is effortless offsite backup of my entire photo library. The second need is sharing high quality photos publicly with friends and family.

It replaces my usage of significantly-more-manual solutions to solve these needs. To solve the first need, I started utilizing AWS Glacier a little over a year ago as a way to back up my photos. I chose AWS Glacier at the time for the pricing scheme—it's trivial to host hundreds of GB of photos, so long as you don't have a need to access them. (On this factor alone it was very effective: I spent 25¢ a month to host my library of photos taken since 2014.)

The problem came when I needed to make a routine out of uploading my new photos. I never found a routine for uploading and never found a reasonable scheme for tracking what photos I'd uploaded successfully or not. The task was just too annoying and I found myself consistently putting it off. I also found myself dreaming of ways that I could make the task better by programming a solution, but never found the time to do that.

Ultimately this meant that my backups were not happening.

My previous solution for photo sharing was similarly clunky and required a lot of effort on my part to share—I self-hosted my photos on a subdomain of this website. I unfortunately never found the time to make that site work well and upload photos regularly. Like the backup solution, I was always considering ways to improve it but never found the time or effort to do so.

So I count this as a lesson learned—ultimately the cheapest solution isn't the cheapest if you're not going to use it. It's worth spending money to solve your need if it does so in a more effortless way.