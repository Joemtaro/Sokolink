<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous gratuitement sur SOKOLINK - Marché local connecté">
    <title>Inscription - SOKOLINK</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/variable.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>✨</text></svg>">
    
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
        /* Styles spécifiques à la page d'inscription */
        .register-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(1, 0, 60, 0.03) 0%, rgba(255, 138, 0, 0.03) 100%);
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .register-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            overflow: hidden;
        }
        
        .register-blur-1 {
            position: absolute;
            top: 10%;
            left: 10%;
            width: 200px;
            height: 200px;
            background: var(--gradient-primary);
            border-radius: 50%;
            filter: blur(40px);
            opacity: 0.1;
        }
        
        .register-blur-2 {
            position: absolute;
            bottom: 10%;
            right: 10%;
            width: 300px;
            height: 300px;
            background: var(--gradient-secondary);
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.1;
        }
        
        .register-container {
            width: 100%;
            max-width: 560px;
            background: var(--white-color);
            border-radius: var(--radius-2xl);
            box-shadow: var(--shadow-2xl);
            overflow: hidden;
            position: relative;
            z-index: 1;
            animation: slideUp 0.6s ease-out 0.2s both;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .register-header {
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            color: var(--white-color);
            padding: 40px 32px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .register-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80') center/cover;
            opacity: 0.1;
        }
        
        .register-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 16px;
        }
        
        .register-logo-icon {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: var(--radius-lg);
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }
        
        .register-logo-icon svg {
            width: 32px;
            height: 32px;
        }
        
        .register-logo-text {
            font-family: var(--font-title);
            font-size: 28px;
            font-weight: 800;
            letter-spacing: -0.02em;
        }
        
        .register-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        
        .register-subtitle {
            opacity: 0.9;
            font-size: 14px;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .register-body {
            padding: 40px 32px;
        }
        
        .register-form {
            margin-bottom: 24px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-primary);
            font-size: 14px;
        }
        
        .form-label.required::after {
            content: ' *';
            color: #e53e3e;
        }
        
        .input-group {
            position: relative;
        }
        
        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            z-index: 1;
        }
        
        .form-input {
            width: 100%;
            padding: 16px 16px 16px 48px;
            border: 2px solid var(--border-light);
            border-radius: var(--radius-lg);
            font-family: var(--font-body);
            font-size: 16px;
            background: var(--white-color);
            color: var(--text-primary);
            transition: all var(--transition-normal);
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(255, 138, 0, 0.1);
        }
        
        .form-input.error {
            border-color: #e53e3e;
        }
        
        .form-input.success {
            border-color: #38a169;
        }
        
        .form-input::placeholder {
            color: var(--text-light);
        }
        
        .password-toggle {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--text-light);
            cursor: pointer;
            padding: 4px;
            transition: color var(--transition-fast);
        }
        
        .password-toggle:hover {
            color: var(--secondary-color);
        }
        
        .form-hint {
            display: block;
            margin-top: 4px;
            font-size: 12px;
            color: var(--text-light);
        }
        
        .form-hint.error {
            color: #e53e3e;
        }
        
        .form-hint.success {
            color: #38a169;
        }
        
        .password-strength {
            margin-top: 8px;
        }
        
        .strength-bar {
            height: 4px;
            background: var(--border-light);
            border-radius: 2px;
            overflow: hidden;
            margin-bottom: 4px;
        }
        
        .strength-fill {
            height: 100%;
            width: 0%;
            transition: all var(--transition-normal);
        }
        
        .strength-fill.weak {
            background: #e53e3e;
            width: 33%;
        }
        
        .strength-fill.medium {
            background: #d69e2e;
            width: 66%;
        }
        
        .strength-fill.strong {
            background: #38a169;
            width: 100%;
        }
        
        .strength-text {
            font-size: 12px;
            color: var(--text-light);
        }
        
        .terms-group {
            margin-bottom: 32px;
        }
        
        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        
        .checkbox {
            width: 18px;
            height: 18px;
            margin-top: 3px;
            accent-color: var(--secondary-color);
        }
        
        .terms-label {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.5;
        }
        
        .terms-link {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 600;
        }
        
        .terms-link:hover {
            text-decoration: underline;
        }
        
        .submit-btn {
            width: 100%;
            padding: 16px;
            background: var(--gradient-secondary);
            color: var(--white-color);
            border: none;
            border-radius: var(--radius-lg);
            font-family: var(--font-title);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all var(--transition-normal);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .submit-btn:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 32px 0;
            color: var(--text-light);
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--border-light);
        }
        
        .divider-text {
            padding: 0 16px;
            font-size: 14px;
        }
        
        .social-register {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
            margin-bottom: 32px;
        }
        
        .social-btn {
            padding: 14px;
            border: 2px solid var(--border-light);
            border-radius: var(--radius-lg);
            background: var(--white-color);
            color: var(--text-primary);
            font-family: var(--font-body);
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all var(--transition-normal);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .social-btn.google:hover {
            background: #DB4437;
            color: white;
            border-color: #DB4437;
        }
        
        .social-btn.facebook:hover {
            background: #4267B2;
            color: white;
            border-color: #4267B2;
        }
        
        .register-footer {
            text-align: center;
            padding-top: 24px;
            border-top: 1px solid var(--border-light);
        }
        
        .register-footer-text {
            color: var(--text-secondary);
            font-size: 14px;
        }
        
        .register-footer-link {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 700;
            transition: color var(--transition-fast);
        }
        
        .register-footer-link:hover {
            color: var(--secondary-hover);
        }
        
        .back-home {
            position: absolute;
            top: 24px;
            left: 24px;
            z-index: 2;
        }
        
        .back-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid var(--border-light);
            border-radius: var(--radius-full);
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all var(--transition-normal);
        }
        
        .back-btn:hover {
            background: var(--white-color);
            transform: translateX(-4px);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .register-container {
                max-width: 100%;
            }
            
            .register-header,
            .register-body {
                padding: 32px 24px;
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            
            .social-register {
                grid-template-columns: 1fr;
            }
            
            .back-home {
                top: 16px;
                left: 16px;
            }
        }
        
        @media (max-width: 480px) {
            .register-header,
            .register-body {
                padding: 24px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-page">
        <!-- Background blurs -->
        <div class="register-background">
            <div class="register-blur-1" aria-hidden="true"></div>
            <div class="register-blur-2" aria-hidden="true"></div>
        </div>
        
        <!-- Back to home -->
        <div class="back-home">
            <a href="index.php" class="back-btn">
                <span class="material-symbols-outlined">arrow_back</span>
                <span>Retour à l'accueil</span>
            </a>
        </div>
        
        <!-- Register Container -->
        <div class="register-container">
            <!-- Header -->
            <div class="register-header">
                <div class="register-logo">
                    <div class="register-logo-icon">
                        <svg fill="none" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 25H30L35 55H75L80 35H32" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"></path>
                            <circle cx="38" cy="70" fill="white" r="5"></circle>
                            <circle cx="72" cy="70" fill="white" r="5"></circle>
                            <path d="M55 65L75 45" stroke="#ff8a00" stroke-linecap="round" stroke-width="8"></path>
                            <path d="M65 75L85 55" stroke="#ff8a00" stroke-linecap="round" stroke-width="8"></path>
                            <rect height="26" rx="7.5" stroke="#ff8a00" stroke-width="6" transform="rotate(-45 52 52)" width="15" x="52" y="52"></rect>
                            <rect height="26" rx="7.5" stroke="#ff8a00" stroke-width="6" transform="rotate(-45 65 39)" width="15" x="65" y="39"></rect>
                        </svg>
                    </div>
                    <span class="register-logo-text">SOKOLINK</span>
                </div>
                <h1 class="register-title">Rejoignez SOKOLINK</h1>
                <p class="register-subtitle">Créez votre compte gratuitement et commencez à vendre ou acheter localement</p>
            </div>
            
            <!-- Body -->
            <div class="register-body">
                <form class="register-form" id="registerForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName" class="form-label required">Prénom</label>
                            <div class="input-group">
                                <span class="input-icon">
                                    <span class="material-symbols-outlined">person</span>
                                </span>
                                <input type="text" id="firstName" class="form-input" placeholder="Jean" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="lastName" class="form-label required">Nom</label>
                            <div class="input-group">
                                <span class="input-icon">
                                    <span class="material-symbols-outlined">person</span>
                                </span>
                                <input type="text" id="lastName" class="form-input" placeholder="Dupont" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label required">Adresse e-mail</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <span class="material-symbols-outlined">mail</span>
                            </span>
                            <input type="email" id="email" class="form-input" placeholder="jean.dupont@email.com" required>
                        </div>
                        <span class="form-hint" id="emailHint"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="form-label">Téléphone (optionnel)</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <span class="material-symbols-outlined">phone</span>
                            </span>
                            <input type="tel" id="phone" class="form-input" placeholder="+33 1 23 45 67 89">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label required">Mot de passe</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <span class="material-symbols-outlined">lock</span>
                            </span>
                            <input type="password" id="password" class="form-input" placeholder="••••••••" required>
                            <button type="button" class="password-toggle" id="togglePassword">
                                <span class="material-symbols-outlined" id="passwordIcon">visibility_off</span>
                            </button>
                        </div>
                        <div class="password-strength">
                            <div class="strength-bar">
                                <div class="strength-fill" id="strengthFill"></div>
                            </div>
                            <span class="strength-text" id="strengthText">Force du mot de passe</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword" class="form-label required">Confirmer le mot de passe</label>
                        <div class="input-group">
                            <span class="input-icon">
                                <span class="material-symbols-outlined">lock</span>
                            </span>
                            <input type="password" id="confirmPassword" class="form-input" placeholder="••••••••" required>
                            <button type="button" class="password-toggle" id="toggleConfirmPassword">
                                <span class="material-symbols-outlined" id="confirmPasswordIcon">visibility_off</span>
                            </button>
                        </div>
                        <span class="form-hint" id="confirmPasswordHint"></span>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label required">Vous êtes principalement :</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="userType" value="buyer" checked>
                                <span class="radio-custom"></span>
                                <span class="radio-text">Un acheteur</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="userType" value="seller">
                                <span class="radio-custom"></span>
                                <span class="radio-text">Un vendeur</span>
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="userType" value="both">
                                <span class="radio-custom"></span>
                                <span class="radio-text">Les deux</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="terms-group">
                        <div class="terms-checkbox">
                            <input type="checkbox" id="terms" class="checkbox" required>
                            <label for="terms" class="terms-label">
                                Je certifie avoir au moins 18 ans et j'accepte les 
                                <a href="#" class="terms-link">Conditions d'utilisation</a> et la 
                                <a href="#" class="terms-link">Politique de confidentialité</a> de SOKOLINK.
                                Je comprends que mes données seront traitées conformément à ces documents.
                            </label>
                        </div>
                    </div>
                    
                    <div class="terms-group">
                        <div class="terms-checkbox">
                            <input type="checkbox" id="newsletter" class="checkbox">
                            <label for="newsletter" class="terms-label">
                                Je souhaite recevoir des offres spéciales, des conseils et des nouvelles de SOKOLINK par e-mail.
                                Je peux me désabonner à tout moment.
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span class="material-symbols-outlined">person_add</span>
                        <span>Créer mon compte gratuitement</span>
                    </button>
                </form>
                
                <div class="divider">
                    <span class="divider-text">Ou s'inscrire avec</span>
                </div>
                
                <div class="social-register">
                    <button type="button" class="social-btn google">
                        <i class="fab fa-google"></i>
                        <span>Google</span>
                    </button>
                    <button type="button" class="social-btn facebook">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </button>
                </div>
                
                <div class="register-footer">
                    <p class="register-footer-text">
                        Vous avez déjà un compte ? 
                        <a href="login.php" class="register-footer-link">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="assets/js/main.js"></script>
    <script>
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');
        
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const confirmPassword = document.getElementById('confirmPassword');
        const confirmPasswordIcon = document.getElementById('confirmPasswordIcon');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            passwordIcon.textContent = type === 'password' ? 'visibility_off' : 'visibility';
        });
        
        toggleConfirmPassword.addEventListener('click', function() {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            confirmPasswordIcon.textContent = type === 'password' ? 'visibility_off' : 'visibility';
        });
        
        // Password strength checker
        function checkPasswordStrength(password) {
            let strength = 0;
            const strengthFill = document.getElementById('strengthFill');
            const strengthText = document.getElementById('strengthText');
            
            if (password.length >= 8) strength++;
            if (password.match(/[a-z]+/)) strength++;
            if (password.match(/[A-Z]+/)) strength++;
            if (password.match(/[0-9]+/)) strength++;
            if (password.match(/[$@#&!]+/)) strength++;
            
            strengthFill.className = 'strength-fill';
            strengthText.textContent = 'Force du mot de passe';
            
            if (password.length === 0) {
                strengthFill.style.width = '0%';
                strengthText.textContent = 'Force du mot de passe';
            } else if (password.length < 8) {
                strengthFill.className = 'strength-fill weak';
                strengthText.textContent = 'Trop court (minimum 8 caractères)';
                strengthText.className = 'strength-text error';
            } else if (strength < 3) {
                strengthFill.className = 'strength-fill weak';
                strengthText.textContent = 'Faible';
                strengthText.className = 'strength-text error';
            } else if (strength < 5) {
                strengthFill.className = 'strength-fill medium';
                strengthText.textContent = 'Moyen';
                strengthText.className = 'strength-text';
            } else {
                strengthFill.className = 'strength-fill strong';
                strengthText.textContent = 'Fort';
                strengthText.className = 'strength-text success';
            }
        }
        
        password.addEventListener('input', function() {
            checkPasswordStrength(this.value);
            validateConfirmPassword();
        });
        
        // Confirm password validation
        function validateConfirmPassword() {
            const passwordValue = password.value;
            const confirmPasswordValue = confirmPassword.value;
            const hint = document.getElementById('confirmPasswordHint');
            
            if (confirmPasswordValue.length === 0) {
                confirmPassword.className = 'form-input';
                hint.textContent = '';
                hint.className = 'form-hint';
                return false;
            }
            
            if (passwordValue === confirmPasswordValue) {
                confirmPassword.className = 'form-input success';
                hint.textContent = 'Les mots de passe correspondent';
                hint.className = 'form-hint success';
                return true;
            } else {
                confirmPassword.className = 'form-input error';
                hint.textContent = 'Les mots de passe ne correspondent pas';
                hint.className = 'form-hint error';
                return false;
            }
        }
        
        confirmPassword.addEventListener('input', validateConfirmPassword);
        
        // Email validation
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
        
        const emailInput = document.getElementById('email');
        const emailHint = document.getElementById('emailHint');
        
        emailInput.addEventListener('blur', function() {
            const email = this.value.trim();
            
            if (email.length === 0) {
                emailHint.textContent = '';
                emailHint.className = 'form-hint';
                this.className = 'form-input';
                return;
            }
            
            if (validateEmail(email)) {
                emailHint.textContent = 'Adresse e-mail valide';
                emailHint.className = 'form-hint success';
                this.className = 'form-input success';
            } else {
                emailHint.textContent = 'Veuillez entrer une adresse e-mail valide';
                emailHint.className = 'form-hint error';
                this.className = 'form-input error';
            }
        });
        
        // Form submission
        const registerForm = document.getElementById('registerForm');
        const submitBtn = document.getElementById('submitBtn');
        
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Disable button to prevent multiple submissions
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="material-symbols-outlined">sync</span><span>Création du compte...</span>';
            
            // Get form values
            const formData = {
                firstName: document.getElementById('firstName').value.trim(),
                lastName: document.getElementById('lastName').value.trim(),
                email: document.getElementById('email').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                password: password.value,
                userType: document.querySelector('input[name="userType"]:checked').value,
                terms: document.getElementById('terms').checked,
                newsletter: document.getElementById('newsletter').checked
            };
            
            // Validate
            if (!formData.firstName || !formData.lastName || !formData.email || !formData.password) {
                alert('Veuillez remplir tous les champs obligatoires');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span><span>Créer mon compte gratuitement</span>';
                return;
            }
            
            if (!validateEmail(formData.email)) {
                alert('Veuillez entrer une adresse e-mail valide');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span><span>Créer mon compte gratuitement</span>';
                return;
            }
            
            if (!validateConfirmPassword()) {
                alert('Les mots de passe ne correspondent pas');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span><span>Créer mon compte gratuitement</span>';
                return;
            }
            
            if (!formData.terms) {
                alert('Vous devez accepter les conditions d\'utilisation');
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="material-symbols-outlined">person_add</span><span>Créer mon compte gratuitement</span>';
                return;
            }
            
            // Simulate API call
            console.log('Registration attempt:', formData);
            
            // Show success message
            setTimeout(() => {
                alert('Compte créé avec succès ! Bienvenue sur SOKOLINK.');
                
                // In a real app, you would redirect to dashboard
                setTimeout(() => {
                    window.location.href = 'index.php';
                }, 1000);
            }, 1500);
        });
        
        // Social registration buttons
        document.querySelectorAll('.social-btn').forEach(button => {
            button.addEventListener('click', function() {
                const provider = this.classList.contains('google') ? 'Google' : 'Facebook';
                console.log(`${provider} registration clicked`);
                alert(`Inscription avec ${provider} - Cette fonctionnalité est en développement`);
            });
        });
        
        // Style for radio buttons
        const style = document.createElement('style');
        style.textContent = `
            .radio-group {
                display: flex;
                gap: 20px;
                margin-top: 8px;
            }
            
            .radio-label {
                display: flex;
                align-items: center;
                gap: 8px;
                cursor: pointer;
                font-size: 14px;
                color: var(--text-secondary);
            }
            
            .radio-label input[type="radio"] {
                display: none;
            }
            
            .radio-custom {
                width: 18px;
                height: 18px;
                border: 2px solid var(--border-primary);
                border-radius: 50%;
                position: relative;
                transition: all var(--transition-fast);
            }
            
            .radio-label input[type="radio"]:checked + .radio-custom {
                border-color: var(--secondary-color);
            }
            
            .radio-label input[type="radio"]:checked + .radio-custom::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 10px;
                height: 10px;
                background: var(--secondary-color);
                border-radius: 50%;
            }
            
            .radio-text {
                user-select: none;
            }
            
            .radio-label:hover .radio-custom {
                border-color: var(--secondary-color);
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>