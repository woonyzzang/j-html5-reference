<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (script) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;script type="text/javascript"&gt;
			function helloWorld(){
				alert('Hello World!');
			}
			&lt;/script&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>type 속성을 동적으로 변경하는 것은 아무런 변화도 주지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/scripting-1.html#attr-script-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'script',
		item: [{
			desc:'type 속성은 스크립트 언어나 데이터 포맷을 표시합니다. 만약 스크립트 언어가 \"text\/javascript(기본값)\"가 아닌 경우 type 속성은 반드시 사용해야 하며, charset 매개변수를 사용해서는 안됩니다.'
		}],
		txt: '속성의 값은 유효한 MIME 타입이어야 합니다.',
		txt1: '다음은 몇가지 MIME 타입 문자열입니다.',
		lst : [
			{item:'application\/ecmascript'},
			{item:'application\/javascript'},
			{item:'application\/x-ecmascript'},
			{item:'application\/x-javascript'},
			{item:'text\/ecmascript'},
			{item:'text\/javascript1.0'},
			{item:'text\/javascript1.1'},
			{item:'text\/javascript1.2'},
			{item:'text\/javascript1.3'},
			{item:'text\/javascript1.4'},
			{item:'text\/javascript1.5'},
			{item:'text\/jscript'},
			{item:'text\/x-ecmascript'},
			{item:'text\/x-javascript'},
			{item:'text\/javascript;e4x=1'}
		]
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>