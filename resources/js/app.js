require('./bootstrap');

let navigationItems;
let portfolioItems;
let ignoreScrollSpy = false;

function init() {
    addNavigationItemListener();
    initScrollSpy();
    addPortfolioHover();
}

function addNavigationItemListener() {
    navigationItems = document.querySelectorAll(".navigation-button");
    navigationItems = [].slice.call(navigationItems);
    if (!navigationItems.length) {
        return setTimeout(addNavigationItemListener, 100);
    }

    navigationItems.forEach(navigationItem => {
        navigationItem.addEventListener("click", function (e) { setNavigationButtonActive(e) });
    })
}

function setNavigationButtonActive(e) {
    ignoreScrollSpy = true;
    const navigationItem = e.target.closest('.navigation-button');

    navigationItems.forEach(navigationItem => navigationItem.classList.remove("active"));
    navigationItem.classList.add("active");
}

function initScrollSpy() {
    if (window.innerWidth < 768) { return }
    let sections = document.querySelectorAll(".section");
    sections = [].slice.call(sections);
    if (!sections.length) {
        return setTimeout(initScrollSpy, 100);
    }
    const sectionsObject = {};
    let i = 0;

    const header = document.querySelector('header.header');
    const headerHeight = header.offsetHeight;

    sections.forEach(section => {
        sectionsObject[section.id] = section.offsetTop - headerHeight;
    });

    window.onscroll = function () {
        if(ignoreScrollSpy) {
            ignoreScrollSpy = false;
            return;
        }
        const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

        for (i in sectionsObject) {
            if (!navigationItems.length) { return }
            if (sectionsObject[i] <= scrollPosition) {
                navigationItems.forEach(navigationItem => navigationItem.classList.remove("active"));
                document.querySelector('a[href*=' + i + ']').classList.add('active');
            }
        }
    }
}

function addPortfolioHover() {
    portfolioItems = document.querySelectorAll(".portfolio-grid .portfolio-card");
    portfolioItems = [].slice.call(portfolioItems);
    if (!portfolioItems.length) {
        return setTimeout(addPortfolioHover, 100);
    }

    const overlay = document.querySelector('.project-overlay-content');
    overlay?.addEventListener("mouseleave", function (e) { hidePortfolioButtons(e) });

    portfolioItems.forEach(portfolioItem => {
        portfolioItem.addEventListener("mouseenter", function (e) { showPortfolioButtons(e) });
    });
}

function showPortfolioButtons(e) {
    const portfolioItem = e.target;
    const offsetTop = portfolioItem.offsetTop;
    const offsetLeft = portfolioItem.offsetLeft;
    const boundingRect = portfolioItem.getBoundingClientRect();
    const width = boundingRect.width;
    const height = boundingRect.height;
    const overlay = document.querySelector('.project-overlay-content');
    overlay.innerHTML = `<a href="${portfolioItem.dataset.projectDetails}" class="button button--primary button--small">Read details</a>
    <a href="${portfolioItem.dataset.projectLink}" class="button button--primary button--ghost button--small" target="_blank">See project</a>`;
    overlay.classList.add('visible');
    overlay.setAttribute('style', `position: absolute; top: ${offsetTop}px; left: ${offsetLeft}px; height: ${height}px; width: ${width}px`);

}

function hidePortfolioButtons() {
    const overlay = document.querySelector('.project-overlay-content');
    overlay.classList.remove('visible');
    overlay.removeAttribute('style');
}


init();
