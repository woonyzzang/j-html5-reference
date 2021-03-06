<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>lang 속성 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 속성 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //속성 설명 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>HTML 문서에서는 네임스페이스 없는 lang 속성 없이는 XML 네임스페이스의 lang 속성을 사용하지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/elements.html#attr-lang" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'lang',
		item: [{
			desc:'lang 속성은 요소 내용의 주 언어를 명시합니다. 또한, 속성이 텍스트를 포함하는 경우 속성의 언어를 명시합니다. 이 속성을 생략한다면 속성을 가진 부모 요소의 lang 속성을 따릅니다.'
		}],
		txt: '속성 값은 BCP 47 언어코드에 정한 내용을 따르거나, 빈 문자열이어야 합니다. 또한, 네임스페이스 없는 lang 속성과 XML 네임스페이스의 lang 속성이 함께 사용된다면 두 속성의 값은 대소문자 구별 없는 동일한 아스키 값이어야 합니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>