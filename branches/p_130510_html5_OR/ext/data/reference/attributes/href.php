<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>href 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @href 속성이 사용되는 경우 -->
			&lt;a href="http://www.w3c.org"&gt;W3C.org&lt;/a&gt;

			<!-- @href 속성이 없는 경우 (페이징과 같이 링크가 동적으로 생성되는 경우) -->
			&lt;a&gt;이전&lt;/a&gt; | &lt;a&gt;다음&lt;/a&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/links.html#attr-hyperlink-href" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'href',
		item: [{
			desc:'href 속성은 a 요소, area 요소에서 사용되며, 이동할 URL을 지정합니다.'
		},{
			desc: '이 속성을 갖는 경우와 갖지 않는 경우 두가지로 사용될 수 있습니다.'
		},{
			desc: '속성을 갖는 경우 일반적인 하이퍼링크가 되지만 아직 결정되지 않은 링크가 올 수 있도록 속성을 생략하는 것도 가능합니다.'
		},{
			desc: 'area 요소가 href 속성을 갖지 않는다면, 요소가 나타내는 영역은 선택될 수 없는 것이고, 그러한 경우에는 alt 속성을 반드시 생략해야 합니다. 반대로 href 속성을 갖는 다면, alt 속성을 반드시 사용하여야 합니다.'
		}],
		txt: '속성이 있는 경우 그 값은 요효한 URI이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>