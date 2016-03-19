<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    Theme by <a href="http://agala.xyz">iGalaxy</a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>.<br />
    ♥ Do have faith in what you're doing.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script type="text/javascript">
    $(function(){
        if($.cookie('like')=='1')
            $(".description").css("color","#FFF0F5").text("You do like it");
        else{
            $(".site-name")[0].onclick=function(){
                $(".description").css("color","#FFF0F5").text("You do like it");
                $.cookie("like","1");
            }
        }
     });
</script>
</body>
</html>
