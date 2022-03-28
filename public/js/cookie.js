// create cookie
    function createCookie(name, value, days) {
        console.log('WRITECOOKIE');
        let expires = "";
        let modal = document.getElementById("modal");
        let storage = window.localStorage;

        /**
         *   ## IMPORTANT! ##
         *   Cookie set to expire after 10 seconds
         *   for debugging.
         *   # NEEDS TO BE CHANGED #
         **/
        if (days) {
            let date = new Date();
            date.setTime(date.getTime() + (10 * 1000));
            console.log(date);
            expires = "; expires=" + date.toUTCString();
        }

        document.cookie = name + "=" + value + expires + "; path=/";
        storage.setItem(name, document.cookie);
		
		if (name === 'age_check') {
			modal.classList.remove('open');
			modal.classList.add('closed');
		}
    }

    // read from cookie * return null if not present *
    function requestCookie(name) {
        console.log('READCOOKIE');

        let ageCookie = localStorage.getItem(name);

        if (ageCookie == null) {
            console.log('No such cookie...');
        } else {
            console.log(ageCookie);
        }
    }

    /**
     *** ONLY FOR DEBUGGING PURPOSES ***
     *      Delete cookie
     */
    function deleteLocalStorage() {
        localStorage.clear();
    }

    function deleteCookie(name) {
        let ageCookie = localStorage.getItem(name);

        if (ageCookie == null) {
            console.log('No cookie saved');
        } else {
			localStorage.removeItem(ageCookie);
		}
    }
