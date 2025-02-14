<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>महासागर समाचार</title>

			<link href="<?= BASE_URL ?>web/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/animate.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/owl.carousel.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/owl.theme.default.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/normalize.css" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/slicknav.min.css" rel="stylesheet" type="text/css" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
			
			<!--/*
			*
			*
			* Edit Delete button color main-header.. main.css(1733)
			*
			*
			*/ -->
			<style>
				.comment-form input {
					border-radius: 10px;
					border: 1px solid #00ffe7;
				}

				.comment-show-btn{
					width: 120px;
					box-shadow: 1px 1px 10px #74f8ff;
					border-radius: 20px;
					height: 30px;
					margin-right: 20px;
				}

				.btn-info{
					--bs-btn-bg: #d8f8ff;
				}
				.btn-info:hover{
					--bs-btn-bg: #00d0ff;
				}
				.btn-danger{
					--bs-btn-color: #ff0000;
					--bs-btn-bg: #dedede;
				}
				.main-header{
					height: 120px;
				}
			</style>
			<!--/*
			*
			*
			* Categories Dropdown..
			*
			*
			*/ -->
			<style>
				.item-current {
					position: relative;
				}

				.dropdown{
					border: 2px solid red;
				}

				.item-current .dropdown {
					display: none;
					position:absolute;
					top: 100%; 
					left: 0;
					background-color: #fff;
					border: 2px solid rgb(81, 1, 1);
					border-radius: 10px;
					list-style: none;
					padding: 0;
					margin: 0;
					z-index: 1000;
					width: 160px; 
				}

				.item-current .dropdown li {
					padding: 10px;
					margin: 0; 
				}

				.item-current .dropdown li a {
					text-decoration: none;
					color: #333;
					display: block;
					padding: 5px 10px;
					font-size: 15px;
				}

				.item-current .dropdown li a:hover {
					background-color: #f0f0f0;
					color:rgb(255, 103, 79);
					border-radius: 30px;
				}

				.item-current:hover .dropdown {
					display: block;
				}
			</style>
			<!-- /*
			*
			*
			*
			* Recent pages style.. 
			*
			*
			*/ -->
			<style>
				.alith_post_thumb img {
					border: 1px solid rgb(2, 2, 198);
					border-radius: 7px;
				}

				.recent-page-btn {
					width: 100%;
					height: 100%;
					position: absolute;
					top: 0px;
					transition: all 1s;
				}

				.recent-page-btn:hover {
					border-radius: 10px;
					background: #ff00004d;
				}

				.RecentPageView{
					position: absolute;
					top: 50px;
					right: 180px;
					width: 25px;
					height: 25px;
					box-shadow: 0px 0px 6px rgb(154, 119, 119);
					border-radius: 100%;
					overflow: hidden;
					transition: all 0.5s;
				}

				.RecentPageView:hover{
					box-shadow: rgba(4, 0, 255, 0.844) 0px 2px 4px 0px, rgba(0, 225, 255, 0.844) 0px 2px 16px 0px;
				}

				#RecentPageEdit {
					position: absolute;
					top: 50px;
					right: 130px;
					width: 25px;
					height: 25px;
					box-shadow: 0px 0px 6px rgb(154, 119, 119);
					border-radius: 100%;
					overflow: hidden;
					transition: all 0.5s;
				}

				#RecentPageEdit:hover {
					box-shadow: rgba(4, 0, 255, 0.844) 0px 2px 4px 0px, rgba(0, 225, 255, 0.844) 0px 2px 16px 0px;
				}

				/* edit btn */
				.addImgBtn {
					background-color: white;
					height: 100%;
					width: 100%;
				}

				/* delete image */
				#RecentPagedelete {
					position: absolute;
					top: 50px;
					right: 80px;
					width: 25px;
					height: 25px;
					border-radius: 100%;
					box-shadow: 0px 0px 6px rgb(154, 119, 119);
					overflow: hidden;
					transition: all 0.5s;
				}

				#RecentPagedelete:hover {
					box-shadow: rgba(4, 0, 255, 0.844) 0px 2px 4px 0px, rgba(0, 225, 255, 0.844) 0px 2px 16px 0px;
				}
			</style>
		<!-- /*
			*
			*
			*
			* Site CSS.. 
			*
			*
			*/ -->
			<link href="<?= BASE_URL ?>web/css/main.css?v=2.0" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />
			<link href="<?= BASE_URL ?>web/css/custom.css" rel="stylesheet" type="text/css" />
		<!-- /*
			*
			*
			*
			* Banner style.. 
			*
			*
			*/ -->
			<style>
				.header-style {
					width: 100%;
					border-radius: 5px;
					height: 100%;
					display: flex;
					align-items: center;
					justify-content: center;
				}

				.upload-container {
					border: 2px dashed #ccc;
					width: 180px;
					height: 50px;
					background-color: red;
					border-radius: 100px;
					box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset, rgba(44, 187, 99, .15) 0 1px 2px, rgba(44, 187, 99, .15) 0 2px 4px, rgba(44, 187, 99, .15) 0 4px 8px, rgba(44, 187, 99, .15) 0 8px 16px, rgba(44, 187, 99, .15) 0 16px 32px;
					color: white;
					transition: all 250ms;
					font-size: 16px;
					font-weight: bold;
					text-align: center;
					line-height: 50px;
					border-radius: 50px;
					position: relative;
					cursor: pointer;
					overflow: hidden;
				}

				.upload-container input[type="file"] {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					opacity: 0;
					cursor: pointer;
				}

				.upload-container.submitting {
					pointer-events: none;
					opacity: 0.6;
				}

				/* image Edit */
				#bannerAdImageUpload {
					position: absolute; 
					top: 25px;
					right: 50px;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					overflow: hidden;
					box-shadow: rgba(82, 97, 98, 0.84) 0px 2px 4px 0px, rgba(66, 66, 80, 0.84) 0px 2px 16px 0px;
					transition: all 1s;
				}

				#bannerAdImageUpload:hover {
					box-shadow: rgba(39, 48, 49, 0.84) 0px 2px 4px 0px, rgba(212, 211, 249, 0.84) 0px 2px 16px 0px;
				}

				/* Button */
				.adImgBtn {
					background-color: white;
					text-align: center;
					padding-left: 1px;
					padding-top: 4px;
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
				}

				/* Input */
				.addImgInput {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
					opacity: 0;
				}

				/* image Delete */
				#bannerAdImagedelete {
					position: absolute; 
					top: 25px;
					right: 5px;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					overflow: hidden;
					box-shadow: rgba(82, 97, 98, 0.84) 0px 2px 4px 0px, rgba(66, 66, 80, 0.84) 0px 2px 16px 0px;
					transition: all 1s;
				}

				#bannerAdImagedelete:hover {
					box-shadow: rgba(39, 48, 49, 0.84) 0px 2px 4px 0px, rgba(212, 211, 249, 0.84) 0px 2px 16px 0px;
				}

				/* Delete Button */
				.deleteImgBtn {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
					background: white;
				}

				/* Delete Input */
				.deleteImgInput {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
					opacity: 0;
				}

				.bannerBtn {
					margin-left: 50px;
					width: 200px;
					height: 42px;
					padding: 0.6em 2em;
					border: none;
					outline: none;
					color: rgb(255, 255, 255);
					background: #111;
					cursor: pointer;
					position: relative;
					z-index: 0;
					border-radius: 10px;
					user-select: none;
					-webkit-user-select: none;
					touch-action: manipulation;
				}

				.bannerBtn:before {
					content: "";
					background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
					position: absolute;
					top: -2px;
					left: -2px;
					background-size: 400%;
					z-index: -1;
					filter: blur(5px);
					-webkit-filter: blur(5px);
					width: calc(100% + 4px);
					height: calc(100% + 4px);
					animation: glowing-button-85 20s linear infinite;
					transition: opacity 0.3s ease-in-out;
					border-radius: 10px;
				}

				@keyframes glowing-button-85 {
					0% {
						background-position: 0 0;
					}

					50% {
						background-position: 400% 0;
					}

					100% {
						background-position: 0 0;
					}
				}

				.bannerBtn:after {
					z-index: -1;
					content: "";
					position: absolute;
					width: 100%;
					height: 100%;
					background: #222;
					left: 0;
					top: 0;
					border-radius: 10px;
				}
			</style>
		<!-- /*
			*
			*
			*
			* Front style.. 
			*
			*
			*/ -->
			<style>
				.image-card-btn {
					width: 100%;
					border-radius: 5px;
					height: 100%;
					display: flex;
					align-items: center;
					justify-content: center;
				}

				/* image Edit */
				#frontImageUpload {
					position: relative;
					display: flex;
					align-items: center;
					justify-content: center;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					overflow: hidden;
					box-shadow: rgba(0, 255, 187, 0.844) 0px 2px 4px 0px, rgba(16, 3, 152, 0.84) 0px 2px 16px 0px;
					transition: all 1s;
				}

				#frontImageUpload:hover {
					box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
				}

				/* Button */
				.uploadFrontImgBtn {
					background-color: white;
					text-align: center;
					padding-left: 1px;
					padding-top: 4px;
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
				}

				/* Input */
				.addFrontImgInput {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
					opacity: 0;
				}

				.frontDeleteImageBtn {
					position: relative;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					box-shadow: rgba(0, 255, 187, 0.844) 0px 2px 4px 0px, rgba(16, 3, 152, 0.84) 0px 2px 16px 0px;
					overflow: hidden;
					transition: all 1s;
				}

				.frontDeleteImageBtn:hover {
					box-shadow: rgba(4, 0, 255, 0.844) 0px 2px 4px 0px, rgba(0, 225, 255, 0.844) 0px 2px 16px 0px;
				}

				/* Delete Button */
				.frontdeleteImgBtn {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
				}
			</style>
		<!-- /*
			*
			*
			*
			* Front Add style.. 
			*
			*
			*/ -->
			<style>

				.frontImageAdd input[type="file"] {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					opacity: 0;
					cursor: pointer;
				}

				.frontImageAdd.submitting {
					pointer-events: none;
					opacity: 0.6;
				}

				/* image Edit */
				#bannerAdImageUpload {
					position: absolute; 
					top: 25px;
					right: 50px;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					overflow: hidden;
					box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
					transition: all 1s;
				}

				#bannerAdImageUpload:hover {
					box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
				}

				/* Button */
				.adImgBtn {
					background-color: white;
					text-align: center;
					padding-left: 1px;
					padding-top: 4px;
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
				}

				/* Input */
				.addImgInput {
					position: absolute;
					top: 0;
					height: 100%;
					width: 100%;
					opacity: 0;
				}

				/* image Delete */
				#bannerAdImagedelete {
					position: absolute; 
					top: 25px;
					right: 5px;
					width: 30px;
					height: 30px;
					border-radius: 100%;
					overflow: hidden;
					box-shadow: rgba(0, 225, 255, 0.844) 0px 2px 4px 0px, rgba(4, 0, 255, 0.844) 0px 2px 16px 0px;
					transition: all 1s;
				}
			</style>
		<!-- /*
			*
			*
			*
			* Text editor style.. 
			*
			*
			*/ -->
			<!-- <link href="<?= BASE_URL ?>web/css/text_editor.css" rel="stylesheet" type="text/css" /> -->
			<style>
				@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

				.modal-backdrop {
					z-index: 1040 !important;
				}

				.modal {
					z-index: 1050 !important;
				}

				.modal-dialog {
					max-width: 900px;
				}

				.modal-content {
					border-radius: 10px;
					padding: 10px;
				}
				li {
					margin-left: 16px;
				}

				a {
					cursor: pointer;
				}

				.aj-button{
					border: 2px solid #ddd;
					border-radius: 6px;
					cursor: pointer;
					width: 80px;
					height: 40px;
					display: flex;
					align-items: center;
					justify-content: center;
					font-size: 18px;
					background-color: white;
					margin-top: 5px;
				}

				.text-editor-container {
					max-width: 100%;
					width: 100vw;
					background: #fff;
					border-radius: 8px;
					overflow: hidden;
				}

				.text-editor-toolbar {
					padding: 16px;
					background: #eee;
				}

				.text-editor-toolbar .text-editor-head {
					display: flex;
					grid-gap: 10px;
					margin-bottom: 16px;
					flex-wrap: wrap;
				}

				.text-editor-toolbar .text-editor-head > input {
					max-width: 100px;
					padding: 6px 10px;
					border-radius: 6px;
					border: 2px solid #ddd;
					outline: none;
				}

				.text-editor-toolbar .text-editor-head select {
					background: #fff;
					border: 2px solid #fff;
					outline: none;
					cursor: pointer;
				}

				.text-editor-toolbar .text-editor-head .animation {
					padding: 7px;
					border-radius: 50px;
				}

				.text-editor-toolbar .text-editor-head .color {
					background: #fff;
					border: 1px solid #fff;
					outline: none;
					cursor: pointer;
					grid-gap: 6px;
					padding: 0 10px;
					display: flex;
					align-items: center;
					justify-content: center;
					width: 140px;
					color: black;
				}

				.text-editor-toolbar .text-editor-head .color span {
					font-size: 14px;
				}

				.text-editor-toolbar .text-editor-head .color input {
					border: none;
					padding: 0;
					width: 26px;
					height: 26px;
					background: #fff;
					cursor: pointer;
				}

				.text-editor-toolbar .text-editor-head .color input::-moz-color-swatch {
					width: 20px;
					height: 20px;
					border: none;
					border-radius: 50%;
				}

				/* Ensuring Buttons Align Properly */
				.text-editor-toolbar .btn-toolbar {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
					justify-content: flex-start;
					gap: 10px;
				}

				.text-editor-toolbar .btn-toolbar button {
					background: #fff;
					border: 2px solid #ddd;
					border-radius: 6px;
					cursor: pointer;
					width: 40px;
					height: 40px;
					display: flex;
					align-items: center;
					justify-content: center;
					font-size: 18px;
				}

				.text-editor-toolbar .btn-toolbar button:hover {
					background: #f3f3f3;
				}

				/* Text Editor Content Area - Ensuring It Doesn't Disappear */
				#text-editor-content {
					padding: 16px;
					outline: none;
					min-height: 200px;
					max-height: 50vh;
					overflow: auto;
					border: 1px solid #ccc;
					border-radius: 5px;
					background: #fff;
					color: black;
				}

				#text-editor-content:focus {
					box-shadow: inset 1px 1px 7px rgba(130, 130, 130, 0.2), inset -1px -1px 7px rgba(130, 130, 130, 0.2);
				}

				#show-code[data-active="true"] {
					background: #eee;
				}

				#text-editor-content img {
					max-width: 50%;
				}

			</style>
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					const content = document.getElementById("text-editor-content");
					const showCode = document.getElementById("show-code");
					const filename = document.getElementById("filename");

					if (content) {
						content.addEventListener("mouseenter", function () {
							const links = content.querySelectorAll("a");
							links.forEach((link) => {
								link.addEventListener("mouseenter", function () {
									content.setAttribute("contenteditable", false);
									link.target = "_blank";
								});
								link.addEventListener("mouseleave", function () {
									content.setAttribute("contenteditable", true);
								});
							});
						});

						let active = false;
						if (showCode) {
							showCode.addEventListener("click", function () {
								active = !active;
								showCode.dataset.active = active;
								if (active) {
									content.textContent = content.innerHTML; // Show HTML as plain text
									content.style.whiteSpace = "pre-wrap";  // Maintain formatting
									content.setAttribute("contenteditable", true);
								} else {
									content.innerHTML = content.textContent;
									content.setAttribute("contenteditable", true);
								}
							});
						}
					} else {
						console.error("Error: Element with ID 'text-editor-content' not found!");
					}

					function insertImage(input) {
						const reader = new FileReader();
						
						reader.onload = function(e) {
							const imageUrl = e.target.result;

							const imageHTML = `
								<span class="image-container">
									<img src="${imageUrl}" alt="Uploaded Image" style="max-width: 100%; height: auto; display: block;">
								</span>
							`;
							const editorContent = document.getElementById('text-editor-content');
							editorContent.innerHTML += imageHTML;

							const range = document.createRange();
							const selection = window.getSelection();
							range.setStartAfter(editorContent.lastChild);
							range.collapse(true);
							selection.removeAllRanges();
							selection.addRange(range);
						};

						if (input.files && input.files[0]) {
							reader.readAsDataURL(input.files[0]);
						}
					}

					function addLink() {
						const url = prompt("Insert URL");
						if (url) {
							formatDoc("createLink", url);
						}
					}

					function fileHandle(value) {
						if (!content) return;

						if (value === "new") {
							content.innerHTML = "";
							filename.value = "untitled";
						} else if (value === "txt") {
							const blob = new Blob([content.innerText], { type: "text/plain" });
							const url = URL.createObjectURL(blob);
							const link = document.createElement("a");
							link.href = url;
							link.download = `${filename.value}.txt`;
							link.click();
							URL.revokeObjectURL(url);
						} else if (value === "pdf") {
							html2pdf().from(content).save(filename.value);
						}
					}

					window.insertImage = insertImage;
					window.addLink = addLink;
					window.fileHandle = fileHandle;
				});

				function insertTable() {
					const rows = prompt('Enter the number of rows:', 2);
					const cols = prompt('Enter the number of columns:', 3);
					
					if (rows && cols) {
						let table = '<table border="1" style="width: 100%; border-collapse: collapse;">';
						for (let i = 0; i < rows; i++) {
							table += '<tr>';
							for (let j = 0; j < cols; j++) {
								table += '<td>&nbsp;</td>';
							}
							table += '</tr>';
						}
						table += '</table>';
						
						document.execCommand('insertHTML', false, table);
					}
				}

				// Function to handle the text formatting (for example: bold, italic, etc.)
				function formatDoc(command, value = null) {
					document.execCommand(command, false, value);
				}

				// Function to add a link (could be expanded)
				function addLink() {
					const url = prompt('Enter the link URL:', 'http://');
					if (url) {
						document.execCommand('createLink', false, url);
					}
				}
			</script>

			<!-- editor -->
			<!-- <script src="<?= BASE_URL ?>web/js/text_editor.js"></script> -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
			<!-- Aj-editor -->
			<script>
				function getNewsIdFromURL() {
					let params = new URLSearchParams(window.location.search);
					return params.get("id") || "";
				}

				function ajTextEditor() {
					event.preventDefault();

					let content = document.getElementById("text-editor-content").innerHTML;
					let ajEditorId = getNewsIdFromURL(); 
					document.getElementById("ajEditorId").value = ajEditorId; 

					if (!ajEditorId) {
						alert("News ID missing in URL!");
						return;
					}

					let xhr = new XMLHttpRequest();
					xhr.open("POST", "includes/aj-TextEditor.php", true);
					xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

					xhr.onreadystatechange = function () {
						if (xhr.readyState === 4 && xhr.status === 200) {
							alert("Post saved successfully!");
							location.reload();
						}
					};

					xhr.send("news_id=" + encodeURIComponent(ajEditorId) + "&Cname=" + encodeURIComponent(content));
				}

				window.onload = function () {
					const ajEditorIdElement = document.getElementById("ajEditorId");
					if (ajEditorIdElement) {
						ajEditorIdElement.value = getNewsIdFromURL();
					} else {
						console.error("Element with ID 'ajEditorId' not found!");
					}
				};
			</script>
		<!-- /*
			*
			*
			*
			* Modernizer JS.. 
			*
			*
			*/ -->
			<script src="<?= BASE_URL ?>web/js/modernizr-3.5.0.min.js"></script>
			<link rel="icon" type="image/png" href="<?= BASE_URL ?>/favicon.ico">
		<!-- /*
			*
			*
			*
			* Recent pages hover show button.. 
			*
			*
			*
			*/ -->
			<script>
				document.addEventListener("DOMContentLoaded", function () {
					const recentPostContainers = document.querySelectorAll('.recent-page-btn');

					recentPostContainers.forEach(container => {
						const buttons = container.querySelectorAll('.RecentPageView, #RecentPageEdit, #RecentPagedelete');
						buttons.forEach(button => {
							button.style.visibility = 'hidden';
							button.style.transition = 'visibility 1s, transform 1s';
						});
						container.addEventListener('mouseover', function () {
							buttons.forEach(button => {
								button.style.visibility = 'visible';
								button.style.transform = 'scale(1.1)';
						});
					});
						container.addEventListener('mouseout', function () {
							buttons.forEach(button => {
								button.style.visibility = 'hidden';
								button.style.transform = 'scale(1)';
							});
						});
					});
				});
			</script>
		<!-- /*
			*
			*
			*
			* Preview image.. 
			*
			*
			*/ -->
			<script type="text/javascript">
				function previewImage(event) {
					var input = event.target;
					var image = document.getElementById('preview');
					if (input.files && input.files[0]) {
						var reader = new FileReader();
						reader.onload = function (e) {
							image.src = e.target.result;
						}
						reader.readAsDataURL(input.files[0]);
					}
				}
			</script>
		<!-- /*
			*
			*
			*
			* Header image.. 
			*
			*
			*/ -->
			<script>
				function handleBannerAdImg(event) {
					const form = document.getElementById('manageBannerAdImgForm');
					const container = document.querySelector('.upload-container');
					const spanContainer = document.querySelector('.upload-container span');

					container.classList.add('submitting');
					spanContainer.textContent = 'Submitting...';

					form.submit();
				}
			</script>
		<!-- /*
			*
			*
			*
			* Banner edit image.. 
			*
			*
			*/ -->
			<script>
				function handleBannerEditImg(event) {
					event.preventDefault();
					const form = document.getElementById('editBannerAdImgForm');
					const container = document.querySelector('#bannerAdImageUpload');
					const spanContainer = document.querySelector('#bannerAdImageUpload span');
					const fileInput = container.querySelector('input[type="file"]');

					if (!fileInput) {
						alert('File input element not found inside #bannerAdImageUpload.');
						return;
					}

					if (fileInput.files.length > 0) {
						container.classList.add('submitting');
						spanContainer.textContent = 'Submitting...';

						form.submit();
					} else {
						alert('Please select an image before submitting.');
					}
				}
			</script>
			<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- /*
			*
			*
			*
			* Modal Styles..
			*
			*
			*/ -->
			<!-- <link href="<?= BASE_URL ?>web/css/popUpModal.css" rel="stylesheet" type="text/css" /> -->
		<!-- /*
			*
			*
			*
			* Carasoul Add image..
			*
			*
			*/ -->
			<script>
				function handleFrontAddImg(event) {
					const form = document.getElementById('frontAddImageForm');
					const formData = new FormData(form); 

					const xhr = new XMLHttpRequest();
					xhr.open('POST', 'includes/handleCarasoul_requests.php', true);

					xhr.onload = function () {
						if (xhr.status === 200) {
							try {
								const response = JSON.parse(xhr.responseText);
								if (response.status) {
									Swal.fire({
										icon: 'success',
										title: 'Success',
										text: response.message || 'Image uploaded successfully.',
									});
								} else {
									Swal.fire({
										icon: 'error',
										title: 'Error',
										text: 'Error: ' + response.message,
									});
								}
							} catch (error) {
								console.error('Error parsing JSON:', error, xhr.responseText);
								Swal.fire({
									icon: 'error',
									title: 'Unexpected Error',
									text: 'Unexpected server response.',
								});
							}
						} else {
							console.error('Request failed with status:', xhr.status);
							Swal.fire({
								icon: 'error',
								title: 'Request Failed',
								text: 'Failed to process the request. Please try again.',
							});
						}
					};

					xhr.onerror = function () {
						Swal.fire({
							icon: 'error',
							title: 'Network Error',
							text: 'A network error occurred. Please check your connection.',
						});
					};

					xhr.send(formData);
				}
			</script>
		<!--/*
			*
			*
			*
			* Carasoul edit image.. 
			*
			*
			*/-->
			<script>
				function handleFrontEditImg(event, targetFormId, ms_id) {
					const fileInput = event.target;
					const form = document.getElementById(targetFormId);

					if (fileInput.files.length > 0) {
						Swal.fire({
							title: "Are you sure?",
							text: "Do you want to update this image?",
							icon: "warning",
							showCancelButton: true,
							confirmButtonColor: "#3085d6",
							cancelButtonColor: "#d33",
							confirmButtonText: "Yes, update it!",
						}).then((result) => {
							if (result.isConfirmed) {
								const formData = new FormData(form);
								formData.append("ms_id", ms_id);

								const xhr = new XMLHttpRequest();
								xhr.open("POST", "includes/handleCarasoul_requests.php", true);

								xhr.onload = function () {
									if (xhr.status === 200) {
										try {
											const response = JSON.parse(xhr.responseText);
											if (response.status) {
												Swal.fire("Updated!", response.message || "Image updated successfully.", "success");
											} else {
												Swal.fire("Error!", response.message || "Failed to update the image.", "error");
											}
										} catch (error) {
											console.error("Error parsing JSON:", error, xhr.responseText);
											Swal.fire("Error!", "Unexpected server response.", "error");
										}
									} else {
										console.error("Upload failed with status:", xhr.status);
										Swal.fire("Error!", "Failed to upload the image. Please try again.", "error");
									}
								};

								xhr.onerror = function () {
									Swal.fire("Error!", "A network error occurred. Please check your connection.", "error");
								};

								xhr.send(formData);
							}
						});
					} else {
						Swal.fire({
							icon: "warning",
							title: "No Image Selected",
							text: "Please select an image before submitting.",
						});
					}
				}
			</script>
		<!--/*
			*
			*
			*
			* Carasoul Delete image..
			*
			*
			*/ -->
			<script>
				function deleteCarousalImage(id) {
					console.log("Deleting image by id:", id);
					const imageContainer = document.getElementById("ci" + id);

					if (!imageContainer) {
						Swal.fire({
							icon: "error",
							title: "Error",
							text: "Image not found!",
						});
						return;
					}

					Swal.fire({
						title: "Are you sure?",
						text: "You won't be able to revert this!",
						icon: "warning",
						showCancelButton: true,
						confirmButtonColor: "#d33",
						cancelButtonColor: "#3085d6",
						confirmButtonText: "Yes, delete it!",
					}).then((result) => {
						if (result.isConfirmed) {
							$.ajax({
								url: "includes/carasouldelete.php",
								type: "POST",
								data: { ms_id: id },
								dataType: "json",
								success: function (data) {
									if (data.status === "success") {
										imageContainer.remove();
										Swal.fire("Deleted!", "Image has been deleted.", "success");
									} else {
										Swal.fire("Error!", data.message || "Failed to delete image!", "error");
									}
								},
								error: function () {
									Swal.fire("Error!", "An error occurred while deleting the image!", "error");
								},
							});
						}
					});
				}
			</script>
		<!--/*
			*
			*
			*
			* news views..
			*
			*
			*/ -->
			<Script>
				document.addEventListener("DOMContentLoaded", function () {
					let urlParams = new URLSearchParams(window.location.search);
					let newsId = urlParams.get('id');

					if (newsId) {
						fetch(`includes/update_views.php?id=${newsId}`);
					}
				});
			</Script>
		<!--/*
			*
			*
			*
			* Edit post..
			*
			*
			*/ -->
			<script>
				// Edit category 
				function updateCategory(categoryId) {
					var ajEditorId = "<?= isset($_GET['id']) ? $_GET['id'] : ''; ?>";

					$.ajax({
						url: 'includes/edit_post.php',
						type: 'POST',
						data: { category_id: categoryId, news_id: ajEditorId },
						dataType: "json",
						success: function(response) {
							console.log("AJAX Success:", response);
							if (response.status === "success") {
								Swal.fire({
									icon: "success",
									title: "Success",
									text: response.message,
								});
							} else {
								Swal.fire({
									icon: "error",
									title: "Error",
									text: response.message,
								});
							}
						},
						error: function(xhr, status, error) {
							console.log("AJAX Error Response:", xhr.responseText);
							Swal.fire({
								icon: "error",
								title: "AJAX Error",
								html: `<pre>${xhr.responseText}</pre>`,
							});
						}
					});
				}
			</script>
			<script>
				// Edit image
				function updateNewsImage(input, ajEditorId) {
					var file = input.files[0]; // User ke selected file ko lo

					if (!file) {
						Swal.fire({
							icon: "error",
							title: "Error",
							text: "Please select an image file.",
						});
						return;
					}

					var formData = new FormData();
					formData.append("image", file);
					formData.append("news_id", ajEditorId);

					$.ajax({
						url: "includes/upload_news_image.php",
						type: "POST",
						data: formData,
						contentType: false,
						processData: false,
						dataType: "json",
						success: function (response) {
							if (response.status === "success") {
								Swal.fire({
									icon: "success",
									title: "Success",
									text: response.message,
								});

								// Image ko update karo bina page reload kiye
								$("#newsImage").attr("src", response.image_url);
							} else {
								Swal.fire({
									icon: "error",
									title: "Error",
									text: response.message,
								});
							}
						},
						error: function (xhr, status, error) {
							console.log("AJAX Error:", xhr.responseText);
							Swal.fire({
								icon: "error",
								title: "AJAX Error",
								html: `<pre>${xhr.responseText}</pre>`,
							});
						}
					});
				}
			</script>
			<script>
				function openEditModal(ajEditorId, title, author, content) {
					document.getElementById("newsTitle").value = title;
					document.getElementById("authorName").value = author;
					document.getElementById("newsContent").value = content;

					var form = document.getElementById("editForm");
					var existingHiddenInput = form.querySelector("input[name='ajEditorId']");
					if (existingHiddenInput) {
						existingHiddenInput.value = ajEditorId;
					} else {
						var hiddenInput = document.createElement("input");
						hiddenInput.type = "hidden";
						hiddenInput.name = "ajEditorId";
						hiddenInput.value = ajEditorId;
						form.appendChild(hiddenInput);
					}

					$('#editModal').modal('show');
				}

				document.addEventListener("DOMContentLoaded", function() {
					document.querySelectorAll('.btn-edit').forEach(button => {
						button.addEventListener('click', function() {
							var ajEditorId = this.getAttribute('data-id');
							var title = this.getAttribute('data-title');
							var author = this.getAttribute('data-author');
							var content = this.getAttribute('data-description');

							openEditModal(ajEditorId, title, author, content);
						});
					});
				});
			</script>
			<script>
				document.addEventListener("DOMContentLoaded", function() {
					document.getElementById("editForm").addEventListener("submit", function(event) {
						event.preventDefault(); 

						let formData = new FormData(this);

						fetch("includes/update_news_title.php", {
							method: "POST",
							body: formData
						})
						.then(response => response.json())
						.then(data => {
							if (data.success) {
								Swal.fire({
									icon: "success",
									title: "Updated!",
									text: data.message,
									timer: 2000,
									showConfirmButton: false
								}).then(() => {
									location.reload(); // Page refresh karega taaki updated data dikhe
								});
							} else {
								Swal.fire({
									icon: "error",
									title: "Error!",
									text: data.message
								});
							}
						})
						.catch(error => {
							console.error("Error:", error);
						});
					});
				});
			</script>
		<!--/*
			*
			*
			*
			* Aprove and delete section..
			*
			*
			*/ -->
			<script>
				function approveComment(commentId) {
					fetch("includes/comment_action.php", {
						method: "POST",
						headers: { "Content-Type": "application/x-www-form-urlencoded" },
						body: "action=approve&id=" + commentId
					}).then(() => location.reload());
				}

				function deleteComment(commentId) {
					fetch("includes/comment_action.php", {
						method: "POST",
						headers: { "Content-Type": "application/x-www-form-urlencoded" },
						body: "action=delete&id=" + commentId
					}).then(() => location.reload());
				}
			</script>
			

		</head>

