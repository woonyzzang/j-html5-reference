<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>datetime 속성 (ins, del) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;&lt;del datetime="2011-09-02T20:00:00+09:00">토마토는 야채이다.&lt;/del&gt;&lt;/p&gt;

			&lt;p&gt;&lt;ins datetime="2011-09-02T21:00:00+09:00">토마토는 미국에서만 야채이다.&lt;/ins&gt;&lt;/p&gt;

			&lt;p&gt;&lt;time class="dtend" datetime="2007-10-20">19&lt;/time&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/edits.html#attr-mod-datetime" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'datetime',
		meaning: 'ins, del',
		item: [{
			desc:'datetime 속성은 ins 요소, del 요소,time 요소의 변화와 관련하여 변경한 날짜와 시간을 표시할 수 있습니다.'
		}],
		txt: '선택적으로 시간정보를 갖는 유효한 날짜 문자열이어야 합니다.',
		txt1: '이 속성을 사용했다면, 값은 반드시 있어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>