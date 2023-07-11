---
title: Welcome
layout: post
---

Hi there <span class="emoji">🙋</span> 

This is my personal site where I collect things I write, photos I take, and other miscellany. 

I might even throw in a fun fact if we're lucky. Here's one. This year, I've erged <span id="ergMeters">?</span> meters. That's <span id="moonPercent">?</span>% of the way to the moon. Not even close.

<script>
    // Congrats, you've subscribed to moon facts.
    const DISTANCE_TO_MOON_M = 384400000;

    function replaceErgingMeters(data) {
        const ergMeters = data['season_erg_meters'];
        document.getElementById('ergMeters').innerHTML = ergMeters.toLocaleString();
        document.getElementById('moonPercent').innerHTML = parseFloat(ergMeters / DISTANCE_TO_MOON_M * 100).toFixed(4);
    }

    fetch('/api/erging/season_meters.json')
        .then(response => response.json())
        .then(json => replaceErgingMeters(json))
</script>