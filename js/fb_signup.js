  WSR = {};
WSR.Constants = {
	'FB_SCRIPT_SOURCE': '//connect.facebook.net/en_US/all.js',
	'FB_APP_ID': '583488575093518',
	'FB_PERMISSIONS': 'public_profile,email,user_hometown,publish_actions'
};

WSR.Facebook = {
    init: function() {
        var that = this,
            fbScript = WSR.Constants.FB_SCRIPT_SOURCE;

        this.initialized = false;
        this.userAvailable = false;
        this.loginAttempted = false;
        this.initAttempts = 0;
        this.initMaxAttempts = 5;
        this.linkStatusChecked = false;
		this.response = {};

        if ($('#fb-root').length === 0) {
            $('body').prepend('<div id="fb-root"></div>');
        }

        if (typeof FB === "undefined") {
            $.getScript(fbScript, function(script, textStatus, jqxhr) {
                if (jqxhr.status === 200 && FB) {
                    FB.init({
                        appId     : WSR.Constants.FB_APP_ID,
                        status    : true,
                        cookie    : true,
                        oauth    : true
                    });
                    that.initialized = true;
                }
            });
        }

        this.load();
    },

    load: function() {
        var that = this;
        
        if (this.initialized) {
            this.loginAttempted = false;
            FB.getLoginStatus(function(response){
                that.parseStatus(response);
            });
        } else {
            // re-attempt to connect if initialization is slow (e.g. delay loading FB script)
            if (this.initAttempts < this.initMaxAttempts) {
                this.initAttempts++;
                window.setTimeout(function(){
                    that.load();
                }, 100);
            }
        }
    },

    parseStatus: function(response) {
        if (response.status === 'connected') {
			this.response = response;
            this.userAvailable = true;
            this.checkLinkedAccountStatus();
        } else {
            if (!this.loginAttempted) {
                this.login();
            } else {
                // Auth error
            }
        }
    },

    login: function() {
        var that = this;

        if (!this.loginAttempted) {
            this.loginAttempted = true;

            FB.login(function(response){
                if (response.status === 'connected') {
                    // reset login attempts
                    this.loginAttempted = false;
                }

                that.parseStatus(response);
            }, {scope: WSR.Constants.FB_PERMISSIONS});
        }
    },

    logout: function() {
        FB.logout(function(response){
            //
        });
    },

    reset: function() {
        this.loginAttempted = false;
    },

    getAccessToken: function() {
        if (this.userAvailable) {
            return this.response.authResponse.userID;
        }

        return null;
    },

    getExpiresIn: function() {
        if (this.userAvailable) {
            return this.response.authResponse.expiresIn;
        }

        return null;
    },

    checkLinkedAccountStatus: function() {
		
        var that = this,
			accessToken = this.getAccessToken(),
            url = 'checkSignupStatus.cfm?accessToken=' + accessToken;

        if (!this.linkStatusChecked) {
            this.linkStatusChecked = true;
            $.post(url, {}, function(data) {
				
                if (data.result === 'valid_fbuser'){
                    FB.api('/me', function(response) {
						that.updateForm(response);
					});
                } else {
					alert('Your account is already linked in our system. Please move forward without facebook account.')
				}
            }, 'json');
        }
    },
	
	updateForm: function(response) {
		
		$('#fb-login-section').empty().html("<h3>Congratulations! You have successfully linked your facebook account with westsiderentals.</h3>");
		$('#fblogin').val(response.id);
		$('#first_name').val(response.first_name);
		$('#last_name').val(response.last_name);
		$('#mem_email').val(response.email);		
		if(typeof(response.email) !== "undefined") {
			$('#username, #password, #password2').remove();
		} else {
			$('#password, #password2').remove();
			$('#username label').empty().text("Email");
			$('#check-username').remove();
		}
		
		
	}
};

$(function(){
	$('.fb-login').click(function() {
		WSR.Facebook.init();
		return false;
	});
});
