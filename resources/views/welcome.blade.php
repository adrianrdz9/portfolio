<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Adrián Rodríguez | My Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&family=Roboto+Slab:wght@900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer async></script>
</head>

<body>
<header class="header sticky">
    <div class="container">
        <div class="logo">
            Adrián
            <mark>//</mark>
            Rodríguez
        </div>
        <nav class="navigation">
            <a href="#intro" class="navigation-button active">
                    <span class="navigation-button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="5 12 3 12 12 3 21 12 19 12"/>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
                        </svg>
                    </span>
                <span>intro</span>
            </a>
            <a href="#about" class="navigation-button">
                    <span class="navigation-button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <circle cx="12" cy="7" r="4"/>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"/>
                        </svg>
                    </span>
                <span>about me</span>
            </a>
            <a href="#experience" class="navigation-button">
                    <span class="navigation-button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <polyline points="7 8 3 12 7 16"/>
                            <polyline points="17 8 21 12 17 16"/>
                            <line x1="14" y1="4" x2="10" y2="20"/>
                        </svg>
                    </span>
                <span>experience</span>
            </a>
            <a href="#work" class="navigation-button">
                    <span class="navigation-button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-artboard"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <rect x="8" y="8" width="8" height="8" rx="1"/>
                            <line x1="3" y1="8" x2="4" y2="8"/>
                            <line x1="3" y1="16" x2="4" y2="16"/>
                            <line x1="8" y1="3" x2="8" y2="4"/>
                            <line x1="16" y1="3" x2="16" y2="4"/>
                            <line x1="20" y1="8" x2="21" y2="8"/>
                            <line x1="20" y1="16" x2="21" y2="16"/>
                            <line x1="8" y1="20" x2="8" y2="21"/>
                            <line x1="16" y1="20" x2="16" y2="21"/>
                        </svg>
                    </span>
                <span>latest work</span>
            </a>
            <a href="#contact" class="navigation-button">
                    <span class="navigation-button__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mailbox"
                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 21v-6.5a3.5 3.5 0 0 0 -7 0v6.5h18v-6a4 4 0 0 0 -4 -4h-10.5"/>
                            <path d="M12 11v-8h4l2 2l-2 2h-4"/>
                            <path d="M6 15h1"/>
                        </svg>
                    </span>
                <span>contact</span>
            </a>
        </nav>
    </div>
</header>
<div id="intro" class="intro container section">
    <div class="intro-text__wrapper">
        <div class="intro-text">
            <p class="intro-text--primary">hi 👋 my name is
                <mark>Adrián</mark>
                and I’m a developer.
            </p>
            <p>I specialize in
                <mark>Web Application</mark>
                development with
                <mark>Laravel</mark>
                ,
                <mark>VueJS</mark>
                and
                <mark>TailwindCSS</mark>
            </p>
        </div>
        <div class="intro-text__actions">
            <a href="#contact" class="button button--primary">Let's have a chat!</a>
            <a href="#work" class="button button--primary button--ghost">Check my latest work</a>
        </div>
    </div>
    <div class="intro-image__wrapper">
        <img class="intro-image" src="{{ asset('images/me.png') }}" alt="Adrian Rodriguez - full-stack web developer"/>
    </div>