<body>
	<div id="wrapper">
		<div id="sidebar-wrapper">
			<div class="sidebar-inner">
				<div class="off-canvas-close"><span>CLOSE</span></div>
				<div class="sidebar-widget">
					<div class="widget-title-cover">
						<h4 class="widget-title"><span>header-line-285 Articles</span></h4>
					</div>
					<ul class="menu" id="sidebar-menu">
						<li class="menu-item"><a href="#">Trending (header.php 852)</a></li>
						<li class="menu-item menu-item-has-children"><a href="#">Thinking</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="#">Home &amp; Living</a></li>
								<li class="menu-item menu-item-has-children"><a href="#">Lifestyle</a>
									<ul class="sub-menu">
										<li class="menu-item"><a href="#">Travel</a></li>
										<li class="menu-item"><a href="#">Gardening</a></li>
										<li class="menu-item"><a href="#">Inspirations</a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="#">Inspirations</a></li>
								<li class="menu-item"><a href="#">Gardening</a></li>
							</ul>
						</li>
						<li class="menu-item menu-item-has-children"><a href="#">Inspirations</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="#">House &amp; Living</a></li>
								<li class="menu-item"><a href="#">Travel</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="#">Contact</a></li>
					</ul>
				</div>

				<div class="sidebar-widget">
					<div class="widget-title-cover">
						<h4 class="widget-title"><span>Trending 879 (header.php)</span></h4>
					</div>
					<div class="latest_style_2">
						<div class="latest_style_2_item_first">
							<figure class="alith_post_thumb_big">
								<span class="post_meta_categories_label">Iligal, Blog</span>
								<button>hey</button>
								<a href='/single'><img src="<?= BASE_URL ?>web/images/thumb-large.jpg" alt="" /></a>
							</figure>
							<h3 class="alith_post_title">
								<a href='/single'><strong>Nor again is there anyone who loves or pursues or desires to
										obtain</strong></a>
							</h3>
						</div>
						<div class="latest_style_2_item">
							<figure class="alith_news_img"><a href='/single'><img
										src="<?= BASE_URL ?>web/images/thumb-square.png" alt="" /></a></figure>
							<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad m5m veniam quis
								</a></h3>
							<div class="post_meta">
								<p class="meta"><span>2 Sep, 2023</span> <span>268 views</span></p>
							</div>
						</div>
						<div class="latest_style_2_item">
							<figure class="alith_news_img"><a href='/single'><img
										src="<?= BASE_URL ?>web/images/thumb-square.png" alt="" /></a></figure>
							<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
							<div class="post_meta">
								<span class="meta_date">18 Sep, 2023</span>
							</div>
						</div>
						<div class="latest_style_2_item">
							<figure class="alith_news_img"><a href='/single'><img
										src="<?= BASE_URL ?>web/images/thumb-square.png" alt="" /></a></figure>
							<h3 class="alith_post_title"><a href='/single'>Magna aliqua ut enim ad minim veniam</a></h3>
							<div class="post_meta">
								<span class="meta_date">18 Sep, 2023</span>
							</div>
						</div>
					</div>
				</div> <!--.sidebar-widget-->
				<div class="sidebar-widget">
					<div class="widget-title-cover">
						<h4 class="widget-title"><span>Advertise</span></h4>
					</div>
					<div class="banner-adv">
						<div class="adv-thumb">
							<a href="#">
								<img class="aligncenter" alt="img1" src="<?= BASE_URL ?>web/images/ads.jpg">
							</a>
						</div>
					</div>
				</div> <!--.sidebar-widget-->
			</div>
		</div>
		<!--#sidebar-wrapper-->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="container">
					<div class="top_bar margin-15">
						<div class="row">
							<div class="col-md-6 col-sm-12 time">
								<div class="off-canvas-toggle" id="off-canvas-toggle"><span></span>
									<p class="sidebar-open">MORE</p>
								</div>
								<i class="fa fa-clock-o " id="currentdate"></i><span> <?= date('l, j F Y') ?></span>
							</div>
							<div class="col-md-6 col-sm-12 social">
								<ul>
									<li><a href=""><i class="fa fa-facebook"></i></a></li>
									<li><a href=""><i class="fa fa-twitter"></i></a></li>
									<li><a href=""><i class="fa fa-google-plus"></i></a></li>
								</ul>
								<div class="top-search">
									<i class="fa fa-search"></i><span>SEARCH</span>
								</div>
								<div class="top-search-form">
									<form action="#" class="search-form" method="get" role="search">
										<label>
											<span class="screen-reader-text">Search for:</span>
											<input type="search" name="s" value="" placeholder="Search …" class="search-field">
										</label>
										<button type="submit" class="search-submit">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
												<path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
											</svg>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-3 header">
							<h1 class="logo"><a href=''><img src="<?= BASE_URL ?>/logo.png" alt=""></a></h1>
							<!-- <p class="tagline">NEWSPAPER / MAGAZINE / PUBLISHER</p> -->
						</div>
						<div class="col-12 col-md-9 header p-0 py-md-3">
							<div class="col-3 col-md-12 p-0 py-md-1 position-relative header-style">
								<?php
								$sqlImage = "SELECT id, meta_value FROM mhs_meta WHERE meta_key = 'banner_ad_img'";
								$resultImage = mysqli_query($db, $sqlImage) or die("Query Failed: " . mysqli_error($db));

								if (mysqli_num_rows($resultImage) > 0) {
									while ($row = mysqli_fetch_assoc($resultImage)) {
										if (!empty($row['meta_value'])) {
											?>
											<figure class="alith_post_thumb">
												<a href='/singleid=<?php echo $row['id']; ?>'>
													<img class="w-100" src="<?= NEWS_UPLOAD_URL . $row['meta_value']; ?>"
														alt="Banner Image">
												</a>
											</figure>
											<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
												<!-- Edit Form -->
												<form id="editBannerAdImgForm" action="" method="POST" enctype="multipart/form-data">
													<div id="bannerAdImageUpload">
														<span class="adImgBtn">
															<i class="fa fa-edit" style="cursor: pointer;"></i>
														</span>
														<input type="file" id="UpdateNewsPostImage" name="bannerEditImg" class="addImgInput"
															onchange="handleBannerEditImg(event)" />
													</div>
													<input type="hidden" name="form-name" value="bannereditimg" />
												</form>
												<!-- Delete Form -->
												<div id="bannerAdImagedelete">
													<a href='<?= SITE_URL ?>banneraddelete?id=<?php echo $row["id"]; ?>'>
														<button class="deleteImgBtn"><i class="fa fa-trash"></i></button>
													</a>
												</div>
											<?php } ?>
											<?php
										} else {
											?>
											<!-- Upload Form -->
											<form id="manageBannerAdImgForm" action="" method="POST" enctype="multipart/form-data">
												<div class="upload-container">
													<span>+ Upload Ad Image</span>
													<input type="file" name="adImage" onchange="handleBannerAdImg(event)" />
												</div>
												<input type="hidden" name="form-name" value="bannerimg" />
											</form>
											<?php
										}
									}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-nav section_margin">
			<div class="container-fluid">
				<div class="container">
					<div class="row bg-white">
						<div class="col-12 col-md-12 main_nav_cover" id="nav">

							<ul id="main-menu">
								<li><a href="<?= SITE_URL ?>home">Home</a></li>
								<?php
									$sql = "SELECT * FROM main_categories WHERE post >= 1";
									$result = mysqli_query($db, $sql) or die("Query Failed.: category");

									if (mysqli_num_rows($result) > 0) {
										while ($row = $result->fetch_assoc()) {
											$categoryID = $row['cat_id'];
											$categoryName = $row['cat_name'];
											
											$categoryURL = SITE_URL . "category?cid=" . $categoryID;

											$activeClass = (isset($_GET['category_id']) && $_GET['category_id'] == $categoryID) ? 
												'class="active" style="background-color: #ffecec5c; border-radius:30px;"' : '';

											echo "<li $activeClass><a href=\"$categoryURL\">$categoryName</a></li>";
										}
									}
								?>
								<?php if (isset($_SESSION["user_id"])) { ?>
									<li><a href="<?php echo SITE_URL; ?>logout">Logout</a></li>
								<?php } else { ?>
									<li><a href="<?php echo SITE_URL; ?>admin-login">Login</a></li>
								<?php } ?>
								<?php if (isset($_SESSION["user_id"]) && isset($_SESSION["role"]) && $_SESSION["role"] == 1) { ?>
									<li><a href="<?php echo SITE_URL; ?>add">Add</a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	