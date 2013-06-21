---
layout: post
title: General Cluster
tags: [blog, project, genearl cluster, general, cluster, mvc, 2d data]
published: true
---

[General Cluster](https://github.com/capshaw/GeneralCluster) is a project I built in a few days over winter break, 2012. I was in a car on the way from Texas to Colorado (a drive which takes a ridiculous amount of time) and wanted to build something cool. I eventually decided to build a system that imports two-dimensional data and iteratively clusters it using a class of algorithms called [k-means clustering](https://en.wikipedia.org/wiki/K-means_clustering). Part of the reason I wanted to build this app was to show off (to myself and whoever might be watching) what I learned fall semester.

<img src='/img/posts/general_cluster/test_egg.png'>
<p class='caption'>A simple three cluster example with three overlapping groups.</p>

The user interacts with the application by loading files that contain points represented by two dimensions and a name. The user chooses the number of clusters they would like the system to make and then they press the cluster button repeatedly until they feel they have found a stable enough equilibrium. Should they choose to start over or use a different data set, they simply reload the data.

<!--Click on the image below to see an animation of a clustering reaching an equilibrium.img src='/img/posts/general_cluster/strange_animated.gif' id='gif'>
<p class='caption'>An animation of a cluster in progress. <a href='#' class='gif'>Replay animation.</a></p>

<script>
    $('.gif').click(function(e) {
        e.preventDefault();
        $('#gif').attr('src', $('#gif').attr('src'))
        return false;
    })
</script-->

During the fall semester, I learned new and better ways to manage large projects. This caused me to realize how bad some of my previous code was. Other than putting a better sample of code out in the wild, I also hoped to show three things I learned from various computer science classes I took fall semester.

+ *MVC Design Pattern.* To build an application that is extensible and accessible to changes, I utilized the separation of concerns that the Model, View, Controller design pattern allowed. While I had come across this idea previously, it's usefulness was hammered in by one of my fall semester courses that concerned large-scale object-oriented programming.
+ *Clustering Algorithms.* I took an introductory course to evolutionary bioinformatics that covered the subject of clustering algorithms. I wanted to build something that utilized a randomized clustering algorithm.
+ *Parsing.* My compilers course fall semester was one of my favorites thus far in college. I wanted to include some part of it in this project, no matter how small. The data that is used to plot the points is stored in external files that are loaded and parsed at runtime.

<img src='/img/posts/general_cluster/test_too_many.png'>
<p class='caption'>A clustered set of data with five means.</p>

In the end, it was a fun little project to build and play around with. Coming up with [it's name](https://en.wikipedia.org/wiki/George_Armstrong_Custer) was also a lot of fun. If you'd get any enjoyment out of it, feel free to [browse and download the code on Github](https://github.com/capshaw/GeneralCluster).
