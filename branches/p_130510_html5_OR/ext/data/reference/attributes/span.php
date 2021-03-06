<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>span 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @colgroup 요소에 사용되는 예:
				colgroup 요소로 그룹핑된 컬럼들을 붉은색으로 지정하는 예제입니다. -->
			&lt;table&gt;
			&lt;caption&gt;참가 목록 표&lt;/caption&gt;
			&lt;colgroup span="2" style="color:#f00"&gt;&lt;/colgroup&gt;
			&lt;tr&gt;
			&lt;thead&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;td&gt;CJH&lt;/td&gt;
			&lt;td&gt;LDH&lt;/td&gt;
			&lt;td&gt;HSY&lt;/td&gt;
			&lt;td&gt;YGJ&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;

			<!-- @col 요소에 사용되는 예:
				첫번째부터 세번째의 컬럼의 글자색을 붉은색으로 지정하고, 네번째 컬럼의 글자색을 파랑색으로 지정하는 예제입니다. -->
			&lt;table&gt;
			&lt;caption&gt;참가 목록 표&lt;/caption&gt;
			&lt;col span="3" style="color:#f00"&gt;
			&lt;col style="color:#00f"&gt;
			&lt;thead&gt;
			&lt;tr&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;th&gt;참가자 성명&lt;/th&gt;
			&lt;/tr&gt;
			&lt;/thead&gt;
			&lt;tbody&gt;
			&lt;tr&gt;
			&lt;td&gt;CJH&lt;/td&gt;
			&lt;td&gt;LDH&lt;/td&gt;
			&lt;td&gt;HSY&lt;/td&gt;
			&lt;td&gt;YGJ&lt;/td&gt;
			&lt;/tr&gt;
			&lt;/tbody&gt;
			&lt;/table&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/tabular-data.html#attr-col-span" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'span',
		item: [{
			desc:'span 속성은 col 요소에 사용되며, 테이블에서 colspan 속성을 사용했을 때처럼 속성을 지정할 수 있습니다. col 요소에서 span 속성이 사용될 때는 속성에서 지정한 모든 컬럼에 속성이 지정됩니다.'
		}],
		txt: '0보다 큰 유요한 정수를 선언하여, 정수값만큼 테이블의 열을 지정할수 있습니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>