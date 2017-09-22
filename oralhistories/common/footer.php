</div><!-- end content -->

<footer>

        <div id="custom-footer-text">
            <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
            <p><?php echo $footerText; ?></p>
            <?php endif; ?>
            <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
                <p><?php echo $copyright; ?></p>
            <?php endif; ?>
        </div>

        <p><?php echo __('Powered by <a href="http://omeka.org">Omeka</a> and the <a href="http://www.oralhistoryonline.org">Oral History Metadata Synchronizer</a>.'); ?></p>
        
    <?php fire_plugin_hook('public_footer'); ?>
    
</footer>

</div><!--end wrap-->

<script type="text/javascript">
jQuery(document).ready(function () {
    Seasons.showAdvancedForm();
    Seasons.mobileSelectNav();
});
</script>

</body>

</html>
