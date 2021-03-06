<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>media 속성 (link) : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @기본 'style.css'가 모든 매체에 적용되며, 출력용 매체에서는 'print.css'도 적용됩니다. -->
			&lt;link href="style.css"&gt;
			&lt;link href="print.css" media="print"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-link-media" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'media',
		meaning: 'link',
		item: [{
			desc:'media 속성은 link 요소가 어떤 매체에 적용되는지 나타냅니다.'
		}],
		txt: '유효한 미디어 쿼리여야 합니다. 속성이 생략되었다면, 기본값은 all입니다. (링크가 모든 매체에 적용됨을 의미합니다.)'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>