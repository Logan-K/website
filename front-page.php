<?php
/**
 *
 * Template Name: Home Page
 *
 */
get_header(); ?>

<div id="particles-js" style="height:100%; background-color: #3399ff; position: relative;">
    <div id="center-div">
        <p class="welcome-message">Welcome to my site!</p>
        <div style="width:100%; text-align:center;">
            <img id="main-pic" src="http://personal_site.com/wp-content/uploads/2016/08/pic.png">
        </div>

        <p class="front-text">Come on in and check out some cool Web libraries I found on the web.</p>
        <p class="front-text">By: Logan Klingler</p>
    </div>



</div>

<script>
    jQuery(document).ready(function() {
        jQuery('#particles-js').particleground({
            dotColor: '#000000',
            lineColor: '#000000',
            parallax: true,

        });
    });

</script>

