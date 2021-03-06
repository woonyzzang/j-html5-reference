<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>novalidate 속성 : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;form action="demo_form.asp" novalidate="novalidate"&gt;
			E-mail: &lt;input type="email" name="user_email"&gt;
			&lt;input type="submit"&gt;
			&lt;/form&gt;

			<!-- @formnovalidate 속성으로 요소마다 각각 지정할 수 있습니다.
				다음의 예제는 두개의 필수 필드를 포함하는 간단한 폼입니다.
				세개의 버튼을 갖고 있는데, 하나는 제출 버튼이며 두개의 필드가 모두 채워져야 합니다.
				다른 하나는 폼을 저장하는 버튼이며 사용자가 나중에 방문하여 다시 채워넣을 수 있습니다.
				다른 하나는 폼 전체를 취소합니다. -->
			&lt;form action="editor.cgi" method="post"&gt;
			&lt;p&gt;&lt;label&gt;Name: &lt;input name="fn" required&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;p&gt;&lt;label&gt;Essay: &lt;textarea name="essay" required&gt;&lt;/textarea&gt;&lt;/label&gt;&lt;/p&gt;
			&lt;p&gt;&lt;input type="submit" name="submit" value="Submit essay"&gt;&lt;/p&gt;
			&lt;p&gt;&lt;input type="submit" name="save" value="Save essay" formnovalidate&gt;&lt;/p&gt;
			&lt;p&gt;&lt;input type="submit" name="cancel" value="Cancel" formnovalidate&gt;&lt;/p&gt;
			&lt;/form&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/association-of-controls-and-forms.html#attr-fs-novalidate" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'novalidate',
		item: [{
			desc:'novalidate 속성은 폼 제출 시 유효성 검사를 하지 않도록 지정할 때 사용합니다. 이 속성은 유효성 검사를 하는 폼에서 \"저장\" 버튼을 포함시키려고 할 때 유용합니다. 사용자는 폼에 데이터를 완전히 입력하지 않은 상태에서도 하던 일을 마감할 수 있습니다.'
		}],
		grid: true
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['keyword','desc'],
		data: {'items':[
			{keyword:'novalidate', desc:'form 요소 전체 유효성 검사를 하지 않도록 지정합니다.'}
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
	});
});
</script>
</body>
</html>