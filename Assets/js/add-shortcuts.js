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
			window.location = '/bigboard?search=status%3Aopen';
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

		if (KB.exists('#task-view')) {
		    KB.onKey('t', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#addSpentTimeMenu').data('addurl'), 'small', false);
		        }
		    });
		    KB.onKey('S', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#subtaskHelperConvert').data('addurl'), 'small', false);
		        }
		    });
		    KB.onKey('g', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#subtaskHelperCombine').data('addurl'), 'small', false);
		        }
		    });
		    KB.onKey('E', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#subtaskHelperEditSubtask').data('addurl'), 'small', false);
		        }
		    });
		}

		KB.onKey('v+1', function () {
			window.location = '/addshortcuts/v?v=1';
		});
		KB.onKey('v+2', function () {
			window.location = '/addshortcuts/v?v=2';
		});
		KB.onKey('v+3', function () {
			window.location = '/addshortcuts/v?v=3';
		});
		KB.onKey('v+4', function () {
			window.location = '/addshortcuts/v?v=4';
		});
		KB.onKey('v+5', function () {
			window.location = '/addshortcuts/v?v=5';
		});
		KB.onKey('v+6', function () {
			window.location = '/addshortcuts/v?v=6';
		});
		KB.onKey('v+7', function () {
			window.location = '/addshortcuts/v?v=7';
		});
		KB.onKey('v+8', function () {
			window.location = '/addshortcuts/v?v=8';
		});
		KB.onKey('v+9', function () {
			window.location = '/addshortcuts/v?v=9';
		});
		KB.onKey('v+0', function () {
			window.location = '/addshortcuts/v?v=0';
		});
		KB.onKey('v+c', function () {
			window.location = '/addshortcuts/completedThisWeek';
		});

	};
}

KB.keyboardShortcuts = tagiShortcuts(KB.keyboardShortcuts);
