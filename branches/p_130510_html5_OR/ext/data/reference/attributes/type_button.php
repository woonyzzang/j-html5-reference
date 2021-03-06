<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (button) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @Submit Button state:
				폼을 제출합니다.
				키워드로는 'submit'를 사용 합니다.
				이 경우 요소는 제출 버튼이 됩니다. -->
			&lt;p&gt;&lt;button type="submit"&gt;메일 보내기&lt;/button&gt;&lt;/p&gt;

			<!-- @Reset Button state:
				폼을 리셋합니다.
				키워드로는 'reset'를 사용 합니다. -->
			&lt;p&gt;&lt;button type="reset"&gt;다시 작성하기&lt;/button&gt;&lt;/p&gt;

			<!-- @Button state:
				아무것도 하지 않습니다.
				키워드로는 'button'를 사용 합니다. -->
			&lt;p&gt;&lt;button type="button"&gt;중복확인&lt;/button&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/the-button-element.html#attr-button-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'button',
		item: [{
			desc:'type 속성은 버튼이 활성화되었을 때의 동작을 제어합니다.'
		},{
			desc:'Submit Button state가 아니라면 button 요소에 formaction 속성, formenctype 속성, formmethod 속성, formnovalidate 속성, formtarget 속성를 사용 할 수 없습니다.'
		}],
		txt: '나열 속성으로 submit, reset, button 세가지 키워드를 사용합니다. 기본값은 submit 입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>