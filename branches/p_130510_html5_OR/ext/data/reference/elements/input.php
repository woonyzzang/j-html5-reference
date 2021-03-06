<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>input 요소 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section id="info"><!-- @new Ext.XTemplate --></section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			&lt;input type="text"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
	</section>
	<!-- //속성 설명 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		elem: 'input',
		meaning: 'input control',
		item: [{
			desc:'input 요소는 타입을 갖는 데이터 필드입니다. 이 요소는 타입(속성)을 지정하여 옵션을 넣으면 한 줄 글상자, 확인 상자, 라디오 버튼, 입력버튼, 그림 등의 다양한 방법으로 설정할 수 있습니다.'
		}],
		level: 'Inline-Level',
		category: 'Form'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'accept', desc:'type 속성이 File Upload state면 서버에 수용하는 파일의 타입에 대해 사용자 에이전트에게 힌트를 줍니다.', href:'http://naver.com'},
			{tit:'alt', desc:'type 속성이 Image Button state면 이미지를 사용할 수 없는 사용자와 사용자 에이전트에게 대신 사용할 버튼에 대한 텍스트 레이블을 제공합니다.', href:'http://naver.com'},
			{tit:'autocomplate', desc:'사용자 에이전트가 제공하는 자동완성 기능을 제어합니다.', href:'http://naver.com'},
			{tit:'autofocus', desc:'페이지를 로드할 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'checked', desc:'input 요소가 체크되어 있는지 나타냅니다.', href:'http://naver.com'},
			{tit:'dirname', desc:'폼 요소의 방향성을 결정합니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'컨트롤를 비활성화합니다.', href:'http://naver.com'},
			{tit:'form', desc:'form 요소와 연결을 시켜줍니다.', href:'http://naver.com'},
			{tit:'formaction', desc:'폼 제출할 서버의 url을 정의합니다.', href:'http://naver.com'},
			{tit:'formenctype', desc:'제출하는 폼 데이터의 인코딩을 정의합니다.', href:'http://naver.com'},
			{tit:'formmethod', desc:'폼 제출 시 사용되는 HTTP 메서드를 정의합니다.', href:'http://naver.com'},
			{tit:'formnovalidate', desc:'폼 제출 시 데이터의 유효성 검사 여부를 결정합니다.', href:'http://naver.com'},
			{tit:'formtarget', desc:'폼 제출 후 결과를 표시할 브라우징 문맥을 정의합니다.', href:'http://naver.com'},
			{tit:'height', desc:'시각적 높이를 나타냅니다.', href:'http://naver.com'},
			{tit:'list', desc:'사용자에게 제안되는 미리 정의된 옵션의 목록을 나타냅니다.', href:'http://naver.com'},
			{tit:'max', desc:'input 요소에 허용하는 값의 범위 중 최대 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'maxlength', desc:'사용자가 입력할 수 있는 글자수의 제한을 나타냅니다.', href:'http://naver.com'},
			{tit:'min', desc:'input 요소에 허용하는 값의 범위 중 최소 값을 나타냅니다.', href:'http://naver.com'},
			{tit:'multiple', desc:'사용자가 여러개의 값을 입력하는 것을 허용하는지를 나타냅니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'},
			{tit:'pattern', desc:'컨트롤의 값이 통과해야 할 정규 표현식을 나타냅니다.', href:'http://naver.com'},
			{tit:'placeholder', desc:'사용자가 데이터를 입력하는데 도움을 줄 수 있는 \'짧은\'힌트를 나타냅니다.', href:'http://naver.com'},
			{tit:'readonly', desc:'input 요소의 값을 수정할 수 있는지 여부를 나타냅니다.', href:'http://naver.com'},
			{tit:'required', desc:'필수적인 요소인지 나타냅니다.', href:'http://naver.com'},
			{tit:'size', desc:'사용자에게 시각적으로 보여줄 글자 수를 나타냅니다.', href:'http://naver.com'},
			{tit:'src', desc:'type 속성이 Image Button state면 이미지의 URL을 지정합니다.', href:'http://naver.com'},
			{tit:'step', desc:'컨트롤의 값에서 예상되는(그리고 요구되는) 단계성을 나타냅니다.', href:'http://naver.com'},
			{tit:'type', desc:'input 요소의 데이터 타입과 연관된 컨트롤을 조절합니다.', href:'http://naver.com'},
			{tit:'value', desc:'input 요소의 기본값을 나타냅니다.', href:'http://naver.com'},
			{tit:'width', desc:'시각적 너비를 나타냅니다.', href:'http://naver.com'}
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
		title: '요소 속성 목록',
		store: storeData,
		columns: [
			{header:'속성명', xtype:'templatecolumn', tpl:'<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>