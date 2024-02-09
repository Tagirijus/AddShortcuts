var addShortcutsPresets = $ADDSHORTCUTPRESETS$;

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

		KB.onKey('v+c', function () {
			window.location = '/addshortcuts/completedLastWeek';
		});

		KB.onKey('v+v+c', function () {
			window.location = '/addshortcuts/completedThisWeek';
		});

		KB.onKey('v+a', function () {
			console.log('/bigboard' + getCurrentFilterFromURI());
			window.location = '/bigboard' + getCurrentFilterFromURI();
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
		    KB.onKey('T', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#changeEstimatedTimeMenu').data('addurl'), 'small', false);
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
		    KB.onKey('D', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#subtaskHelperRemoveAll').data('addurl'), 'small', false);
		        }
		    });
		    KB.onKey('d', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(KB.find('#duplicateModDuplicateInstant').data('addurl'), 'small', false);
		        }
		    });
		    KB.onKey('C', function () {
		        if (! KB.modal.isOpen()) {
		            KB.modal.open(getLastCommentEditURL(), 'medium', false);
		        }
		    });
		    KB.onKey('y', function () {
		        if (! KB.modal.isOpen()) {
				    const commentSection = document.getElementById('comments');
				    commentSection.scrollIntoView({ behavior: 'smooth' });
		        }
		    });

		}

		KB.onKey('B', function () {
		    if (! KB.modal.isOpen()) {
		        KB.trigger('task.selector.open');
		    }
		});



		///////////////////////////////
		// dynamic presets from here //
		///////////////////////////////

		KB.onKey('A', function () {
	        if (! KB.modal.isOpen()) {
	            KB.modal.open(addAddShortcutPresetModal(), 'small', false);
	        }
    	});

    	Array.prototype.forEach.call(addShortcutsPresets, (preset, i) => {
    		if (preset['key'] != '') {
				KB.onKey(preset['key'], function () {
					window.location = preset['url'];
				});
    		}
    	});

    	KB.onKey('F', function () {
	        if (! KB.modal.isOpen()) {
	            KB.modal.open('/addshortcuts/shortcutPresetSelectModal', 'small', false);

	            var killTimeout = () => {
	            	clearInterval(myTimeout);
	            }
	            var myTimeout = setInterval(() => {
	            	if (KB.modal.isOpen()) {
	            		KB.trigger('shortcutpreset.selector.open');
	            		killTimeout();
	            	}
	            }, 1);
	        }
    	});

	};
}

KB.keyboardShortcuts = tagiShortcuts(KB.keyboardShortcuts);

function addAddShortcutPresetModal() {
	var uri = window.location.pathname + encodeURIComponent(window.location.search);
	var out = '/addshortcuts/addCustomShortcutModal?uri=' + uri;
	return out;
}

function getCurrentFilterFromURI() {
	var searchPos = window.location.href.indexOf("search");
	if (searchPos > -1) {
		return '?search=' + window.location.href.substr(
			searchPos + 7
		);
	} else {
		// fallback
		return '?search=status%3Aopen';
	}
}

function getTaskID() {
	const uri = window.location.href;
    const regex1 = /task_id=(\d+)/;
    var match = uri.match(regex1);
    if (match) {
        return parseInt(match[1]);
    }
    const regex2 = /\/task\/(\d+)/;
    var match = uri.match(regex2);
    if (match) {
        return parseInt(match[1]);
    }
    return null;
}

function findNewestCommentID() {
	let highestNumber = -1;
	const divs = document.querySelectorAll('div[id^="comment-"]');
	divs.forEach(div => {
	    const idNumber = parseInt(div.id.replace('comment-', ''));
	    if (idNumber > highestNumber) {
	        highestNumber = idNumber;
	    }
	});
	return highestNumber;
}

function getLastCommentEditURL() {
	return '/task/' + getTaskID() + '/comment/' + findNewestCommentID() + '/edit';
}