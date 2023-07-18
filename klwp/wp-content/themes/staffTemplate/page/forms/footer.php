<script type="text/javascript" src="/assets/forms/js/nw_wp_form.js"></script>
<script>
$(function () {
	$("select[name='join_year']").val("<?php echo date('Y');?>");
	$("select[name='join_month']").val("<?php echo date('n');?>");
	$("select[name='join_day']").val("<?php echo date('j');?>");
});
</script>
<?php wp_footer(); ?>
</body></html>