<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chrisalyn Ballera | Portfolio</title>
  <link rel="icon" href="{{ asset('image/favicon.png') }}" type="image/png" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
  <header class="header">
    <nav class="nav">
      <a href="#home" class="logo" aria-label="Chrisalyn Ballera — home">
        <img src="{{ asset('image/favicon.png') }}" alt="" class="logo-mark" width="57" height="38" />
        <span class="logo-text">Chrisalyn Ballera</span>
      </a>
      <button class="theme-toggle" aria-label="Toggle theme">
        <span class="theme-icon">🌙</span>
      </button>
      <button class="nav-toggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <footer class="footer">
    <p>&copy; 2026 Chrisalyn Ballera. All rights reserved.</p>
  </footer>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
