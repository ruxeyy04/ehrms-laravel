<x-auth-layout>

@if($errors->any())
	<pop-notify autohide variant="error">
    <div class="notification notification-error">
        <div class="notification-content">

                {{ $errors->first() }}

            <button type="button" class="btn-close" aria-label="Close"></button>
        </div>
    </div>
</pop-notify>
@endif
	<section class="auth-section anim">
		<div class="fx-login-page">
			<div class="container-fluid no-gutters">
				<div class="row">
					<div class="offset-lg-6 col-lg-6">
						<div class="content-detail">
							<div class="main-info">
								<div class="hero-container">
									<!-- Login form -->
									<form class="login-form" method="POST" action="{{route('loginform')}}">
										@csrf
										<div class="imgcontainer">
											<a href="index.html"><img src="assets/img/logo/full-logo-lt.png" alt="logo" class="logo"></a>
										</div>
										<div class="input-control">
											<input type="text" placeholder="Enter Email" name="email" value="{{old('email')}}" required>
											<span class="password-field-show">
												<input type="password" placeholder="Enter Password"
													name="password" class="password-field" value="" required>
												<span data-toggle=".password-field"
													class="fa fa-fw fa-eye field-icon toggle-password"></span>
											</span>
											<label class="label-container">Remember me
												<input type="checkbox" name="remember">
												<span class="checkmark"></span>
											</label>
											@if (Route::has('password.request'))
											<span class="psw"><a href="{{route('password.request')}}" class="forgot-btn">Forgot
													password?</a></span>
											@endif
											<div class="login-btns">
												<button type="submit">Login</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</x-auth-layout>