<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>spellcheck 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;p contenteditable="true" spellcheck="true"&gt;This is a paragraph.&lt;/p&gt;

			&lt;input type="text" spellcheck="true"&gt;
			&lt;input type="text" spellcheck="false"&gt;

			&lt;textarea spellcheck="false"&gt;&lt;/textarea&gt;

			&lt;div spellcheck="true"&gt;
				&lt;label&gt;Type a sentence: &lt;/label&gt;&lt;input type="text" size="50"&gt;&lt;br&gt;
				&lt;label&gt;Type another: &lt;/label&gt;&lt;input type="text" size="50"&gt;
			&lt;/div&gt;
			&lt;label&gt;Type a third: &lt;/label&gt;&lt;input type="text" size="50"&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 메모 -->
	<section>
		<h3 class="s_tit">메모</h3>
		<p>명세는 사용자 에이전트가 철자와 문법 검사를 하는 방법에 대해서는 정의하지 않습니다. 사용자 에이전트는 사용자 요청에 의해 확인할 수 있으며, 체크가 허용되어 있는 동안 계속 체크할 수도, 아니면 다른 방법을 사용할 수도 있습니다.</p>
		<p>영문으로 된 문자열 스펠링만 체크해주도록 지원 됩니다. 한글은 지원되지 않습니다.</p>
	</section>
	<!-- //메모 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/editing.html#spelling-and-grammar-checking" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'spellcheck',
		item: [{
			desc:'spellcheck 속성은 요소가 철자 및 문법을 확인해야 함을 나타냅니다.'
		}],
		txt: '나열 속성이며, 빈 문자열과 true, false를 키워드로 사용합니다.',
		grid: true,
		lst: [
			{item:'true 상태가 되면 철자 및 문법 체크가 되어야 합니다.'},
			{item:'false 상태는 철자 및 문법 체크가 되지 않습니다.'},
			{item:'default 상태는 기본적인 동작방식에 따르며, 부모 요소의 속성을 상속했을 가능성이 있습니다.'}
		]
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','status'],
		data: {'items':[
			{keyword:'빈 문자열', status:'true'},
			{keyword:'true', status:'true'},
			{keyword:'false', status:'false'},
			{keyword:'값이 생략되거나, 잘못된 값', status:'default'}
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
			{header:'키워드', dataIndex:'keyword', width:160},
			{header:'상태', dataIndex:'status', flex:1}
		]
	});
});
</script>
</body>
</html>