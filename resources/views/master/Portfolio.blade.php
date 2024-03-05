<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="{{asset('css/portfolio.css')}}">
    <title>Portfolio</title>
</head>
<body>
    <div class="navbar">
        <h2>Portfolio</h2>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#guarantee">Portfolio</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="{{ route('login') }}">Admin</a></li>

        </ul>
        <button class="hire-btn">Hire Me</button>
    </div>

    <div class="main">
        <h4>Hi, I Am <span>Christian</span></h4>
        <p class="title">Creative Fullstack Web Developer</p>
        <p class="subtitle">I Design and Code Simple Yet Beautiful Websites</p>
        <img src="{{ asset('pictures/2.jpg') }}" alt="">


    </div>

    <div class="guarantee" id = 'guarantee'>
        <div class="item">
            <div class="icon">
                <i class='bx bx-check-shield' ></i>
            </div>
            <div class="info">
                <h3>+5</h3>
                <p>Years of Experiences</p>
            </div>
            <i class='bx bx-chevron-right' ></i>
            
        </div>
        <div class="item">
            <div class="icon">
                <i class='bx bx-check-circle'></i>
            </div>
            <div class="info">
                <h3>+50</h3>
                <p>Completed Projects</p>
            </div>
            <i class='bx bx-chevron-right' ></i>
            
        </div>
        <div class="item">
            <div class="icon">
                <i class='bx bx-laugh' ></i>
            </div>
            <div class="info">
                <h3>+5</h3>
                <p>Happy Clients</p>
            </div>
            <i class='bx bx-chevron-right' ></i>
            
        </div>
    </div>

        <h5 class="seperator">Who I Am</h5>

        <div class="about" id = "about">
            <img src="{{ asset('pictures/Profile.jpg') }}"  >
        

        <div class="info">
            <h3>
                About Me
            </h3>
            <p>
                Im a Graduate of Bachelor of Science on Information Technology, I Specialize on Developing Simple Yet Beautiful Websites and Software Application  
            </p>
            <button class="hire-btn">Hire Me</button>
        </div>
    </div>

        <h5 class="seperator">My Skills</h5>


        <div class="skills" id="skills">
            <div class="left">
                <div class="info">
                    <h3>What Are my Skills?</h3>
                    <P>I Develop Simple,intuitive and responsive user
                        interface that helps users get things done with less
                        effort and time with those technologies
                    </P>
                </div>
                <button class="hire-btn">Hire Me</button>
            </div>
            
            <div class="right">
                <div class="items">
                    <i class='bx bxl-html5' ></i>
                </div>
                <div class="items">
                    <i class='bx bxl-css3' ></i>
                </div>
                <div class="items">
                    <i class='bx bxl-java' ></i>
                </div>
                <div class="items">
                    <i class='bx bxl-python' ></i>
                </div>
                <div class="items">
                    <i class='bx bxl-git' ></i>
                </div>

            </div>

        </div>
  <footer>
    <div class="start">
        <h3>Start a project</h3>
        <p>Interested in working together? We should queue up a chat.</p>
        <button>Let's do this</button>
    </div>

    <div class="cols">
        <div class="about-col">
            <h3>Christian</h3>
            <p>Creative Fullstack Developer</p>
        </div>
        <div class="link-col">
            <h4>
                Useful Links
            </h4>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Skills</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
        </div>
        <div class="link-col">
            <h4>
              Social Media
            </h4>
            <a href="#">Facebook</a>
            <a href="#">Linked In</a>
            <a href="#">Instagram</a>
        </div>

        <div class="news-col">
            <h4>NewsLetter</h4>
            <p>Enter Your email and Get notified about news, of.</p>
            <form >
                <input type="email"  id="" placeholder="Your Email address">
                <button><i class='bx bxl-telegram' ></i></button>
            </form>
        </div>

    </div>
  </footer>
  <script>
  document.querySelectorAll('.navbar ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        // Check if the link is for an internal anchor
        if (this.getAttribute('href').charAt(0) === '#') {
            // Prevent default behavior for internal links only
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        }
    });
});

</script>
</body>
</html>