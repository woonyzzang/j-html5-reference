<?php require '../../../settings.php'; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title>input 요소 상세설명 : <?php echo TITLE_REFERENCE; ?></title>
<?php include RELATIEV_PATH.'common_inc.php'; ?>
</head>
<body>
<article>
	<!-- 스펙 명세 -->
	<section id="refer">
		<h3 class="blind">스펙 명세</h3>
		<dl>
		<dt class="first">[요소가 속하는 범주]</dt>
		<dd>
			<ul>
			<li>플로우 컨텐츠</li>
			<li>구문 컨텐츠</li>
			<li>요소의 type 속성이 hidden 상태가 아니라면: 대화형 컨텐츠</li>
			<li>요소의 type 속성이 hidden 상태가 아니라면: 목록화된, 레이블을 붙일 수 있는, 제출할 수 있는, 리셋할 수 있는, 폼과 연관된 요소.</li>
			<li>요소의 type 속성이 hidden 상태라면: 목록화된, 제출할 수 있는, 리셋할 수 있는, 폼과 연관된 요소.</li>
			</ul>
		</dd>
		<dt>[이 사용될 수 있는요소가 문맥]</dt>
		<dd>구문 컨텐츠가 사용될 수 있는 곳</dd>
		<dt>[이 요소가 포함할 수 있는 것]</dt>
		<dd>이 요소는 비어 있어야 합니다.</dd>
		<dt>[요소에 사용할 수 있는 속성]</dt>
		<dd>
			<ul>
			<li>accept</li>
			<li>alt</li>
			<li>autocomplete</li>
			<li>autofocus</li>
			<li>checked</li>
			<li>dirname</li>
			<li>disabled</li>
			<li>form</li>
			<li>formaction</li>
			<li>formenctype</li>
			<li>formmethod</li>
			<li>formnovalidate</li>
			<li>formtarget</li>
			<li>height</li>
			<li>list</li>
			<li>max</li>
			<li>maxlength</li>
			<li>min</li>
			<li>multiple</li>
			<li>name</li>
			<li>pattern</li>
			<li>placeholder</li>
			<li>readonly</li>
			<li>required</li>
			<li>size</li>
			<li>src</li>
			<li>step</li>
			<li>type</li>
			<li>value</li>
			<li>width</li>
			</ul>
		</dd>
		<dt>[DOM 인터페이스]</dt>
		<dd>
			<pre>
interface HTMLInputElement : HTMLElement {
           attribute DOMString accept;
           attribute DOMString alt;
           attribute DOMString autocomplete;
           attribute boolean autofocus;
           attribute boolean defaultChecked;
           attribute boolean checked;
           attribute DOMString dirName;
           attribute boolean disabled;
  readonly attribute HTMLFormElement form;
  readonly attribute FileList files;
           attribute DOMString formAction;
           attribute DOMString formEnctype;
           attribute DOMString formMethod;
           attribute boolean formNoValidate;
           attribute DOMString formTarget;
           attribute DOMString height;
           attribute boolean indeterminate;
  readonly attribute HTMLElement list;
           attribute DOMString max;
           attribute long maxLength;
           attribute DOMString min;
           attribute boolean multiple;
           attribute DOMString name;
           attribute DOMString pattern;
           attribute DOMString placeholder;
           attribute boolean readOnly;
           attribute boolean required;
           attribute unsigned long size;
           attribute DOMString src;
           attribute DOMString step;
           attribute DOMString type;
           attribute DOMString defaultValue;
           attribute DOMString value;
           attribute Date valueAsDate;
           attribute double valueAsNumber;
  readonly attribute HTMLOptionElement selectedOption;
           attribute DOMString width;

  void stepUp(in optional long n);
  void stepDown(in optional long n);

  readonly attribute boolean willValidate;
  readonly attribute ValidityState validity;
  readonly attribute DOMString validationMessage;
  boolean checkValidity();
  void setCustomValidity(in DOMString error);

  readonly attribute NodeList labels;

