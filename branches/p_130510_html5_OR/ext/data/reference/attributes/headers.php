<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>headers 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @스크린리더에서 읽는 경우 '과일이름:사과'형태로 읽습니다. -->
			&lt;table&gt;
			&lt;tr&gt;
			&lt;th id="fruit"&gt;과일이름&lt;/th&gt;
			&lt;th&gt;가격&lt;/th&gt;
			&lt;th&gt;갯수&lt;/th&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td headers="fruit"&gt;사과&lt;/td&gt;
			&lt;td&gt;2,000원&lt;/td&gt;
			&lt;td&gt;5개&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td&gt;10,000원&lt;/td&gt;
			&lt;td&gt;1box(특가)&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-headers" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'headers',
		item: [{
			desc:'headers 속성은 th 요소, td 요소를 id를 갖는 th 요소와 연결합니다.'
		}],
		txt: '속성 값은 공백문자로 구분되고 순서 없이 유일한 토큰의 목록이어야 하며 대소문자를 구분합니다. 토큰은 같은 테이블 안에 있는 th 요소의 id이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>