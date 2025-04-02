<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- Left Column (Form) -->
        <div
          class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-center left-section"
        >
          <div class="welcome-box text-center mb-4">
            <h1 class="welcome-text">Welcome back!</h1>
          </div>
          <div class="login-container p-4 text-center">
            <!-- Email Address -->
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              id="email"
              class="form-control mb-3"
              placeholder="example@email.com"
              required
            />

            <!-- Password -->
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              id="password"
              class="form-control mb-3"
              placeholder="Password"
              required
            />

            <!-- Sign Up link -->
            <p class="mt-3 text-muted">
              If you don't have an account yet, please
              <a href="sign_up.php" class="sign-up-link">Sign Up</a>
            </p>
          </div>
        </div>

        <!-- Right Column (Image) -->
        <div
          class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center right-section"
        >
          <img
            src="images/guitarist.png"
            alt="Guitarist Silhouette"
            class="guitarist-image img-fluid"
          />
        </div>
      </div>
    </div>
  </body>
</html>
