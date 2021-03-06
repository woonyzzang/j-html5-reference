<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>disabled 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @disabled 속성이 있는 요소의 스타일도 원하는대로 바꿀 수 있습니다. -->
			&lt;head&gt;
			...
			&lt;style&gt;
			.dis[disabled]{background:#eee;text-decoration:line-through}
			&lt;/style&gt;
			&lt;/head&gt;

			&lt;body&gt;
			&lt;fieldset&gt;
			&lt;legend>Disabled&lt;/legend&gt;
				&lt;input type="text" value="일반 input"&gt;
				&lt;input type="text" value="disabled에 스타일을 줍니다." disabled class="dis"&gt;&lt;br&gt;
				&lt;input type="text" value="일반 disabled" disabled&gt;
			&lt;/fieldset&gt;
			&lt;/body&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fe-disabled" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'disabled',
		item: [{
			desc:'이 속성을 지정하면 요소가 화면에 표시되기는 하지만 사용자가 입력하거나 수정할 수 없습니다.'
		},{
			desc:'command 요소, fieldset 요소, optgroup 요소, option 요소의 disabled 속성은 다른 의미를 포함하고 있습니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>