  void select();
           attribute unsigned long selectionStart;
           attribute unsigned long selectionEnd;
  void setSelectionRange(in unsigned long start, in unsigned long end);
};
			</pre>
		</dd>
		</dl>
	</section>
	<!--//스펙 명세 -->
	<!-- 콘텐츠 분류 타입 -->
	<section id="flow">
		<h3 class="blind">콘텐츠 분류 타입</h3>
		<svg width="300" height="200" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svg">
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#flow-content-0" target="_blank"><ellipse cx="150" cy="100" rx="130" ry="80" class="cate_flow" title="Flow"></ellipse><text x="140" y="40">Flow</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#interactive-content-0" target="_blank"><ellipse cx="85" cy="80" rx="50" ry="30" class="cate_interactive" title="Interactive"></ellipse><text x="55" y="80">Interactive</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#metadata-content-0" target="_blank"><ellipse cx="80" cy="150" rx="60" ry="30" class="cate_metadata" title="Metadata"></ellipse><text x="55" y="155">Metadata</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#phrasing-content-0" target="_blank"><ellipse cx="120" cy="100" rx="50" ry="50" class="cate_phrasing on" title="Phrasing"></ellipse><text x="100" y="75">Phrasing</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#embedded-content-0" target="_blank"><ellipse cx="120" cy="100" rx="40" ry="20" class="cate_embedded" title="Embedded"></ellipse><text x="97" y="102">Embedded</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#heading-content-0" target="_blank"><ellipse cx="220" cy="75" rx="40" ry="20" class="cate_heading" title="Heading"></ellipse><text x="203" y="78">Heading</text></a>
			<a xlink:href="http://www.clearboth.org/html5/content-models.html#sectioning-content-0" target="_blank"><ellipse cx="220" cy="125" rx="40" ry="20" class="cate_sectioning" title="Sectioning"></ellipse><text x="195" y="127">Sectioning</text></a>
		</svg>

		<ul>
		<li>플로우 컨텐츠, 구문컨텐츠에 속합니다.
			<ul>
			<li>type 속성이 Hidden state가 아니면
				<ul>
				<li>대화형 컨텐츠에 속합니다.</li>
				<li>폼 관련 요소에 속합니다. 이 상태의 input 요소에는 다음과 같은 특징이 있습니다.
					<ul>
					<li>스크립트에서 form.elements와 fieldset.elements로 호출할 수 있습니다. (여기에서 form, fieldset은 해당 요소의 name 속성 값입니다.)</li>
					<li>레이블을 붙일 수 있습니다.</li>
					<li>폼을 전송할 때 함께 전송됩니다.</li>
					<li>폼을 리셋할 때 함께 리셋됩니다.</li>
					</ul>
				</li>
				</ul>
			</li>
			<li>type 속성이 Hidden state라면
				<ul>
				<li>폼 관련 요소에 속합니다. 이 상태의 input 요소에는 다음과 같은 특징이 있습니다.
					<ul>
					<li>스크립트에서 form.elements와 fieldset.elements로 호출할 수 있습니다. (여기에서 form, fieldset은 해당 요소의 name 속성 값입니다.)</li>
					<li>폼을 전송할 때 함께 전송됩니다.</li>
					<li>폼을 리셋할 때 함께 리셋됩니다.</li>
					</ul>
				</li>
				</ul>
			</li>
			</ul>
		</li>
		<li>구문 컨텐츠의 위치에 사용할 수 있습니다.</li>
		<li>사용자가 데이터를 수정할 수 있게끔 폼 컨트롤과 함께 사용됩니다.</li>
		<li>type 속성으로 요소의 데이터 타입과 연관된 컨트롤을 조절합니다.</li>
		<li>자식 요소가 없는 빈 요소입니다.</li>
		</ul>
	</section>
	<!-- //콘텐츠 분류 타입 -->
	<!-- 참조 -->
	<section id="memo">
		<h3 class="blind">참조</h3>
		<ul>
		<li>autocomplete 속성, autofocus 속성, dirname 속성, form 속성, formaction 속성, formenctype 속성, formmethod 속성, formnovalidate 속성, formtarget 속성, list 속성, max 속성, min 속성, multiple 속성, pattern 속성, placeholder 속성, required 속성, step 속성 추가 되었습니다.</li>
		<li>usemap 속성, ismap 속성이 폐기되었습니다.</li>
		<li>type 속성의 키워드 별 state가 추가되었습니다.</li>
		</ul>
	</section>
	<!--//참조 -->
	<!-- 관련 요소 레벨 -->
	<section id="related">
		<h3 class="blind">관련 요소 레벨</h3>
		<a href="#">a 요소</a>,
		<a href="#">button 요소</a>,
		<a href="#">details 요소</a>,
		<a href="#">input 요소</a>,
		<a href="#">keygen 요소</a>,
		<a href="#">label 요소</a>,
		<a href="#">menu 요소</a>,
		<a href="#">select 요소</a>,
		<a href="#">textarea 요소</a>
	</section>
	<!--//관련 요소 레벨 -->
	<!-- 지원 브라우저 -->
	<section id="browser">
		<h3 class="blind">지원 브라우저</h3>
		<p>
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie6.png" width="25" height="25" alt="IE6 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie7.png" width="25" height="25" alt="IE7 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie8.png" width="25" height="25" alt="IE8 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie9.png" width="25" height="25" alt="IE9 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_ie10.png" width="25" height="25" alt="IE10 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_chrome.png" width="25" height="25" alt="Chrome 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_firefox.png" width="25" height="25" alt="Firefox 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_opera.png" width="25" height="25" alt="Opera 지원">
			<img src="<?php echo PATH; ?>resources/css/images/custom/ico_support_safari.png" width="25" height="25" alt="Safari 지원">
		</p>
		<em>모든 주요 브라우저에서 지원 합니다.</em>
	</section>
	<!-- //지원 브라우저 -->
</article>
</body>
</html>