</div>
<div id="about" class="about-me background--dark section">
    <div class="container">
        <div class="biography">
            <h2>Full-stack Web Application Developer</h2>
            <p>
                Juan Adrián Rodríguez.
                <br>
                I'm a full-stack developer with focus on the Laravel ecosystem (Nova, VueJS/Inertia, Livewire, etc.).
                I've build products with
                other stacks, and I'm always open to learn new things when the task in hand requires it: I've designed
                and develped web, desktop
                and cross-platform mobile applications using Laravel and Flutter.
            </p>

            <a class="button" href="{{ asset('AdrianRodriguez_Resume.pdf') }}" target="_blank" rel="nofollow">
                    <span class="button__icon">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.6667 4V9.33333C18.6667 9.68696 18.8072 10.0261 19.0572 10.2761C19.3073 10.5262 19.6464 10.6667 20 10.6667H25.3334"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M22.6667 28H9.33335C8.62611 28 7.94783 27.719 7.44774 27.219C6.94764 26.7189 6.66669 26.0406 6.66669 25.3333V6.66667C6.66669 5.95942 6.94764 5.28115 7.44774 4.78105C7.94783 4.28095 8.62611 4 9.33335 4H18.6667L25.3334 10.6667V25.3333C25.3334 26.0406 25.0524 26.7189 24.5523 27.219C24.0522 27.719 23.3739 28 22.6667 28Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 14.6667V22.6667" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M12 18.6667L16 22.6667L20 18.6667" stroke="white" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                <span>
                    Take a look at my resume
                </span>
            </a>
        </div>
        <div class="skills-and-stack">
            <div class="skills">
                <h3>My skills</h3>
                <ul>
                    <li>Website Creation</li>
                    <li>API Development</li>
                    <li>Fullstack Web Development</li>
                    <li>E-Commerce</li>
                    <li>Troubleshooting</li>
                </ul>
            </div>
            <div class="stack">
                <h3>My stack</h3>
                <ul>
                    <li>
                            <span class="stack-icon">
                                <svg viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_16:388)">
                                        <path d="M1.128 0.528015H48.072V47.4724H1.128V0.528015Z" fill="#F0DB4F"/>
                                        <path
                                            d="M44.2301 36.276C43.8863 34.1344 42.4898 32.3355 38.3531 30.6581C36.9161 29.9978 35.3141 29.5249 34.8368 28.4359C34.6672 27.8021 34.6448 27.4451 34.752 27.0615C35.0599 25.8165 36.546 25.4284 37.7239 25.7854C38.4825 26.0396 39.2006 26.6243 39.6338 27.5569C41.6595 26.2451 41.6554 26.2538 43.0699 25.3523C42.552 24.5494 42.2756 24.1789 41.9366 23.8354C40.7183 22.4745 39.0581 21.7736 36.4031 21.8273L35.0201 22.0061C33.6949 22.341 32.4319 23.0366 31.6913 23.9693C29.469 26.4908 30.1028 30.9038 32.8069 32.7199C35.4709 34.7194 39.3844 35.1743 39.8843 37.044C40.3706 39.333 38.202 40.074 36.0465 39.8108C34.458 39.4804 33.5745 38.673 32.6194 37.2049C30.8614 38.2223 30.8614 38.2223 29.0539 39.2618C29.4825 40.1989 29.9329 40.623 30.6514 41.4349C34.0519 44.8841 42.5614 44.7146 44.0876 39.4939C44.1495 39.3146 44.5605 38.1191 44.2301 36.276ZM26.6483 22.1036H22.2574L22.2394 33.4556C22.2394 35.8699 22.3643 38.0831 21.9716 38.7615C21.3293 40.0958 19.6646 39.9304 18.906 39.6716C18.1339 39.2921 17.7413 38.7525 17.2864 37.9898C17.1615 37.7708 17.0678 37.6013 17.0363 37.5881L13.4663 39.7744C14.0599 40.9928 14.9344 42.0503 16.0545 42.7373C17.7278 43.7415 19.9766 44.0494 22.3286 43.5094C23.8594 43.0635 25.1801 42.1399 25.8716 40.734C26.8714 38.8909 26.6569 36.66 26.6479 34.1925C26.6704 30.1669 26.6483 26.142 26.6483 22.1036Z"
                                            fill="#323330"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_16:388">
                                            <rect width="48" height="48" fill="white" transform="translate(0.599998)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        <span>JavaScript</span>
                    </li>
                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                                <path d="M0 8.934l49.854.158 14.167 24.47 14.432-24.47L128 8.935l-63.834 110.14zm126.98.637l-24.36.02-38.476 66.053L25.691 9.592.942 9.572l63.211 107.89zm-25.149-.008l-22.745.168-15.053 24.647L49.216 9.73l-22.794-.168 37.731 64.476zm-75.834-.17l23.002.009m-23.002-.01l23.002.01" fill="none"></path><path d="M25.997 9.393l23.002.009L64.035 34.36 79.018 9.404 102 9.398 64.15 75.053z" fill="#35495e"></path><path d="M.91 9.569l25.067-.172 38.15 65.659L101.98 9.401l25.11.026-62.966 108.06z" fill="#41b883"></path>
                            </svg>
                        </span>
                        <span>VueJS</span>
                    </li>
                    <li>
                            <span class="stack-icon">
                                <svg viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.85524 42.7961L4.08499 0.507019H45.515L41.741 42.7898L24.7749 47.4934L7.85524 42.7961Z"
                                        fill="#1572B6"/>
                                    <path d="M24.8004 43.8982L38.51 40.0972L41.7354 3.96448H24.8004V43.8982Z"
                                          fill="#33A9DC"/>
                                    <path
                                        d="M24.8004 19.2859H31.6636L32.1376 13.9748H24.8004V8.78815H37.8061L37.6816 10.1798L36.4066 24.4725H24.8004V19.2859Z"
                                        fill="white"/>
                                    <path
                                        d="M24.8311 32.7559L24.8082 32.7627L19.0321 31.203L18.6627 27.0664H13.457L14.1834 35.2103L24.8075 38.1589L24.8311 38.1522V32.7559Z"
                                        fill="#EBEBEB"/>
                                    <path
                                        d="M31.2226 24.2531L30.5979 31.1989L24.8131 32.7604V38.1566L35.4459 35.2099L35.5239 34.3335L36.4261 24.2531H31.2226Z"
                                        fill="white"/>
                                    <path
                                        d="M24.818 8.78815V13.9748H12.29L12.1861 12.8093L11.9499 10.1798L11.8257 8.78815H24.818ZM24.8004 19.2866V24.4733H19.097L18.9931 23.3078L18.7565 20.6783L18.6327 19.2866H24.8004Z"
                                        fill="#EBEBEB"/>
                                </svg>
                            </span>
                        <span>CSS3</span>
                    </li>
                    <li>
                            <span class="stack-icon">
                                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.13887 42.7035L3.38699 0.622864H44.613L40.857 42.6971L23.9749 47.3771L7.13887 42.7035Z"
                                        fill="#E44D26"/>
                                    <path d="M24 43.8L37.6417 40.0177L40.8514 4.06348H24V43.8Z" fill="#F16529"/>
                                    <path
                                        d="M24 19.6706H17.1705L16.6988 14.3854H24V9.22461H11.0584L11.1821 10.6091L12.4504 24.8317H24V19.6706ZM24 33.0742L23.9771 33.0806L18.2295 31.5281L17.8624 27.4125H12.681L13.404 35.5159L23.9764 38.4506L24 38.4442V33.0742Z"
                                        fill="#EBEBEB"/>
                                    <path
                                        d="M23.982 19.6706V24.8317H30.3371L29.7382 31.5251L23.982 33.0787V38.4484L34.5626 35.5159L34.6402 34.644L35.853 21.0566L35.9786 19.6706H34.5881H23.982ZM23.982 9.22461V14.3854H36.4485L36.552 13.2259L36.7875 10.6091L36.9109 9.22461H23.982Z"
                                        fill="white"/>
                                </svg>

                            </span>
                        <span>HTML5</span>
                    </li>
                    <li>
                            <span class="stack-icon">
                                <svg viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_16:454)">
                                        <path
                                            d="M17.4625 48.375C21.925 48.375 25.525 44.775 25.525 40.3125V32.25H17.4625C13 32.25 9.39996 35.85 9.39996 40.3125C9.39996 44.775 13 48.375 17.4625 48.375Z"
                                            fill="#0ACF83"/>
                                        <path
                                            d="M9.39996 24.1875C9.39996 19.725 13 16.125 17.4625 16.125H25.525V32.25H17.4625C13 32.25 9.39996 28.65 9.39996 24.1875Z"
                                            fill="#A259FF"/>
                                        <path
                                            d="M9.39996 8.0625C9.39996 3.6 13 0 17.4625 0H25.525V16.125H17.4625C13 16.125 9.39996 12.525 9.39996 8.0625Z"
                                            fill="#F24E1E"/>
                                        <path
                                            d="M25.525 0H33.5875C38.05 0 41.65 3.6 41.65 8.0625C41.65 12.525 38.05 16.125 33.5875 16.125H25.525V0Z"
                                            fill="#FF7262"/>
                                        <path
                                            d="M41.65 24.1875C41.65 28.65 38.05 32.25 33.5875 32.25C29.125 32.25 25.525 28.65 25.525 24.1875C25.525 19.725 29.125 16.125 33.5875 16.125C38.05 16.125 41.65 19.725 41.65 24.1875Z"
                                            fill="#1ABCFE"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_16:454">
                                            <rect width="48" height="48" fill="white" transform="translate(0.399963)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                        <span>Figma</span>
                    </li>
                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                                <g fill="#3FB6D3"><path d="M12.3 64.2L76.3 0h39.4L32.1 83.6zM76.3 128h39.4L81.6 93.9l34.1-34.8H76.3L42.2 93.5z"></path></g><path fill="#27AACD" d="M81.6 93.9l-20-20-19.4 19.6 19.4 19.6z"></path><path fill="#19599A" d="M115.7 128L81.6 93.9l-20 19.2L76.3 128z"></path><linearGradient id="flutter-original-a" gradientUnits="userSpaceOnUse" x1="59.365" y1="116.36" x2="86.825" y2="99.399"><stop offset="0" stop-color="#1b4e94"></stop><stop offset=".63" stop-color="#1a5497"></stop><stop offset="1" stop-color="#195a9b"></stop></linearGradient><path fill="url(#flutter-original-a)" d="M61.6 113.1l30.8-8.4-10.8-10.8z"></path>
                            </svg>
                        </span>
                        <span>Flutter</span>
                    </li>
                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                                <path fill="#659AD3" d="M115.4 30.7L67.1 2.9c-.8-.5-1.9-.7-3.1-.7-1.2 0-2.3.3-3.1.7l-48 27.9c-1.7 1-2.9 3.5-2.9 5.4v55.7c0 1.1.2 2.4 1 3.5l106.8-62c-.6-1.2-1.5-2.1-2.4-2.7z"></path><path fill="#03599C" d="M10.7 95.3c.5.8 1.2 1.5 1.9 1.9l48.2 27.9c.8.5 1.9.7 3.1.7 1.2 0 2.3-.3 3.1-.7l48-27.9c1.7-1 2.9-3.5 2.9-5.4V36.1c0-.9-.1-1.9-.6-2.8l-106.6 62z"></path><path fill="#fff" d="M85.3 76.1C81.1 83.5 73.1 88.5 64 88.5c-13.5 0-24.5-11-24.5-24.5s11-24.5 24.5-24.5c9.1 0 17.1 5 21.3 12.5l13-7.5c-6.8-11.9-19.6-20-34.3-20-21.8 0-39.5 17.7-39.5 39.5s17.7 39.5 39.5 39.5c14.6 0 27.4-8 34.2-19.8l-12.9-7.6z"></path>
                            </svg>
                        </span>

                        <span>C</span>
                    </li>
                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31" d="M16.934 1.719c-1.127.088-2.234.074-3.325.373-2.387.655-4.508 1.702-6.379 3.316-1.1.948-2.06 1.97-2.875 3.174-1.258 1.859-2.115 3.857-2.545 6.106.172.301.353.617.545.938 1.219 2.038 2.439 4.062 3.661 6.098l3.212 5.341c.988 1.646 1.974 3.293 2.96 4.939l4.608 7.688 3.143 5.244c1.527 2.545 3.058 5.088 4.583 7.634l5.609 9.371c1.617 2.699 3.237 5.396 4.857 8.093l.216.314c.235.075.422.011.616-.035 2.134-.512 4.268-1.021 6.402-1.531 3.461-.827 6.922-1.651 10.383-2.479l5.421-1.297c3.499-.836 6.999-1.67 10.498-2.508 3.537-.846 7.073-1.696 10.611-2.543 1.788-.429 3.576-.856 5.365-1.283 3.461-.826 6.922-1.65 10.383-2.474l11.308-2.693.611-.165-.167-.331-3.086-4.362-3.048-4.315-3.26-4.604-3.116-4.413-3.088-4.361-3.188-4.507c-1.041-1.47-2.084-2.938-3.126-4.407l-1.647-2.326a4.275 4.275 0 01-.587-1.159c-.326-1.011.046-1.684.636-2.181.382-.323.822-.56 1.298-.7a20.898 20.898 0 012.01-.51c1.359-.257 2.727-.475 4.091-.702l4.624-.754c.975-.161 1.949-.33 2.924-.495 1.325-.224 2.65-.449 3.976-.67 1.287-.216 2.574-.43 3.861-.642l4.213-.689 2.924-.491c1.112-.186 2.223-.371 3.334-.553 1.386-.226 2.771-.454 4.157-.671.826-.129 1.652-.174 2.472.062a5.63 5.63 0 011.696.833l.721.503c.072-.166-.032-.256-.08-.351a16.543 16.543 0 00-4.26-5.422 16.399 16.399 0 00-5.636-3.09c-1.229-.389-2.492-.208-3.778-.305M55.689 127c-.062 0-.117-.45-.187-.569-1.5-2.56-3.016-5.308-4.498-7.877a1335.74 1335.74 0 01-5.557-9.74c-1.965-3.478-3.913-6.966-5.863-10.452a5709.989 5709.989 0 01-5.549-9.948c-1.115-2.005-2.223-4.014-3.337-6.02l-.296-.459-.542.107c-1.072.277-2.142.556-3.212.838-1.49.392-2.979.791-4.47 1.18-3.347.871-6.694 1.737-10.041 2.605-3.404.884-6.951 1.77-10.356 2.65-.207.053.219.071-.781.106v21.145c.412.656.373.347.399.563.079.626.207 1.257.317 1.877.412 2.31 1.339 4.425 2.679 6.351 1.965 2.826 4.582 4.846 7.788 6.082 1.145.44 2.34.75 3.562.9l1.241.328"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31" d="M4.976 77.742c3.939-.937 7.879-1.873 11.818-2.808 1.73-.41 3.461-.815 5.191-1.227.865-.206 1.732-.402 2.59-.634.764-.206.858-.459.465-1.148-.568-.996-1.146-1.986-1.721-2.979l-5.064-8.72-5.062-8.721c-1.717-2.958-3.436-5.916-5.154-8.873l-4.412-7.59c-.636-1.094-1.408-2.191-2.047-3.284-.119-.199.42-.437-.58-.543v47.396c0-.032.453-.059.606-.096l3.37-.773zm121.248 33.878c-1.544.549-3.089 1.102-4.632 1.655l-10.545 3.781c-1.953.701-3.902 1.41-5.856 2.108-3.982 1.421-7.966 2.837-11.949 4.255-2.308.822-4.617 1.838-6.924 2.664-.632.227-1.255.917-1.881.917h26.49l.57-.327c.674-.029 1.337-.229 1.999-.35 2.719-.497 5.154-1.673 7.311-3.392 1.657-1.321 3.005-2.936 4.061-4.778 1.086-1.896 1.731-3.947 2.041-6.101.027-.186.085-.397-.071-.589-.22-.017-.414.086-.614.157zm-2.275-35.571c-1.168-1.598-2.339-3.193-3.505-4.792-1.609-2.207-3.215-4.416-4.822-6.624-.653-.896-1.315-1.785-1.952-2.691-.192-.273-.411-.346-.71-.265l-.171.049c-2.958.719-5.917 1.436-8.876 2.153l-5.302 1.287-10.372 2.519c-3.419.831-6.838 1.663-10.258 2.492l-10.662 2.582c-3.497.849-6.992 1.701-10.488 2.551l-10.142 2.462c-1.787.434-3.574.866-5.359 1.302-.263.064-.546.08-.826.292l.239.455a5999.968 5999.968 0 009.598 16.529c1.874 3.213 3.753 6.424 5.63 9.636 1.079 1.845 2.151 3.692 3.239 5.532a661.851 661.851 0 003.653 6.115c.369.607.788 1.187 1.21 1.759a3.64 3.64 0 001.046.957c.426.257.885.338 1.369.229.25-.057.495-.139.737-.223l.89-.33c3.237-1.107 6.473-2.214 9.711-3.317 2.526-.86 5.055-1.716 7.583-2.571 2.509-.851 5.02-1.698 7.53-2.545l7.474-2.524c2.548-.861 5.095-1.722 7.642-2.585 3.126-1.061 6.251-2.126 9.379-3.185 3.015-1.02 6.033-2.034 9.049-3.052.185-.062.389-.088.542-.291l.019-.439c.001-6.255-.001-12.511.006-18.766a1.38 1.38 0 00-.289-.873c-.948-1.269-1.877-2.551-2.812-3.828zm-.519-58.938c-.702-.889-1.596-1.171-2.692-.885-.477.125-.967.204-1.453.293-1.594.292-3.19.579-4.784.868-2.334.424-4.667.852-7.001 1.272-1.848.332-3.697.659-5.546.983l-7.418 1.298c-.311.054-.625.108-.925.204-.437.14-.563.414-.363.825.163.336.366.657.586.959 1.534 2.114 3.075 4.223 4.616 6.333 2.124 2.909 4.249 5.817 6.374 8.724 1.798 2.46 3.598 4.92 5.397 7.379 1.414 1.932 2.828 3.864 4.244 5.795l.279.338 12.271-3.033.029-.636c.001-8.511-.001-17.022.006-25.534 0-.376-.091-.678-.328-.976-1.032-1.303-2.045-2.621-3.066-3.933l-.226-.274zm3.301 41.241c-1.856.446-3.719.87-5.62 1.373.201.357 5.415 7.395 5.718 7.729l.19.105.021-.429.001-2.963c.001-1.719.005-3.438.001-5.157 0-.209.059-.434-.085-.646l-.226-.012z"></path>
                            </svg>
                        </span>

                        <span>Laravel</span>
                    </li>

                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                            <path fill="#00618A" d="M125.477 122.783l-2.616-2.537c-2.479-3.292-5.668-6.184-9.015-8.585-2.669-1.916-8.661-4.504-9.775-7.609l-.205-.195c1.893-.214 4.103-.898 5.85-1.367 2.934-.786 5.356-.583 8.386-1.365 1.366-.39 2.899-.781 3.899-1.171v-.78c-1-1.571-2.427-3.651-4.097-5.073-4.369-3.72-9.041-7.437-13.951-10.537-2.723-1.718-6.041-2.835-8.926-4.292-.971-.491-2.652-.746-3.294-1.562-1.517-1.932-2.328-4.382-3.498-6.633-2.449-4.717-4.849-9.868-7.019-14.831-1.48-3.384-2.443-6.72-4.289-9.756-8.86-14.567-18.395-23.358-33.167-32-3.145-1.838-6.929-2.563-10.929-3.513-2.144-.129-4.291-.26-6.437-.391-1.311-.546-2.674-2.149-3.902-2.927-4.896-3.092-17.449-9.817-21.074-.975-2.289 5.581 3.42 11.025 5.462 13.854 1.435 1.982 3.27 4.207 4.293 6.438.675 1.467.79 2.938 1.367 4.489 1.418 3.822 2.651 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.95 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.898 21.567 2.537 28.683 1.36 2.186 4.566 6.871 8.975 5.073 3.856-1.57 3.226-6.438 4.329-10.732.249-.972-.185-1.688.815-2.341v.195a128.6 128.6 0 003.282 7.024c2.6 4.187 6.889 8.562 10.798 11.514 2.027 1.531 3.92 4.177 5.92 5.073v-.101h.221c-.507-1-1.302-1.167-1.95-1.804-1.527-1.496-3.226-3.382-4.487-5.097-3.556-4.827-6.698-10.122-9.561-15.622-1.368-2.626-2.557-5.529-3.709-8.201-.443-1.03-.438-2.592-1.364-3.125-1.263 1.958-3.122 3.54-4.099 5.853-1.561 3.696-1.762 8.204-2.341 12.877-.343.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.555-6.07-3.029-15.843-.781-22.829.582-1.809 3.211-7.501 2.146-9.172-.508-1.665-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.123-5.464-2.091-4.731-3.066-10.044-5.268-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.684-6.635-.445-.968-1.051-2.518-.39-3.513.21-.671.507-.951 1.171-1.17 1.133-.873 4.283.29 5.463.779 3.129 1.3 5.741 2.5 8.392 4.256 1.271.844 2.559 1.89 4.097 2.89h1.756c2.747 0 5.824.232 8.391 1.012 4.535 1.379 8.6 3.542 12.292 5.873 11.246 7.102 20.441 17.22 26.732 29.278 1.012 1.942 1.45 3.799 2.341 5.858 1.798 4.153 4.064 8.428 5.853 12.489 1.786 4.053 3.526 8.142 6.05 11.514 1.327 1.772 6.451 2.724 8.78 3.709 1.633.689 4.308 1.409 5.854 2.34 2.953 1.782 5.814 3.904 8.586 5.855 1.384.974 5.64 3.114 5.853 4.878-6.863-.188-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.069 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.576 2.751 5.464 3.902 3.359 2.047 7.107 3.217 10.341 5.268 1.906 1.21 3.958 2.733 5.815 4.097.92.675.891 1.724 2.891 2.147v-.194c-.999-.795-.946-1.893-1.522-2.728zM29.514 23.465c-1.431-.027-2.514.157-3.514.389V24h.198c.683 1 1.888 2.33 2.731 3.538l1.952 4.108.193-.187c1.209-.853 1.763-2.211 1.756-4.291-.483-.509-.556-1.146-.974-1.754-.558-.809-1.639-1.268-2.342-1.949z"></path>
                            </svg>
                        </span>

                        <span>MySQL</span>
                    </li>

                    <li>
                        <span class="stack-icon">
                            <svg viewBox="0 0 128 128">
                                <path d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0" fill="#38b2ac"></path>
                            </svg>
                        </span>

                        <span>TailwindCSS</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="experience" class="experience container section">
    <div class="work-experience">
        <h2>Work experience</h2>
        <dl>
            <dt>
                May 2021 - Present
            </dt>
            <dd>
                <strong>Web Application Developer</strong>
                <span>Kirschbaum Development Team</span>
            </dd>
            <dt>
                Jan 2020 - May 2021
            </dt>
            <dd>
                <strong>IT Consultant</strong>
                <span>HDE Professional Services</span>
            </dd>
            <dt>
                Aug 2018 - May 2019
            </dt>
            <dd>
                <strong>Web Developer Inter</strong>
                <span>National Autonomous University of Mexico</span>
            </dd>
        </dl>
    </div>
    <div class="work-experience">
        <h2>Education</h2>
        <dl>
            <dt>
                Aug 2019 - Jun 2021
            </dt>
            <dd>
                <strong>Bachelor of Engineering: Computer Engineering</strong>
                <span>National Autonomous University of Mexico</span>
            </dd>
            <dt>
                Feb 2020
            </dt>
            <dd>
                <strong>Javascript School</strong>
                <a href="https://platzi.com/p/adrianrdz9/ruta/100-escuela-javascript/diploma/detalle/">Platzi</a>
            </dd>
            <dt>
                Feb 2020
            </dt>
            <dd>
                <strong>Web Development School</strong>
                <a href="https://platzi.com/p/adrianrdz9/ruta/6727-web/diploma/detalle/">Platzi</a>
            </dd>
            <dt>
                Dec 2020
            </dt>
            <dd>
                <strong>Cross-platform mobile development with Flutter course</strong>
                <a href="https://www.udemy.com/certificate/UC-96725453-d556-4738-aa3e-2c4d50e5c520/">Udemy</a>
            </dd>
            <dt>
                Aug 2017 - May 2019
            </dt>
            <dd>
                <strong>Associate's Degree: Computer Engineering</strong>
                <span>National Highschool of Mexico</span>
            </dd>
            <dt>
                Nov 2017
            </dt>
            <dd>
                <strong>Cambridge English: Advanced (CAE) Certification</strong>
                <span>Cambridge University Press & Assessment English</span>
            </dd>
        </dl>
    </div>
