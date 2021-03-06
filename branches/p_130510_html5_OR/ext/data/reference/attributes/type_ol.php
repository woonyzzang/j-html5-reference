<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>type 속성 (ol) : <?php echo TITLE_REFERENCE; ?></title>
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
			&lt;h4&gt;세부 목차(부침개)&lt;/h4&gt;
			&lt;ol type="I"&gt;
			&lt;li&gt;지짐류
				&lt;ol type="i"&gt;
				&lt;li&gt;김치부침개&lt;/li&gt;
				&lt;li&gt;빈대떡&lt;/li&gt;
				&lt;/ol&gt;
			&lt;/li&gt;
			&lt;li&gt;튀김류
				&lt;ol type="i"&gt;
				&lt;li&gt;고구마튀김&lt;/li&gt;
				&lt;li&gt;연근튀김&lt;/li&gt;
				&lt;li&gt;모듬튀김&lt;/li&gt;
				&lt;/ol&gt;
			&lt;/li&gt;
			&lt;/ol&gt;
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 참고 -->
	<section>
		<h3 class="s_tit">참고 API</h3>
		<ul class="api_ist">
		<li><a href="http://www.w3.org/TR/html5/grouping-content.html#attr-ol-type" target="_blank">최신 명세</a></li>
		</ul>
	</section>
	<!-- //참고 -->
</article>

<script src="<?php echo PATH; ?>syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tplData = {
		attr: 'type',
		meaning: 'ol',
		item: [{
			desc:'type 속성은 목록의 마커 유형의 종류를 정의합니다. CSS의 list-style-type 속성과 동일하지만 style을 불러오지 않은 환경에서도 목록의 종류를 설정할 수 있는 장점이 있습니다.'
		},{
			desc:'type 속성은 HTML5에서는 사용이 제한되었지만, ol 요소에 한해서 순서에 의미를 가지는 경우에는 사용이 가능하도록 변경되었습니다.'
		}],
		txt: '아래의 표의 첫 열인 \'속성 값\'에 있는 키워드를 사용 합니다. 키워드는 대소문자 구분하여 일치해야 합니다.',
		grid: true,
		txt2: '속성을 사용하지 않았다면 기본 상태는 decimal 상태 입니다.'
	};

	tpl2.overwrite(Ext.get('info'), tplData);

	var storeData = Ext.create('Ext.data.Store',{
		fields: ['attr','status','dfn','content','ex'],
		data: {'items':[
			{attr:'1', status:'decimal', content:'10진수 숫자', ex:'1.2.3. … 3999.4000.4001. …'},
			{attr:'a', status:'lower-alpha', content:'소문자 알파벳', ex:'a.b.c. … ewu. ewv. eww. …'},
			{attr:'A', status:'upper-alpha', content:'대문자 알파벳', ex:'A. B. C. … EWU.EWV.EWW. …'},
			{attr:'i', status:'lower-roman', content:'소문자 로마 숫자', ex:'i.ii.iii. … mmmcmxcix.i̅v̅.i̅v̅i. …'},
			{attr:'I', status:'lower-roman', content:'대문자 로마 숫자', ex:'I.II.III. … MMMCMXCIX.I̅V̅.I̅V̅I. …'}
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
			{header:'속성 값', dataIndex:'attr'},
			{header:'상태', dataIndex:'status'},
			{header:'정의', dataIndex:'content'},
			{header:'예제', dataIndex:'ex', flex:1}
		]
	});
});
</script>
</body>
</html>