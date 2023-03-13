function tagiShortcuts(original) {
	return () => {
		function goToLink (selector) {
			if (! KB.modal.isOpen()) {
				var element = KB.find(selector);

				if (element !== null) {
					window.location = element.attr('href');
				}
			}
		}

		original();

		KB.onKey('Home', function () {
			window.location = '/';
		});

		KB.onKey('v+a', function () {
			window.location = '/bigboard';
		});

		KB.onKey('v+t', function () {
			if (! KB.modal.isOpen()) {
				var reg = /\/user\/show\/(\d+)/;
				var html = document.documentElement.innerHTML;
				var match = html.match(reg);
				if (match) {
					var userId = match[1];
					window.location = '/dashboard/' + userId + '/tasks';
				}
			}
		});

		KB.onKey('a+a', function () {
			if (! KB.modal.isOpen()) {
				var projectId = document.getElementById('form-project_id');
				if (projectId != null) {
					var projectId = projectId.value;
					KB.modal.open('/analytics/tasks/' + projectId, 'large', false);
				}
			}
		});

	};
}

KB.keyboardShortcuts = tagiShortcuts(KB.keyboardShortcuts);
