<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>for 속성 (label) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;
				&lt;input type="radio" name="gender" value="1" id="gender1"&gt;&lt;label for="gender1"&gt;남자&lt;/label&gt;
				&lt;input type="radio" name="gender" value="2" id="gender2"&gt;&lt;label for="gender2"&gt;여자&lt;/label&gt;
			&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-label-for" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'for',
		meaning: 'label',
		item: [{
			desc:'disabled 속성은 option 요소의 레이블을 나타냅니다.',
			child: [
				{item:'for 속성을 사용해서 폼 컨트롤을 캡션과 연결할 수 있습니다. 속성의 값은 레이블을 붙일 수 있는 폼 관련 요소의 ID여야 하고, label 요소와 같은 Document에 속해야 합니다.)'},
				{item:'이 속성은 label 요소 안에 폼 컨트롤을 나타내는 input 요소 등을 넣지 않을 때에 사용합니다.'}
			]
		}],
		txt: '같은 문서 내에 있는 id 속성의 값을 가지며, 공백문자로 구분합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>