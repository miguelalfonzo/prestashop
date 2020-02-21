{* 
* @Module Name: Leo Quick Login
* @Website: leotheme.com.com - prestashop template provider
* @author Leotheme <leotheme@gmail.com>
* @copyright Leotheme
* @description: Leo Quick Login And Social Login For Prestashop 1.7 
*}
<div class="leo-quicklogin-form row{if isset($leo_form_type) && $leo_form_type != ''} {$leo_form_type}{/if}">
	<div class="leo-form leo-login-form col-sm-{if $leo_form_layout == 'both'}6{else}12{/if}{if $leo_form_layout == 'login' || $leo_form_layout == 'both'} leo-form-active{else} leo-form-inactive{/if}{if $leo_form_layout != 'both'} full-width{/if}">
		<h3 class="leo-login-title">			
			<span class="title-both">
				{l s='Existing Account Login' d='Shop.Theme.Global'}
			</span>
		
			<span class="title-only">
				{l s='Login to your account' d='Shop.Theme.Global'}
			</span>		
		</h3>
		<form class="lql-form-content leo-login-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-email-login" name="lql-email-login" required="" placeholder="{l s='Username or email' d='Shop.Theme.Global'}">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-pass-login" name="lql-pass-login" required="" placeholder="{l s='Password' d='Shop.Theme.Global'}">
			</div>
			<div class="form-group lql-form-content-element clearfix">
				<div class="post-checkbox child-element">
					{if $leo_check_cookie}
						<input type="checkbox" class="lql-rememberme" name="lql-rememberme">
						<label class="form-control-label"><span>{l s='Remember Me' d='Shop.Theme.Global'}</span></label>
					{/if}
				</div>				
				<div class="post-forgot child-element">
					<a role="button" href="#" class="leoquicklogin-forgotpass">{l s='Forgot Password' d='Shop.Theme.Global'} ?</a>
				</div>
			</div>
			<div class="form-group text-right post-button">
				<button type="submit" class="form-control-submit lql-form-bt lql-login-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						{l s='Sign in' d='Shop.Theme.Global'}
					</span>
				</button>
			</div>
			<div class="form-group lql-callregister">
				<a role="button" href="#" class="lql-callregister-action">{l s='Register Now' d='Shop.Theme.Global'}</a>
			</div>
		</form>
		<div class="leo-resetpass-form">
			<h3>{l s='Reset Password' d='Shop.Theme.Global'}</h3>
			<form class="lql-form-content leo-resetpass-form-content" action="#" method="post">
				<div class="form-group lql-form-mesg has-success">					
				</div>			
				<div class="form-group lql-form-mesg has-danger">					
				</div>
				<div class="form-group lql-form-content-element">
					<input type="email" class="form-control lql-email-reset" name="lql-email-reset" required="" placeholder="{l s='Email Address' d='Shop.Theme.Global'}">
				</div>
				<div class="form-group">					
					<button type="submit" class="form-control-submit lql-form-bt leoquicklogin-reset-pass-bt btn btn-primary">			
						<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
						<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
						<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
						<span class="lql-bt-txt">					
							{l s='Reset Password' d='Shop.Theme.Global'}
						</span>
					</button>
				</div>
				
			</form>
		</div>
	</div>
	
	<div class="leo-form leo-register-form col-sm-{if $leo_form_layout == 'both'}6{else}12{/if}{if $leo_form_layout == 'register' || $leo_form_layout == 'both'} leo-form-active{else} leo-form-inactive{/if}{if $leo_form_layout != 'both'} full-width{/if}">
		<h3 class="leo-register-title">
			{l s='New Account Register' d='Shop.Theme.Global'}
		</h3>
		<form class="lql-form-content leo-register-form-content" action="#" method="post">
			<div class="form-group lql-form-mesg has-success">					
			</div>			
			<div class="form-group lql-form-mesg has-danger">					
			</div>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-firstname" name="lql-register-firstname" required="" placeholder="First Name">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="text" class="form-control lql-register-lastname" name="lql-register-lastname" required="" placeholder="Last Name">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="email" class="form-control lql-register-email" name="lql-register-email" required="" placeholder="Email Address">
			</div>
			<div class="form-group lql-form-content-element">
				<input type="password" class="form-control lql-register-pass" name="lql-register-pass" required="" placeholder="Password">
			</div>
			<div class="form-group text-right">				
				<button type="submit" class="form-control-submit lql-form-bt lql-register-bt btn btn-primary">			
					<span class="leoquicklogin-loading leoquicklogin-cssload-speeding-wheel"></span>
					<i class="leoquicklogin-icon leoquicklogin-success-icon material-icons">&#xE876;</i>
					<i class="leoquicklogin-icon leoquicklogin-fail-icon material-icons">&#xE033;</i>
					<span class="lql-bt-txt">					
						{l s='Create an Account' d='Shop.Theme.Global'}
					</span>
				</button>
			</div>
			<div class="form-group lql-calllogin">
				<div>{l s='Already have an account?' d='Shop.Theme.Global'}</div>
				<a role="button" href="#" class="lql-calllogin-action">{l s='Log in instead' d='Shop.Theme.Global'}</a>
				{l s='Or'}
				<a role="button" href="#" class="lql-calllogin-action lql-callreset-action">{l s='Reset password' d='Shop.Theme.Global'}</a>
			</div>
		</form>
	</div>
</div>

