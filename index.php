<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Awesome Portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="top-container">
        <div class="intro-section">
            <img src="assets/images/me_2.jpg" alt="Profile Photo" class="profile-photo">
            <h1 data-aos="fade-up" data-aos-delay="100">Arshan Hosseinlar</h1>
            <p class="title" data-aos="fade-up" data-aos-delay="200">Junior Software Engineer</p>
            <p class="intro-text" data-aos="fade-up" data-aos-delay="300">My playground for PHP experiments 💡🌱🛠️</p>
            <ul class="social-icons" data-aos="fade-up" data-aos-delay="400">
                <li><a href="https://www.linkedin.com/in/arshan-hosseinlar/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://github.com/Acourages" target="_blank"><i class="fab fa-github"></i></a></li>
                <li><a href="https://www.instagram.com/arshan_hsr/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="YOUR_TWITTER_URL" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="about-projects-container">
            <section id="about" class="full-about">
                <h2 data-aos="fade-up" data-aos-delay="100"></h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Hi, I'm Arshan, a passionate software engineer with a strong background in backend development.
                    I specialize in Python, Django, and PHP, creating scalable and secure web applications.
                    My experience also extends to Linux systems, where I manage servers and automate tasks.
                </p>
                <p data-aos="fade-up" data-aos-delay="300">
                    I’m proficient in SQL and NoSQL databases like MongoDB, and I love working with data-driven projects.
                    Currently, I’m expanding my skills with AWS, building scalable cloud solutions, and applying Agile
                    methodology to improve my development processes and teamwork.
                </p>
                <p data-aos="fade-up" data-aos-delay="400">
                    From building a healthcare reminder bot to a crypto data aggregator, I enjoy creating meaningful
                    projects that solve real-world problems. I’m always learning and looking forward to the next challenge!
                </p>
            </section>

            <section id="projects-right">
                <h2 data-aos="fade-up" data-aos-delay="100">Projects</h2>

                <div class="project-entry" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-header">
                        <h3 class="project-title">CityCare Clinic Telegram Bot</h3>
                        <p class="project-time">2025</p>
                    </div>
                    <p class="project-description">
                        A multi-lingual Telegram bot for CityCare Clinic Dubai, assisting users with appointment scheduling and service information.
                        Supports English and Arabic.
                    </p>
                    <ul class="project-tags">
                        <li>Python</li>
                        <li>TelegramAPI</li>
                        <li>Telegram Bot</li>
                        <li>Multi-language</li>
                        <li>Scheduling</li>
                    </ul>
                    <a href="https://github.com/Acourages/Clinic_Telegram_bot" target="_blank" class="view-project-link">View Project</a>
                </div>

                <div class="project-entry" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-header">
                        <h3 class="project-title">PHP Weather App</h3>
                        <p class="project-time">2025</p>
                    </div>
                    <p class="project-description">
                        A simple PHP application fetching real-time weather data using the OpenWeatherMap API, displaying temperature,
                        humidity, and conditions.
                    </p>
                    <ul class="project-tags">
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>OpenWeatherMap API</li>
                    </ul>
                    <a href="https://github.com/Acourages/WeatherNow-PHP" target="_blank" class="view-project-link">View Project</a>
                </div>

                <div class="project-entry" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-header">
                        <h3 class="project-title">CryptoDataCollector</h3>
                        <p class="project-time">2023</p>
                    </div>
                    <p class="project-description">
                        A tool to aggregate and collect cryptocurrency market data from various exchanges (including Binance), providing
                        a unified API for symbols, price information, and historical kline data. Integrates with MongoDB for data storage.
                    </p>
                    <ul class="project-tags">
                        <li>Python</li>
                        <li>Cryptocurrency API</li>
                        <li>Data Aggregation</li>
                        <li>MongoDB</li>
                    </ul>
                    <a href="https://github.com/Acourages/CryptoDataCollector" target="_blank" class="view-project-link">View Project</a>
                </div>

            </section>
        </div>
    </div>

    <footer>
        <div class="text-center py-8">
            <p>© 2025 Arshan Hosseinlar. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>
