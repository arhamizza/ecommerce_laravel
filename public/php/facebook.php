<div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $_GET['account']; ?>" data-width="240" data-height="240" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="true"></div>

 <!-- Facebook Api -->
    <div id="fb-root"></div>
<script type="text/javascript">
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_EN/all.js#xfbml=1&appId=469510423153590";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- //end Facebook Api --> 

