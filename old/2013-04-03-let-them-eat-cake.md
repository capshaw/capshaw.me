---
layout: post
title: Unnecessary Requirements
tags: [blog, rank, users, work, system, fafsa, green mountain]
published: false
---

People don't want to do work. No one likes to do more work than they have to. So it would seem obvious from a usability standpoint that it is best to not force your user to do something your system could just as easily do in their stead. I've recently encountered three examples of systems with minor annoyances that could have just as easily been avoided had they just thought through their user interaction.

## "Your password must be between six and eight characters long."

This one seems to be common, unfortunately. I don't recall the website I last encountered this on, but I came accross it recently. Some gripes:

First, adding arbitrary requirements to passwords actually decreases the total number of passwords available for a person to choose from. This is especially true if you place a hard cap on the length of the password.

Let's think this through. Why are you asking me to make a password between six and eight characters of length? Are you storing it unencrypted? That's a bad idea. Are you using an old encryption or hashing scheme that ignores characters after a certain index? That's also a bad idea. As far as I can tell, there is no good reason to enforce a length requirement. You're just decreasing the strength of passwords and annoying people.

Let me be stupid. If I want to use `password` as my password, that's my mistake, not yours. If I want to use a longer password such as `thispasswordisacoolpasswordyeah`, let me.

## What state are you in? Are you commercial or residential?

## "The symbol & is not allowed"

I saved the best for last. About a month ago I was filling out the FAFSA, the application for federal student aid. I got to the portion of the application where they asked for `occupation / employer`.

I tried to enter `Software Developer / AT&T`. Unfortunately, the box only allowed for a certain number of characters, so I ended up entering `Developer / AT&T`. Not the worst thing that could happen. But wait, upon submission I r

In conclusion, don't make your user do work. That's just annoying.