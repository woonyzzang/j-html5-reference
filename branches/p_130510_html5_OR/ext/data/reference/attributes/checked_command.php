<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>checked 속성 (command) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;command type="radio" radiogroup="alignment" checked="checked" label="왼쪽정렬"&gt;
			&lt;command label="필수체크" type="checkbox" checked="checked"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/interactive-elements.html#attr-command-checked" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'checked',
		meaning: 'command',
		item: [{
			desc:'checked 속성은 참과 거짓의 불리언 속성입니다. 따라서 이 속성이 존재한다면 커맨드가 선택되었음을 나타냅니다. checked 속성은 type 속성이 checkbox, radio 상태일 경우에만 사용할 수 있습니다.'
		}],
		txt: '불리언 속성입니다. checked 속성은 checked 속성 그 자체를 선언하거나 또는 checked=\"checked\" 로 선언하면 선택됨이 되고 속성이 선언되지 않았다면 선택되지 않은 상태 입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>