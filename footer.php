        <!-- Floating Action Button -->
        <div id="back-to-top" class="toTop-wrap">
            <a href="#top" class="toTop">
                <i class="material-icons footer_top-i">expand_less</i>
            </a>
        </div>


        <!--Footer-->
        <footer class="mdl-mini-footer" id="bottom">
            <!--mdl-mini-footer-left-section-->
            <div class="mdl-mini-footer--left-section">
                <?php if (!empty($this->options->footersns) && in_array('ShowTwitter', $this->options->footersns)) : ?>
                <a href="<?php $this->options->TwitterURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-twitter">
                        <span class="visuallyhidden">Twitter</span>
                    </button>
                </a>
                <?php endif;?>
                <?php if (!empty($this->options->footersns) && in_array('ShowFacebook', $this->options->footersns)) : ?>
                <a href="<?php $this->options->FacebookURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-facebook">
                        <span class="visuallyhidden">Facebook</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowGooglePlus', $this->options->footersns)) : ?>
                <a href="<?php $this->options->GooglePlusURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-gplus">
                        <span class="visuallyhidden">Google Plus</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowWeibo', $this->options->footersns)) : ?>
                <a href="<?php $this->options->WeiboURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-weibo">
                        <span class="visuallyhidden">Weibo</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowInstagram', $this->options->footersns)) : ?>
                <a href="<?php $this->options->InstagramURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-instagram">
                        <span class="visuallyhidden">Instagram</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowGithub', $this->options->footersns)) : ?>
                <a href="<?php $this->options->GithubURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-github">
                        <span class="visuallyhidden">Github</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowTumblr', $this->options->footersns)) : ?>
                <a href="<?php $this->options->TumblrURL() ?>" target="_blank">
                    <button class="mdl-mini-footer--social-btn social-btn footer-sns-tumblr">
                        <span class="visuallyhidden">Tumblr</span>
                    </button>
                </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowBilibili', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->BilibiliURL() ?>" target="_blank">
                        <button class="mdl-mini-footer--social-btn social-btn footer-sns-bilibili">
                            <span class="visuallyhidden">Bilibili</span>
                        </button>
                    </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowTelegram', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->TelegramURL() ?>" target="_blank">
                        <button class="mdl-mini-footer--social-btn social-btn footer-sns-telegram">
                            <span class="visuallyhidden">Telegram</span>
                        </button>
                    </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowZhihu', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->ZhihuURL() ?>" target="_blank">
                        <button class="mdl-mini-footer--social-btn social-btn footer-sns-zhihu">
                            <span class="visuallyhidden">Zhihu</span>
                        </button>
                    </a>
                <?php endif;?>

                <?php if (!empty($this->options->footersns) && in_array('ShowLinkedin', $this->options->footersns)) : ?>
                    <a href="<?php $this->options->LinkedinURL() ?>" target="_blank">
                        <button class="mdl-mini-footer--social-btn social-btn footer-sns-linkedin">
                            <span class="visuallyhidden">LinkedIn</span>
                        </button>
                    </a>
                <?php endif;?>

            </div>

            <!--copyright-->
            <div id="copyright">Copyright &copy;
                <?php echo date("Y"); ?>
                <?php $this->options->title(); ?>
            </div>
            <?php copyright() ?>


            <!--mdl-mini-footer-right-section-->
            <div class="mdl-mini-footer--right-section">
                <div>
                    <div class="footer-develop-div">Powered by <a href="http://typecho.org" target="_blank" class="footer-develop-a">Typecho</a></div>
                    <div class="footer-develop-div">Theme - <a href="https://github.com/LiMingYuGuang/typecho-theme-material" target="_blank" class="footer-develop-a">Material</a></div>                </div>
            </div>
        </footer>
    </main>
    <div class="mdl-layout__obfuscator"></div>
</div>


<!-- UC Browser Compatible -->
<script>
	var agent = navigator.userAgent.toLowerCase();
	if(agent.indexOf('ucbrowser')>0) {
        <?php if (!empty($this->options->CDNURL)): ?>
		document.write('<link rel="stylesheet" href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/uc.css">');
        <?php else: ?>
		document.write('<link rel="stylesheet" href="<?php $this->options->themeUrl('css/uc.css'); ?>">');
        <?php endif; ?>
	    alert('由于 UC 浏览器使用极旧的内核，而本网站使用了一些新的特性。\n为了您能更好的浏览，推荐使用 Chrome 或 Firefox 浏览器。');
	}
</script>

<!--Analysis code-->
<?php $this->options->analysis(); ?>

<!-- Material js -->
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/jquery.min.js"></script>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/js.min.js"></script>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/jquery.pjax.min.js"></script>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/lazyload.min.js"></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/js.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/jquery.pjax.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/lazyload.min.js'); ?>"></script>
<?php endif; ?>

<!-- LazyLoad -->
<script>
    $(".lazy").lazyload();
</script>


<?php if (!empty($this->options->switch) && in_array('ShowLoadingLine', $this->options->switch)): ?>
<!-- Nprogress -->
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/nprogress.js"></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/nprogress.js'); ?>"></script>
<?php endif; ?>

