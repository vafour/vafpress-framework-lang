			<hr />
			<footer>
				&copy; Vafour 2013
			</footer>
		</div>
		<script type="text/javascript">
		$("#searchbox").typeahead({
			name:'searchbox',
			local: [<?php echo $entries_imploded ?>]
		})
		</script>
	</body>
</html>