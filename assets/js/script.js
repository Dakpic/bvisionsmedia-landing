document.addEventListener('DOMContentLoaded', () => {
    const videoItems = document.querySelectorAll('.video-item');
    const modal = document.getElementById('videoModal');
    const modalPlayerContainer = document.getElementById('modalVideoPlayer');
    // const closeButton = modal.querySelector('.close-button'); // Removed close button reference
    const hoverDelay = 500; // Delay in milliseconds for hover preview
    let hoverTimeout;

    // --- Modal Functions ---

    // Function to open the modal and load the video (unmuted)
    const openModal = (youtubeId) => {
        if (!youtubeId) {
            console.error('Missing YouTube ID for modal.');
            return;
        }
        // Clear previous video in modal
        modalPlayerContainer.innerHTML = '';

        // Create iframe for YouTube (unmuted autoplay)
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', `https://www.youtube.com/embed/${youtubeId}?autoplay=1&controls=1&modestbranding=1&rel=0&enablejsapi=1`);
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('title', 'YouTube Video Player');

        // Append iframe and show modal
        modalPlayerContainer.appendChild(iframe);
        modal.classList.add('show');
    };

    // Function to close the modal and stop the video
    const closeModal = () => {
        modal.classList.remove('show');
        // Remove iframe to stop video playback
        modalPlayerContainer.innerHTML = '';
    };

    // --- Hover Preview Functions ---

    // Function to load and play the preview video (muted) in the grid item
    const loadPreviewVideo = (item, youtubeId) => {
        const playerContainer = item.querySelector('.video-player-container');
        if (!youtubeId || !playerContainer) {
            console.warn('YouTube ID or player container missing for item:', item);
            return;
        }
        // Clear any existing player in this specific item
        playerContainer.innerHTML = '';

        // Create iframe for YouTube (muted autoplay)
        const iframe = document.createElement('iframe');
        iframe.setAttribute('src', `https://www.youtube.com/embed/${youtubeId}?autoplay=1&mute=1&controls=0&modestbranding=1&rel=0&enablejsapi=1&playsinline=1`); // controls=0, mute=1, playsinline=1
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'autoplay; encrypted-media;'); // Minimal permissions for preview
        iframe.setAttribute('allowfullscreen', '');
        iframe.setAttribute('title', 'YouTube Video Preview');
        iframe.style.pointerEvents = 'none'; // Prevent interaction with the preview iframe

        // Append and show
        playerContainer.appendChild(iframe);
        item.classList.add('playing'); // Use 'playing' class to indicate preview is active
    };

    // Function to unload the preview video from the grid item
    const unloadPreviewVideo = (item) => {
        const playerContainer = item.querySelector('.video-player-container');
        if (item.classList.contains('playing') && playerContainer) {
            item.classList.remove('playing');
            // Delay removal slightly to allow fade out (match CSS if needed)
            setTimeout(() => {
                 playerContainer.innerHTML = ''; // Remove iframe
            }, 100); // Shorter delay for preview unload
        }
    };

    // --- Event Listeners ---

    videoItems.forEach(item => {
        const youtubeId = item.dataset.youtubeId;

        // Mouse enter event for hover preview
        item.addEventListener('mouseenter', () => {
            // Clear any previous timeout
            clearTimeout(hoverTimeout);
            // Set a new timeout to load the preview video after the delay
            hoverTimeout = setTimeout(() => loadPreviewVideo(item, youtubeId), hoverDelay);
        });

        // Mouse leave event for hover preview
        item.addEventListener('mouseleave', () => {
            // Clear the timeout if the mouse leaves before the delay is over
            clearTimeout(hoverTimeout);
            // Unload the preview video if it was loaded
            unloadPreviewVideo(item);
        });

        // Click event to open modal
        item.addEventListener('click', () => {
            // Clear hover timeout if click happens quickly
            clearTimeout(hoverTimeout);
            // Unload preview video immediately if it's playing
            unloadPreviewVideo(item);
            // Open the modal with the full video
            openModal(youtubeId);
        });
    });

    // Removed click listener for the modal close button

    // Add click listener to the modal background
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Optional: Close modal with the Escape key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });

    console.log("BVisionsMedia combined hover and modal script loaded.");

    // --- Portfolio Filtering (Page Load) ---
    const portfolioFiltersContainer = document.querySelector('.portfolio-filters');
    if (portfolioFiltersContainer) {
        const portfolioItems = document.querySelectorAll('.portfolio-video-grid .video-item'); // Target items within the grid
        const body = document.querySelector('body');
        const page = body.dataset.page;
        let filterValue = 'highlights'; // Default to highlights

        if (page) {
            filterValue = page;
        }

        portfolioItems.forEach(item => {
            const itemCategories = item.getAttribute('data-category') || ''; // Ensure itemCategories is not null
            if (filterValue === 'highlights' && itemCategories.includes('highlights')) {
                item.classList.remove('hide'); // Show item if filter is 'highlights' and item has 'highlights' category
            } else if (filterValue !== 'highlights' && itemCategories.includes(filterValue)) {
                item.classList.remove('hide'); // Show item if filter matches a specific category
            } else {
                item.classList.add('hide'); // Hide item otherwise
            }
        });
        console.log("Portfolio filtering script initialized.");
    } else {
        console.log("Portfolio filters not found on this page.");
    }

    // --- Scroll Fade-In Animation ---
    const fadeElements = document.querySelectorAll(
        '#client-logos, #portfolio, #about, #media-services-snippet, #contact, .service-tile, .team-member' // Select sections and individual tiles/members
    );

    // Apply the initial state class
    fadeElements.forEach(el => {
        el.classList.add('fade-in-element');
    });

    const fadeInObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible'); // Remove class when element leaves viewport
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    fadeElements.forEach(element => {
        fadeInObserver.observe(element);
    });

    console.log("Scroll fade-in animation script initialized.");

    // --- Header Scroll Effect ---
    const header = document.querySelector('header');
    const scrollThreshold = window.innerHeight * 0.9; // Change background near the bottom of the viewport height

    const handleHeaderScroll = () => {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled-header');
        } else {
            header.classList.remove('scrolled-header');
        }
    };

    // Add scroll event listener
    window.addEventListener('scroll', handleHeaderScroll);

    // Initial check in case the page loads scrolled down
    handleHeaderScroll();

    console.log("Header scroll effect script initialized.");

    // --- Navigation Text Shortening ---
    const navLinksToShorten = document.querySelectorAll('.main-nav > li > a');
    const shortenBreakpointUpper = 900; // Width below which text is shortened
    const shortenBreakpointLower = 767; // Width below which menu is hidden (CSS)
    const linkTextMap = {
        "Media Services": "Media",
        "About Us": "About",
        "Contact Us": "Contact"
        // Add other links if needed, though these are the multi-word ones
    };

    // Store original text on load
    navLinksToShorten.forEach(link => {
        const originalText = link.textContent.trim();
        if (linkTextMap[originalText]) {
            link.dataset.originalText = originalText;
        }
    });

    const adjustNavText = () => {
        const currentWidth = window.innerWidth;

        navLinksToShorten.forEach(link => {
            const originalText = link.dataset.originalText;
            if (originalText) { // Only process links we stored original text for
                if (currentWidth <= shortenBreakpointUpper && currentWidth > shortenBreakpointLower) {
                    // Shorten text
                    link.textContent = linkTextMap[originalText];
                } else {
                    // Restore original text
                    link.textContent = originalText;
                }
            }
        });
    };

    // Initial check on load
    adjustNavText();

    // Adjust on window resize
    window.addEventListener('resize', adjustNavText);

    console.log("Navigation text shortening script initialized.");

    // --- Smooth Scroll with Header Offset ---
    const headerElement = document.querySelector('header'); // Get header element
    // Select internal anchor links (including dropdowns and hero button)
    const scrollLinks = document.querySelectorAll('a[href^="#"], a[href*="#"]');

    scrollLinks.forEach(link => {
        // Check if the link points to an ID on the *current* page
        if (link.pathname === window.location.pathname || link.pathname === '') {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                const targetId = href.substring(href.indexOf('#') + 1); // Get ID from href
                const targetElement = document.getElementById(targetId);

                if (targetElement && headerElement) {
                    e.preventDefault(); // Prevent default anchor jump ONLY if target exists
                    const headerOffset = headerElement.offsetHeight;
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    // Use scrollY for consistent calculation across browsers
                    const offsetPosition = elementPosition + window.scrollY - headerOffset - 20; // 20px buffer

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth"
                    });
                }
                // If targetElement doesn't exist (e.g., link to another page), allow default behavior
            });
        }
    });
    console.log("Smooth scroll offset script initialized.");

});