<script type="text/javascript">
    NProgress.configure({
        showSpinner: true
    });
    NProgress.start();
    $('#nprogress .bar').css({
        'background': '<?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .peg').css({
        'box-shadow': '0 0 10px <?php $this->options->loadingcolor(); ?>, 0 0 15px <?php $this->options->loadingcolor(); ?>'
    });
    $('#nprogress .spinner-icon').css({
        'border-top-color': '<?php $this->options->loadingcolor(); ?>',
        'border-left-color': '<?php $this->options->loadingcolor(); ?>'
    });
    setTimeout(function() {
        NProgress.done();
        $('.fade').removeClass('out');
    }, <?php $this->options->loadingbuffer(); ?>);
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('SmoothScroll', $this->options->switch) && UACheck::is() !== "Safari"): ?>
<!-- SmoothScroll -->
<?php if (!empty($this->options->CDNURL)): ?>
<script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/smoothscroll.js" async></script>
<?php else: ?>
<script src="<?php $this->options->themeUrl('js/smoothscroll.js'); ?>" async></script>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('atargetblank', $this->options->switch)): ?>
<!-- _blank -->
<script>
    //Add target="_blank" to a tags
    $(document).bind('DOMNodeInserted', function(event) {
        $('a[href^="http"]').each(
            function() {
                if (!$(this).attr('target')) {
                    $(this).attr('target', '_blank')
                }
            }
        );
    });
</script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('Pangu', $this->options->switch) && !in_array('PanguPHP', $this->options->switch)): ?>
<!-- Pangu -->
  <?php if (!empty($this->options->CDNURL)): ?>
      <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/pangu.min.js"></script>
  <?php else: ?>
      <script src="<?php $this->options->themeUrl('js/pangu.min.js'); ?>"></script>
  <?php endif; ?>
  <script> pangu.spacingPage(); </script>
<?php endif; ?>

<?php if (!empty($this->options->switch) && in_array('HighLight', $this->options->switch)): ?>
<!-- highlight js -->
  <?php if (!empty($this->options->CDNURL)): ?>
      <script src="<?php $this->options->CDNURL() ?>/MaterialCDN/js/highlight.min.js"></script>
      <link href="<?php $this->options->CDNURL() ?>/MaterialCDN/css/highlight.min.css" rel="stylesheet">
  <?php else: ?>
      <script src="<?php $this->options->themeUrl('js/highlight.min.js'); ?>"></script>
      <link href="<?php $this->options->themeUrl('css/highlight.min.css'); ?>" rel="stylesheet">
  <?php endif; ?>
  <script> hljs.initHighlightingOnLoad(); </script>
<?php endif; ?>

<?php if (!empty($this->options->searchis) && $this->options->searchis == '1'): ?>
<!-- Local Search (beta) -->
<script>
    var inputArea = document.querySelector('#search');
            var getSearchFile = function() {
                var path = '<?php echo $this->options->LocalsearchURL ?>';
                searchFunc(path, 'search', 'local-search-result');
            }

            if(inputArea) {
                inputArea.onfocus = function() {
                    getSearchFile();
                }
            }
</script>
<script>
    var searchFunc=function(c,a,b){$.ajax({url:c,dataType:"xml",success:function(e){var d=$("entry",e).map(function(){return{title:$("title",this).text(),content:$("content",this).text(),url:$("url",this).text()}}).get();var g=document.getElementById(a);var f=document.getElementById(b);g.addEventListener("input",function(){var i='<ul class="search-result-list">';var h=this.value.trim().toLowerCase().split(/[\s\-]+/);f.innerHTML="";if(this.value.trim().length<=0){return}d.forEach(function(o){var n=true;var s=[];var t=o.title.trim().toLowerCase();var m=o.content.trim().replace(/<[^>]+>/g,"").toLowerCase();var j=o.url;var u=-1;var q=-1;var p=-1;if(t!==""&&m!==""){h.forEach(function(w,x){u=t.indexOf(w);q=m.indexOf(w);if(u<0&&q<0){n=false}else{if(q<0){q=0}if(x===0){p=q}}})}if(n){i+='<li><a href="'+j+'" class="search-result-title" target="_blank">'+t;var r=o.content.trim().replace(/<[^>]+>/g,"");if(p>=0){var k=p-6;var l=p+6;if(k<0){k=0}if(k===0){l=10}if(l>r.length){l=r.length}var v=r.substr(k,l);h.forEach(function(w){var x=new RegExp(w,"gi");v=v.replace(x,'<em class="search-keyword">'+w+"</em>")});i+='<p class="search-result">'+v+"...</p></a>"}}});f.innerHTML=i})}})};
</script>
<?php endif; ?>

<?php
    if($this->is('post')||$this->is('page')){
        if (!empty($this->options->switch) && in_array('PanguPHP', $this->options->switch)) {
            $html_source = ob_get_contents(); ob_clean(); print pangu($html_source); ob_end_flush();
        }
    }
?>

<?php $this->footer(); ?>

</body>
</html>
