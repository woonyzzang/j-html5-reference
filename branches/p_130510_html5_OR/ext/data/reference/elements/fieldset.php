<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>fieldset 요소 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;fieldset&gt;
			&lt;legend&gt;로그인&lt;/legend&gt;
				&lt;label&gt;아이디 &lt;input type="text" name="uid"&gt;&lt;/label&gt;
				&lt;label&gt;비밀번호 &lt;input type="password" name="upw"&gt;&lt;/label&gt;
			&lt;/fieldset&gt;
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
		elem: 'fieldset',
		meaning: 'set of related form controls',
		item: [{
			desc:'fieldset 요소는 form안에 논리적으로 묶인 구성요소를 그룹으로 묶을 때 쓰이며, 공통 이름으로 그룹화 된(이 그룹화는 선택적입니다) 폼 컨트롤 집합을 나타냅니다.'
		}],
		level: 'Block-Level',
		category: 'Form'
	};

	tpl.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'disabled', desc:'이 속성을 작성하면 자식 요소를 비활성화합니다.', href:'http://naver.com'},
			{tit:'form', desc:'폼 소유자와 명시적으로 연관시키기 위해 사용됩니다.', href:'http://naver.com'},
			{tit:'name', desc:'폼 제출시에 사용되는 폼 컨트롤의 이름을 나타냅니다.', href:'http://naver.com'}
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