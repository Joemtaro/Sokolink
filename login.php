<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SOKOLINK - Connectez-vous à votre compte">
    <title>SOKOLINK - Connexion</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="assets/css/variable.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Page de login spécifique */
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--bg-light);
            padding: var(--spacing-lg);
            position: relative;
            overflow: hidden;
        }
        
        .login-background {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }
        
        .login-blur-1 {
            position: absolute;
            top: -20%;
            left: -10%;
            width: 50%;
            height: 70%;
            background-color: rgba(1, 0, 60, 0.1);
            border-radius: 50%;
            filter: blur(60px);
        }
        
        .login-blur-2 {
            position: absolute;
            top: 30%;
            right: -15%;
            width: 45%;
            height: 60%;
            background-color: rgba(1, 0, 60, 0.15);
            border-radius: 50%;
            filter: blur(100px);
        }
        
        .login-container {
            width: 100%;
            max-width: 450px;
            background-color: var(--white-color);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border-light);
            padding: var(--spacing-2xl);
            position: relative;
            z-index: 1;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: var(--spacing-2xl);
        }
        
        .login-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--spacing-sm);
            margin-bottom: var(--spacing-xl);
            text-decoration: none;
            color: var(--text-primary);
        }
        
        .login-logo-icon {
            width: 48px;
            height: 48px;
            background-color: var(--primary-color);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-logo-icon svg {
            width: 32px;
            height: 32px;
        }
        
        .login-logo-text {
            font-family: var(--font-title);
            font-size: var(--text-xl);
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        
        .login-title {
            font-size: var(--text-2xl);
            margin-bottom: var(--spacing-sm);
            color: var(--text-primary);
        }
        
        .login-subtitle {
            color: var(--text-secondary);
            font-size: var(--text-base);
        }
        
        .login-form {
            margin-bottom: var(--spacing-2xl);
        }
        
        .form-group {
            margin-bottom: var(--spacing-lg);
        }
        
        .form-label {
            display: block;
            margin-bottom: var(--spacing-sm);
            font-weight: 500;
            color: var(--text-primary);
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: var(--spacing-md);
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
        }
        
        .form-input {
            width: 100%;
            padding: var(--spacing-md) var(--spacing-md) var(--spacing-md) calc(var(--spacing-md) * 2 + 20px);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            font-size: var(--text-base);
            font-family: var(--font-body);
            transition: all var(--transition-fast);
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(255, 138, 0, 0.1);
        }
        
        .password-toggle {
            position: absolute;
            right: var(--spacing-md);
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            padding: 0;
        }
        
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: var(--spacing-xl);
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
        }
        
        .remember-me input {
            width: 18px;
            height: 18px;
            accent-color: var(--secondary-color);
        }
        
        .forgot-password {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        .login-btn {
            width: 100%;
            padding: var(--spacing-md);
            background-color: var(--secondary-color);
            color: var(--white-color);
            border: none;
            border-radius: var(--radius-full);
            font-size: var(--text-base);
            font-weight: 600;
            cursor: pointer;
            transition: all var(--transition-normal);
        }
        
        .login-btn:hover {
            background-color: var(--secondary-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-secondary);
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: var(--spacing-2xl) 0;
            color: var(--text-light);
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: var(--border-light);
        }
        
        .divider span {
            padding: 0 var(--spacing-md);
            font-size: var(--text-sm);
        }
        
        .social-login {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: var(--spacing-md);
            margin-bottom: var(--spacing-2xl);
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: var(--spacing-sm);
            padding: var(--spacing-md);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-lg);
            background-color: var(--white-color);
            color: var(--text-primary);
            font-weight: 500;
            cursor: pointer;
            transition: all var(--transition-fast);
        }
        
        .social-btn:hover {
            background-color: var(--bg-primary-light);
            border-color: var(--border-primary);
        }
        
        .social-btn.google i {
            color: #DB4437;
        }
        
        .social-btn.facebook i {
            color: #4267B2;
        }
        
        .login-footer {
            text-align: center;
            color: var(--text-secondary);
        }
        
        .login-footer a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .login-footer a:hover {
            text-decoration: underline;
        }
        
        .back-home {
            position: absolute;
            top: var(--spacing-lg);
            left: var(--spacing-lg);
            z-index: 10;
        }
        
        .back-home a {
            display: flex;
            align-items: center;
            gap: var(--spacing-sm);
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            transition: color var(--transition-fast);
        }
        
        .back-home a:hover {
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="login-page">
        <!-- Background -->
        <div class="login-background">
            <div class="login-blur-1" aria-hidden="true"></div>
            <div class="login-blur-2" aria-hidden="true"></div>
        </div>
        
        <!-- Back to home -->
        <div class="back-home">
            <a href="index.html">
                <span class="material-symbols-outlined">arrow_back</span>
                Retour à l'accueil
            </a>
        </div>
        
        <!-- Login container -->
        <div class="login-container">
            <!-- Header -->
            <div class="login-header">
                <a href="index.html" class="login-logo">
                    <div class="login-logo-icon">
                        <svg fill="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M20 25H30L35 55H75L80 35H32" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"></path>
                            <circle cx="38" cy="70" fill="white" r="5"></circle>
                            <circle cx="72" cy="70" fill="white" r="5"></circle>
                            <path d="M55 65L75 45" stroke="#ff8a00" stroke-linecap="round" stroke-width="8"></path>
                            <path d="M65 75L85 55" stroke="#ff8a00" stroke-linecap="round" stroke-width="8"></path>
                            <rect height="26" rx="7.5" stroke="#ff8a00" stroke-width="6" transform="rotate(-45 52 52)" width="15" x="52" y="52"></rect>
                            <rect height="26" rx="7.5" stroke="#ff8a00" stroke-width="6" transform="rotate(-45 65 39)" width="15" x="65" y="39"></rect>
                        </svg>
                    </div>
                    <span class="login-logo-text">SOKOLINK</span>
                </a>
                
                <h1 class="login-title">Connectez-vous</h1>
                <p class="login-subtitle">Bienvenue de nouveau sur SOKOLINK</p>
            </div>
            
            <!-- Form -->
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <div class="input-with-icon">
                        <span class="material-symbols-outlined input-icon">mail</span>
                        <input type="email" id="email" class="form-input" placeholder="exemple@email.com" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-with-icon">
                        <span class="material-symbols-outlined input-icon">lock</span>
                        <input type="password" id="password" class="form-input" placeholder="••••••••" required>
                        <button type="button" class="password-toggle" id="togglePassword">
                            <span class="material-symbols-outlined">visibility</span>
                        </button>
                    </div>
                </div>
                
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" id="remember">
                        <span>Se souvenir de moi</span>
                    </label>
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                </div>
                
                <button type="submit" class="login-btn">Se connecter</button>
            </form>
            
            <!-- Divider -->
            <div class="divider">
                <span>Ou continuer avec</span>
            </div>
            
            <!-- Social login -->
            <div class="social-login">
                <button type="button" class="social-btn google">
                    <i class="fab fa-google"></i>
                    Google
                </button>
                <button type="button" class="social-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                    Facebook
                </button>
            </div>
            
            <!-- Footer -->
            <div class="login-footer">
                <p>Pas encore de compte ? <a href="register.html">S'inscrire</a></p>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const visibilityIcon = togglePassword.querySelector('.material-symbols-outlined');
        
        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            visibilityIcon.textContent = type === 'password' ? 'visibility' : 'visibility_off';
            togglePassword.setAttribute('aria-label', type === 'password' ? 'Afficher le mot de passe' : 'Masquer le mot de passe');
        });
        
        // Form submission
        const loginForm = document.getElementById('loginForm');
        
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;
            
            // Simulation de connexion
            const loginBtn = loginForm.querySelector('.login-btn');
            const originalText = loginBtn.textContent;
            
            loginBtn.textContent = 'Connexion...';
            loginBtn.disabled = true;
            
            setTimeout(() => {
                // En réalité, ici vous feriez un appel API
                alert(`Connexion simulée avec:\nEmail: ${email}\nMot de passe: ${password}\nSe souvenir: ${remember ? 'Oui' : 'Non'}`);
                
                loginBtn.textContent = originalText;
                loginBtn.disabled = false;
                
                // Redirection vers la page d'accueil
                window.location.href = 'index.html';
            }, 1500);
        });
        
        // Social login buttons
        const socialButtons = document.querySelectorAll('.social-btn');
        
        socialButtons.forEach(button => {
            button.addEventListener('click', () => {
                const platform = button.classList.contains('google') ? 'Google' : 'Facebook';
                alert(`Connexion avec ${platform} simulée`);
            });
        });
        
        // Forgot password
        const forgotPassword = document.querySelector('.forgot-password');
        
        forgotPassword.addEventListener('click', (e) => {
            e.preventDefault();
            const email = prompt('Veuillez entrer votre adresse email pour réinitialiser votre mot de passe:');
            
            if (email) {
                alert(`Un email de réinitialisation a été envoyé à ${email} (simulation)`);
            }
        });
    </script>
</body>
</html>