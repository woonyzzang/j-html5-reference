<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>keygen 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="processkey.cgi" method="post" enctype="multipart/form-data"&gt;
				&lt;p&gt;&lt;keygen name="key"&gt;&lt;/p>
				&lt;p&gt;&lt;input type="submit" value="키 전송"&gt;&lt;/p&gt;
			&lt;/form&gt;
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
		elem: 'keygen',
		meaning: 'key-pair generator&frasl;input control',
		item: [{
			desc:'keygen 요소는 암호화를 위한 개인키와 공개키 쌍을 만들어냅니다.'
		}],
		level: 'Inline-Level',
		category: 'Text formatting'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'autofocus', desc:'페이지를 로드할 때 요소가 자동으로 포커스를 받습니다.', href:'http://naver.com'},
			{tit:'challenge', desc:'값과 함께 전달되는 문자열입니다.', href:'http://naver.com'},
			{tit:'disabled', desc:'값을 제출하지 않습니다.', href:'http://naver.com'},
			{tit:'form', desc:'명시적으로 폼 소유자를 지정합니다.', href:'http://naver.com'},
			{tit:'keytype', desc:'키의 유형을 정의합니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출 시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'}
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