</div>
<div id="work" class="latest-work background--dark section">
    <div class="container">
        <h2>Some of my work that I'm super proud of</h2>
        <small>Unfortunately some of my most recent work it's been for clients and I'm not allowed to share, but I've done some interesting side projects</small>
        <div class="portfolio-card portfolio-card--primary">
            <div class="portfolio-card__image">
                <img src="{{ asset('images/WebCourse2019.png') }}" alt="Web Development Course 2019"/>
            </div>
            <div class="portfolio-card__body">
                <div class="portfolio-card__heading">Web Development Course in 2019</div>
                <p class="portfolio-card__text">
                    After finishing my Associates Degree I volunteered to teach web development to the
                    students of the next generation. To do so I created a platform in Laravel to handle
                    everything from assignments, announcements, write stuff on the blog, grade exams, etc.
                </p>
                <div class="portfolio-card__hashtag">
                    <span>#web-development</span>
                    <span>#laravel</span>
                    <span>#education</span>
                </div>
                <div class="portfolio-card__actions">
                    <a href="https://github.com/adrianrdz9/cursoweb"
                       class="button button--primary button--ghost button--small" target="_blank">See the source code</a>
                </div>
            </div>
        </div>
        <div class="portfolio-grid">
            <div class="portfolio-card">
                <div class="portfolio-card__body">
                    <div class="portfolio-card__heading">Food ordering application</div>
                    <p class="portfolio-card__text">
                        I worked on an application for a client who needed a custom app to handle
                        incoming food orders from their clients. The app was developed in Fluter
                        with firebase as the backend database.
                    </p>
                    <div class="portfolio-card__hashtag">
                        <span>#ui-design</span>
                        <span>#flutter</span>
                        <span>#firebase</span>
                        <span>#mobile-development</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card__image">
                    <img src="{{ asset('images/BattleTanks.png') }}" alt="Battle Tanks game"/>
                </div>
                <div class="portfolio-card__body">
                    <div class="portfolio-card__heading">Battle Tanks</div>
                    <p class="portfolio-card__text">
                        As part of a competition I built a game using C. The game was a tanks battle game
                        that supported single and multiplayer, everything within the console with all graphics
                        being handled manually just using the conio library for drawing.
                    </p>
                    <div class="portfolio-card__hashtag">
                        <span>#c</span>
                        <span>#game</span>
                        <span>#competition</span>
                        <span>#ascii</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card__image">
                    <img src="{{ asset('images/BlackJack.png') }}" alt="Black Jack game"/>
                </div>
                <div class="portfolio-card__body">
                    <div class="portfolio-card__heading">Black Jack game</div>
                    <p class="portfolio-card__text">
                        After the Battle Tanks game, I participated in the same competition again,
                        this time the competition was scoped to Black Jack games. The game was also built
                        in C and all graphics were custom-made and manually printed using just conio.
                    </p>
                    <div class="portfolio-card__hashtag">
                        <span>#c</span>
                        <span>#game</span>
                        <span>#competition</span>
                        <span>#black-jack</span>
                    </div>
                </div>
            </div>

            <div class="portfolio-card">
                <div class="portfolio-card__body">
                    <div class="portfolio-card__heading">Application migration</div>
                    <p class="portfolio-card__text">
                        As part of my web development internship I was responsible for migrating and improvement
                        an existing platform used to manage sport activities withing the university. The old application
                        was built in CodeIgniter, and it was migrated to Laravel V6 and some VueJS components to
                        add dynamism.
                    </p>
                    <div class="portfolio-card__hashtag">
                        <span>#migration</span>
                        <span>#laravel</span>
                        <span>#vue</span>
                        <span>#internship</span>
                    </div>
                </div>
            </div>
        </div>

        <small>
            These are some of the projects I'm able to share, if you'd like to know about my most recent work you can
            take a look at my resume or leave a message, I'd be happy to talk.
        </small>
    </div>
