<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>pattern 속성 (input) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @사용자 에이전트로 하여금 다음과 같은 알림창을 보이게 할 수 있습니다.
				pattern 속성을 사용시 title 속성은 반드시 그 패턴을 설명해야 합니다.
				사용자가 컨트롤에 기입하는 것을 도와줄 수 있다면, 추가적인 정보를 작성해도 됩니다.
				만약 title 속성에 설명이 아닌 경우 보조 기술의 활용이 어려울 것입니다. -->
			&lt;p&gt;&lt;label&gt;휴대전화 번호: &lt;input type="tel" name="mobile" maxlength="11" pattern="[0-9]{10}[0-9]?" title="'-'를 뺀 휴대전화 번호 10~11자리를 입력해주세요."&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @title 속성을 컨트롤의 캡션만 포함한다면, 패턴에 맞지 않을 시 보조 기술은
				[“입력하신 텍스트는 폼에서 요구하는 패턴과 맞지 않습니다. 휴대전화 번호”]
				이 정도 밖에 말할 수 없을 것입니다. 이는 그다지 유용하지 않을 것입니다. -->
			&lt;p&gt;&lt;label&gt;휴대전화 번호: &lt;input type="tel" name="mobile" maxlength="11" pattern="[0-9]{10}[0-9]?" title="휴대전호 번호"&gt;&lt;/label&gt;&lt;/p&gt;

			<!-- @사용자 에이전트는, 에러가 아닌 상황에서도, title 속성의 내용을 보여줄 가능성이 있습니다.
				(마우스 오버로 인한 툴팁) 따라서, 마크업 작업시 이러한 상황에서 노출될 title 속성의 내용이 에러를 암시하는 것처럼 보이게 하지 말아야 합니다. -->
			&lt;p&gt;&lt;label&gt;휴대전화 번호: &lt;input type="tel" name="mobile" maxlength="11" pattern="[0-9]{10}[0-9]?" title="잘 못 입력하셨습니다. '-'를 뺀 휴대전화 번호 10~11자리를 입력해주세요."&gt;&lt;/label&gt;&lt;/p&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/common-input-element-attributes.html#attr-input-pattern" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'pattern',
		meaning: 'input',
		item: [{
			desc:'pattern 속성은 컨트롤의 값이 통과해야 할 정규 표현식을 명시하며 multiple 속성이 사용된 경우 콘트롤의 값을 확인합니다.'
		},{
			desc:'input 요소에 pattern 속성을 사용 하였다면, 반드시 title 속성을 사용해서 패턴에 대한 설명을 제공해야 합니다. 사용자 에이전트는 title 속성의 내용을 활용해서, 패턴이 일치하지 않을 경우 사용자에게 알려줄 수 있습니다. 예를 들면 툴팁, 보조 기술을 사용해서 해당 콘트롤에 포커스를 이동하는 등의 활용이 가능합니다.'
		}],
		txt: '이 속성의 값은 자바스크립트 정규 표현식과 일치해야 합니다. <a href="http://www.ecma-international.org/publications/standards/Ecma-262.htm" target="_blank">[ECMA]</a>',
		txt1: '이 속성에 올바른 값이 사용되었다면, 사용된 숫자는 요소에서 허용되는 최대 길이가 됩니다. 속성이 생략되었거나 그 값을 파싱하는 과정에서 에러가 있다면, 허용하는 값의 길이 제한은 없는 것입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);
});
</script>
</body>
</html>