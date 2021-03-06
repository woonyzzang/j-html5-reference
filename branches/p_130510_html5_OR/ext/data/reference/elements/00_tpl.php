<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>a 요소 : HTML5 Open Reference Guide</title>
<link rel="stylesheet" href="../../resources/css/ext-all.css">
<link rel="stylesheet" href="../../resources/css/base.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shCore.css">
<link rel="stylesheet" href="../../syntaxhighlighter_3.0.83/styles/shThemeFadeToGrey.css">
<script src="../../syntaxhighlighter_3.0.83/scripts/shCore.js"></script>
<script src="../../syntaxhighlighter_3.0.83/scripts/shAutoloader.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
<script src="../../ext-all-debug.js"></script>
<script src="../../locale/ext-lang-ko.js"></script>
</head>
<body>
<article id="content_desc">
	<!-- 태그 설명 -->
	<section>
		<div>
		<h2 class="s_tit">a 요소: (Anchor)</h2>

		<dl class="definition">
		<dt>정의</dt>
		<dd>a 요소는 현재 웹페이지에서 다른 웹페이지로 이동하거나 현재 웹페이지 내의 특정 위치 이동시에 문서들을 연결합니다.</dd>
		</dl>

		<h3 class="s_tit">요소 레벨</h3>
		<p>Inline-Level 엘리먼트</p>

		<h3 class="s_tit">요소 카테고리</h3>
		<p>HTML Basic</p>
		<!--
		<h3 class="s_tit">마크업 규칙</h3>
		<ul class="markup_rule">
		<li>플로우 컨텐츠이자 대화형 컨텐츠입니다. 그리고, 자손 요소로 구문 컨텐츠만 있다면 구문 컨텐츠에 속합니다.</li>
		<li>a 요소는 두 군데에 위치할 수 있습니다.
			<ul>
			<li>자식 요소에 구문 컨텐츠만 있으면 구문 컨텐츠의 위치에 올 수 있습니다.</li>
			<li>자식 요소에 구문 컨텐츠를 포함하지 않으면 플로우 컨텐츠의 위치에 올 수 있습니다.</li>
			</ul>
		</li>
		<li>자식 요소에 투명한 요소가 있으면 대화형 컨텐츠는 포함할 수 없습니다.</li>
		</ul>
		-->
	</section>
	<!-- //태그 설명 -->
	<!-- 샘플 코드 -->
	<section>
		<h3 class="s_tit">샘플 코드</h3>
		<pre class="brush:html">
			<!-- @문서간 이동 -->
			<a href="example.co.kr">
				<span>제목</span>
				<strong>구문 컨텐츠</strong>
			</a>

			<!-- @문서내 이동 -->
			<h3><a name="header">header 영역</a></h3> or <h3 id="header">header 영역 </h3>
			<a href="#header">header 영역</a>으로 이동한다.

			<!-- @문서간 특정위치로 이동 -->
			<h3><a name="header">header 영역</a></h3>
			<a href="manual.html#header">manual.html문서의 header영역</a>으로 이동한다.

			<!-- @mail주소 지정 -->
			<a href="#bookmark">책갈피</a>
			<a href="mailto:example.com">mail@example.com</a>
		</pre>
	</section>
	<!-- //샘플 코드 -->
	<!-- 속성 설명 -->
	<section>
		<h3 class="s_tit">속성</h3>
		<div id="gridAttr"></div>
		<!--
		<table class="tb_attr">
		<caption>태그 속성 목록 표</caption>
		<thead>
		<tr>
		<th scope="col">속성명</th>
		<th scope="col">설명</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td><a href="#" title="html5:attribute:global">전역 속성</a></td>
		<td>공통 속성</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:href_hyperlink">href</a></td>
		<td>이동할 URL을 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:target">target</a></td>
		<td>이동시 사용되는 콘텍스트 이름이나 키워드 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:rel">rel</a></td>
		<td>링크 대상과의 관계를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:media_hyperlink">media</a></td>
		<td>링크 대상을 출력하는 매체를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:hreflang">hreflang</a></td>
		<td>링크 대상의 언어 코드를 지정합니다.</td>
		</tr>
		<tr>
		<td><a href="#" title="html5:attribute:type_hyperlink">type</a></td>
		<td>링크 대상의 <abbr title="Multipurpose Internet Mail Extension">MIME</abbr> 타입을 지정합니다.</td>
		</tr>
		</tbody>
		</table>
		-->
	</section>
	<!-- //속성 설명 -->
	<div id="some-element"><!-- @테스트 영역: new Ext.XTemplate --></div>
</article>

<script src="../../syntaxhighlighter_3.0.83/scripts/shCustom.js"></script>
<script>
Ext.onReady(function(){
	var tpl = new Ext.XTemplate(
		'<p>Name: {name}</p>',
		'<p>Kids: ',
		'<tpl for="kids">',
			'<tpl if="this.isGirl(name)">',
				'<p>Girl: {name} - {age}</p>',
			'<tpl else>',
				'<p>Boy: {name} - {age}</p>',
			'</tpl>',
			'<tpl if="this.isBaby(age)">',
				'<p>{name} is a baby!</p>',
			'</tpl>',
		'</tpl></p>',
		{
			// XTemplate configuration:
			disableFormats: true,
			// member functions:
			isGirl: function(name){
			   return name == 'Aubrey' || name == 'Nikol';
			},
			isBaby: function(age){
			   return age < 1;
			}
		}
	);

	var data = {
		name: 'Don Griffin',
		title: 'Senior Technomage',
		company: 'Sencha Inc.',
		drinks: ['Coffee', 'Water', 'More Coffee'],
		kids: [
			{ name: 'Aubrey',  age: 17 },
			{ name: 'Joshua',  age: 13 },
			{ name: 'Cale',    age: 10 },
			{ name: 'Nikol',   age: 5 },
			{ name: 'Solomon', age: 0 }
		]
	};

	tpl.overwrite(Ext.get('some-element'), data);


	var storeData = Ext.create('Ext.data.Store',{
		fields: ['tit','desc','href'],
		data: {'items':[
			{tit:'전역 속성', desc:'공통 속성', href:'http://naver.com'},
			{tit:'href', desc:'이동할 URL을 지정합니다.', href:'naver.com'},
			{tit:'target', desc:'이동시 사용되는 콘텍스트 이름이나 키워드를 지정합니다.', href:'naver.com'},
			{tit:'rel', desc:'링크 대상과의 관계를 지정합니다.', href:'naver.com'},
			{tit:'media', desc:'링크 대상을 출력하는 매체를 지정합니다.', href:'naver.com'},
			{tit:'hreflang', desc:'링크 대상의 언어 코드를 지정합니다.', href:'naver.com'},
			{tit:'type', desc:'링크 대상의 MIME 타입을 지정합니다.', href:'naver.com'}
		]},
		proxy : {
			type: 'memory',
			reader: {
				type: 'json',
				root: 'items'
			}
		}
	});

	/*
	var addLink = function(val, x, rec){
		return '<a href=\"' + rec.data.href + '\">' + val + '</a>';
	};
	*/

	var grid = Ext.create('Ext.grid.Panel', {
		renderTo: Ext.get('gridAttr'),
		title: '요소 속성 목록',
		//width: 200,
		//height: 200,
		store: storeData,
		columns: [
			//{header:'속성명', dataIndex:'tit', width:200, renderer:addLink},
			{header:'속성명', xtype: 'templatecolumn', tpl: '<a href="{href}">{tit}</a>'},
			{header:'설명', dataIndex:'desc', flex:1}
		]
	});
});
</script>
</body>
</html>