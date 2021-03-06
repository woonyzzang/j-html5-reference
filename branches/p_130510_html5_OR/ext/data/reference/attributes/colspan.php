<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>colspan 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;table&gt;
			&lt;caption&gt;과일 품목 지출 현황&lt;/caption&gt;
			&lt;tr&gt;
			&lt;th&gt;과일이름&lt;/th&gt;
			&lt;th&gt;가격&lt;/th&gt;
			&lt;th&gt;갯수&lt;/th&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td&gt;사과&lt;/td&gt;
			&lt;td&gt;2,000원&lt;/td&gt;
			&lt;td&gt;5개&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
			&lt;td colspan="3"&gt;오렌지 품절&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-tdth-colspan" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'colspan',
		item: [{
			desc:'column group 상태는 헤더가 동일한 열 집합에 있는 다른 모든 셀에 적용됨을 의미합니다. 따라서 요소가 열 집합을 가리키는 경우에만 colspan 속성을 사용할 수 있습니다.'
		},{
			desc:'td 요소요소, th 요소요소 모두 colspan 속성을 포함 할 수 으며, 이는 셀이 확장될 열의 숫자를 나타냅니다. 단, 셀을 오버랩하기 위해서 colspan 속성을 사용해서는 안됩니다.'
		}],
		txt: '0보다 큰 유효한 양의 정수이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>