</div>
<div id="contact" class="contact container section">
    <div class="contact-text">
        <h2>Want to
            <mark>talk</mark>
            ?
        </h2>
        <p>
            If you'd like to just talk about my projects, request some assistance, invite me to a
            project or job just leave me a message, I'll get back at you as soon as possible.
        </p>
    </div>
    <form id="contactForm" action="{{ route('message') }}" class="contact-form" method="POST">
        @csrf

        <x-honeypot />

        <div class="form-group">
            <label for="name">Your name</label>
            <input type="text" autocomplete="name" id="name" name="name" placeholder="John Doe"/>

            @error('name')
                <span class="error-message">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">Your email</label>
            <input type="email" inputmode="email" autocomplete="email" id="email" name="email"
                   placeholder="john.doe@example.org"/>

            @error('email')
                <span class="error-message">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="topic">What do you want to talk about?</label>
            <select id="topic" name="topic">
                <option disabled>Please choose</option>
                <option value="project">I've got a project for you</option>
                <option value="chat">Grab a virtual cup of coffee</option>
                <option value="praise">Nice portfolio you've got there!</option>
            </select>

            @error('topic')
                <span class="error-message">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="message">Your message to me</label>
            <textarea id="message" name="message"></textarea>

            @error('message')
                <span class="error-message">
                    {{ $message }}
                </span>
            @enderror

            <small>Remember to be respectful, there IS a person on the other side :D</small>
        </div>
        <button class="button button--primary button--block button--small" type="submit">Send message</button>
    </form>
