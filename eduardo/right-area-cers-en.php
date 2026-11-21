<h3 id="cers">CERS - Recife/PE <span>2009 — 2022</span></h3>
<h4>Innovation Consultant in Video Technology</h4>

<p>In 2009, I was hired as a consultant to address persistent issues with the Flash Media Server that affected the stability of video streams during peak hours, compromising the experience of watching online classes.
    In 2011, I led the migration of CERS videos to Akamai (at the time, the only video CDN in the world), which allowed CERS to scale and serve a massive student base, reaching peaks of 50,000 students simultaneously watching videos.</p>

<p>In November 2014, CERS migrated to the Samba platform — a decision that later proved to be problematic. However, due to a minimum 12-month contract, the company was tied to it.
    In July 2015, faced with this situation, we began discussions that resulted in the development of our own video CMS.
    The challenge was considerable, given the deadline of only four months.
    Surprisingly, I managed to deliver the system and successfully migrate 150,000 videos before the Samba contract expired.
    To this day, the CERS video library remains the backbone of all CERS video content and integrates seamlessly with the LMS, providing an exceptional experience for the pedagogical team, production/editing staff, and video curation team.</p>

<p>Since Netflix introduced the option to download videos for offline viewing, CERS had wanted to implement that feature.
    After numerous failed attempts by other companies — the last one giving up just three months before the OAB exam announcement —
    I volunteered to <a href="https://www.facebook.com/pedrozanre/posts/pfbid0ot15Ch2gxELfrEr8HMAnqzx5G68vokq3xjfb4AZMhtRuu9yjJ2bGQkZFJSn1FsUvl" target="_blank">develop the app with offline viewing functionality, and I succeeded.</a></p>

<p>CERS also ventured into franchising, and for that, a <a href="https://cloud.google.com/cdn/docs/locations?hl=pt-br" target="_blank">PoP system was created in the CERS franchises</a>, allowing students in classroom environments to watch videos directly through the internal CDN, without any interruptions.</p>

<p>I also created LiveSparrow, a tool specialized in detecting video lecture downloads, helping combat video piracy.</p>

<?php
if( isset( $_GET[ "prints" ] ) ) {
    Prints::load( "cers" );
}
?>
