<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>readonly 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p&gt;&lt;label&gt;아이디: &lt;input type="text" name="id" value="gildong" readonly&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;p&gt;&lt;label&gt;새로운 비밀번호: &lt;input type="password" name="pw"&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/forms.html#attr-input-readonly" target="_blank">최신 명세</a></li>
		<li><a href="http://www.w3.org/TR/html5/infrastructure.html#boolean-attribute" target="_blank">Boolean attributes</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'readonly',
		meaning: 'input',
		item: [{
			desc:'readonly 속성은 요소의 값을 수정할 수 있는지의 여부를 나타냅니다.'
		}],
		txt: '불리언 속성입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>