</div>
<footer class="footer background--dark">
    <div class="container">
        <div class="socials">
            <span>Follow me on my socials</span>
            <div class="social-icon__wrapper">
                <a class="social-icon" href="https://twitter.com/adrianrdev" target="_blank">
                    <svg viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 0.514311C22.8 1.10231 21.624 1.34111 20.4 1.70231C19.0548 0.184311 17.0604 0.100311 15.144 0.817911C13.2276 1.53551 11.9724 3.28991 12 5.30231V6.50231C8.106 6.60191 4.638 4.82831 2.4 1.70231C2.4 1.70231 -2.6184 10.6219 7.2 14.9023C4.9536 16.3987 2.7132 17.4079 0 17.3023C3.9696 19.4659 8.2956 20.2099 12.0408 19.1227C16.3368 17.8747 19.8672 14.6551 21.222 9.83231C21.6261 8.36552 21.8268 6.85014 21.8184 5.32871C21.816 5.02991 23.6304 2.00231 24 0.513111V0.514311Z"
                            fill="currentColor"/>
                    </svg>
                </a>
                <a class="social-icon" href="https://github.com/adrianrdz9/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
                <a class="social-icon" href="https://www.linkedin.com/in/adrian-rodriguez-463bb2174/" target="_blank">
                    <svg viewBox="0 0 128 128">
                        <path fill="currentColor" d="M116 3H12a8.91 8.91 0 00-9 8.8v104.42a8.91 8.91 0 009 8.78h104a8.93 8.93 0 009-8.81V11.77A8.93 8.93 0 00116 3z"></path>
                        <path fill="#232734" d="M21.06 48.73h18.11V107H21.06zm9.06-29a10.5 10.5 0 11-10.5 10.49 10.5 10.5 0 0110.5-10.49M50.53 48.73h17.36v8h.24c2.42-4.58 8.32-9.41 17.13-9.41C103.6 47.28 107 59.35 107 75v32H88.89V78.65c0-6.75-.12-15.44-9.41-15.44s-10.87 7.36-10.87 15V107H50.53z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
