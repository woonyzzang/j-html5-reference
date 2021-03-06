<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>http-equiv 속성 (meta) : <?php echo TITLE_REFERENCE; ?></title>
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
			<!-- @content-language 속성 -->
			&lt;meta http-equiv="content-language" content="ko"&gt;

			<!-- @content-type 속성 -->
			&lt;meta http-equiv="Content-Type" content="text/html; charset=euc-kr"&gt;

			<!-- @default-style 속성 -->
			&lt;meta http-equiv="content-style-type" content="text/css"&gt;

			<!-- refresh 속성: 10초뒤 www.naver.com으로 페이지를 이동합니다. -->
			&lt;meta http-equiv="refresh" content="10, www.w3c.org"&gt;

			<!-- @지정 시간 이후에는 웹문서 캐쉬(cache) 금지:
				2011년 5월 2일 이후부터 웹문서 캐쉬를 금지합니다. -->
			&lt;meta http-equiv="expires" content="wed, 02 may 2011 00:00:01 GMT"&gt;

			<!-- @문자 형식 지정:
				HTML은 ISO코드, 완성형 코드등의 다양한 문자셋을 지정합니다. 일반적으로 ISO 코드를 많이 사용합니다. -->
			&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-5"&gt;

			<!-- @스크립트 형식 지정:
				스크립트 형식에는 text/javascript(자바스크립트) 와 VBScript(비쥬얼베이직 스크립트)가 있습니다. -->
			&lt;meta http-equiv="Content-Script-Type" content="text/javascript"&gt;

			<!-- @스타일시트 형식 지정 -->
			&lt;meta http-equiv="Content-Style-Type" content="text/css"&gt;

			<!-- @웹문서를 들어오거나 나갈때 효과주기:
				속성값이 Page-Enter, Page-Exit는 웹문서를 들어오거나 나갈 때 한쪽 모서리 부터 서서히 드러나거나 사라지는 효과를 줍니다. -->
			&lt;meta http-equiv="Page-Enter" content="RevealTrans(Duration=10, Transition=50)"&gt;
			&lt;meta http-equiv="Page-Exit" content="RevealTrans(Duration=10, Transition=50)"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/semantics.html#attr-meta-http-equiv" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'http-equiv',
		meaning: 'meta',
		item: [{
			desc:'http-equiv 속성은 meta 요소에서 정의된 명령(사항)을 먼저 실행한 후에 페이지를 로딩합니다. 이를 프라그마 디렉티브(pragma directive)라고 합니다.'
		}],
		txt: '속성 값은 나열 속성입니다.',
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'content-language', desc:'전처리될 기본 언어를 지정할 수 있습니다. 선언하지 않는 경우 기본언어가 존재하지 않는것으로 간주합니다.'},
			{keyword:'content-type', desc:'이 속성은 문자 인코딩을 선언합니다. content속성의 문자열 &#34;text/html&#34; 와 아스키,대문자 구별없이 일치해야 합니다.<br>그뒤 리터럴 문자열 charset이 따라와야 하고 문자인코딩에 해당하는 이름이 있어야 합니다. XML에서는 http-equiv속성을 사용할 수 없습니다.'},
			{keyword:'default-style', desc:'대체 스타일시트 집합의 이름을 설정합니다.'},
			{keyword:'refresh', desc:'리다이렉트처럼 페이지를 지정한 시간이후에 새로고침을 할 수 있습니다. 값은 유요한 정수로만 구성되어야 합니다. 새로고침되기까지 시간을 초 단위로 나타냅니다.'},
			{keyword:'set-cookie', desc:'http쿠키를 설정할 수 있습니다. 이 속성은 올바르지 않기때문에 실제 http헤드를 사용해야 합니다.'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '속성 정의 목록',
		store: storeData,
		columns: [
			{header:'키워드', dataIndex:'keyword'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	})
});
</script>
</body>
</html>