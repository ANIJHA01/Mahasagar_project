function handleSubmit() {
	// Get all editable divs with the class 'ajtxteditor'
	const editorDivs = document.querySelectorAll('.ajtxteditor');

	// Loop through each editor div
	editorDivs.forEach(editor => {
		// Find or create a hidden input field inside the editor
		let hiddenInput = editor.querySelector('input[type="hidden"]');
		if (!hiddenInput) {
			hiddenInput = document.createElement('input');
			hiddenInput.type = 'hidden';

			// Set the name attribute
			let inputName = editor.getAttribute('data-ffname') || `unique-name-${Date.now()}`;
			hiddenInput.name = inputName;

			// Append the hidden input to the editor
			editor.appendChild(hiddenInput);
		}

		// Set the inner HTML of the editor div to the hidden input value
		hiddenInput.value = editor.innerHTML;
	});

	return true; // Allow the form to submit
}

(()=>{

	function loadContentToEditors(url) {
		fetch(url)
		.then(response => {
			if (!response.ok) {
				throw new Error('Failed to load content');
			}
			return response.text(); // Parse response as text
		})
		.then(data => {
			// Get all divs with the class 'ajtxteditor'
			const editors = document.querySelectorAll('.ajtxteditor');

			editors.forEach((editor, index) => {
				// Replace the inner HTML with fetched content
				editor.innerHTML = data;

				// Determine the name for the hidden input
				let inputName = editor.getAttribute('data-ffname');
				if (!inputName) {
					inputName = `unique-name-${index + 1}`; // Generate a unique name if data-ffname is not present
				}

				// Create the hidden input element
				const hiddenInput = document.createElement('input');
				hiddenInput.type = 'hidden';
				hiddenInput.name = inputName;
				hiddenInput.value = ''; // Set default value (empty)

				// Append the hidden input field to the editor div
				editor.appendChild(hiddenInput);
			});
		})
		.catch(error => {
			console.error('Error fetching content:', error);
		});
	}
	
	loadContentToEditors('editor-section.html');
	
	/*

	function formatDoc(cmd, value=null) {
		if(value) {
			document.execCommand(cmd, false, value);
		} else {
			document.execCommand(cmd);
		}
	}

	function insertImage(input) {
		const file = input.files[0]; // Select the first file
		if (file) {
			const reader = new FileReader(); // FileReader to read the file
			reader.onload = function(e) {
				const image = document.createElement('img');
				image.src = e.target.result;
				image.style.maxWidth = '100%'; // Ensures image doesn't overflow
				document.getElementById('content').appendChild(image);
			}
			reader.readAsDataURL(file); // Read the file as Data URL
		}
	}

	function addLink() {
		const url = prompt('Insert url');
		formatDoc('createLink', url);
	}

	const content = document.getElementById('content');
	content.addEventListener('mouseenter', function () {
		const a = content.querySelectorAll('a');
		a.forEach(item=> {
			item.addEventListener('mouseenter', function () {
				content.setAttribute('contenteditable', false);
				item.target = '_blank';
			})
			item.addEventListener('mouseleave', function () {
				content.setAttribute('contenteditable', true);
			})
		})
	})

	let active = false;
	const showCode = document.getElementById('show-code');
	showCode.addEventListener('click', function () {
		showCode.dataset.active = !active;
		active = !active
		if(active) {
			content.textContent = content.innerHTML;
			content.setAttribute('contenteditable', false);
		} else {
			content.innerHTML = content.textContent;
			content.setAttribute('contenteditable', true);
		}
	})

	const filename = document.getElementById('filename');

	function fileHandle(value) {
		if(value === 'new') {
			content.innerHTML = '';
			filename.value = 'untitled';
		} else if(value === 'txt') {
			const blob = new Blob([content.innerText])
			const url = URL.createObjectURL(blob)
			const link = document.createElement('a');
			link.href = url;
			link.download = `${filename.value}.txt`;
			link.click();
		} else if(value === 'pdf') {
			html2pdf(content).save(filename.value);
		}
	} */
	
})();