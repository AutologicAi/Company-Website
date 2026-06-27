/* autologicAI Modern — front-end interactions */
(function () {
	'use strict';

	document.addEventListener('DOMContentLoaded', function () {
		var header = document.getElementById('site-header');
		var toggle = document.querySelector('.nav-toggle');
		var nav = document.querySelector('.site-nav');

		/* Sticky header state */
		if (header) {
			var onScroll = function () {
				header.classList.toggle('scrolled', window.scrollY > 8);
			};
			onScroll();
			window.addEventListener('scroll', onScroll, { passive: true });
		}

		/* Mobile nav toggle */
		if (toggle && nav) {
			toggle.addEventListener('click', function () {
				var open = nav.classList.toggle('open');
				toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
			});

			nav.addEventListener('click', function (e) {
				if (e.target.closest('a')) {
					nav.classList.remove('open');
					toggle.setAttribute('aria-expanded', 'false');
				}
			});
		}

		/* Reveal on scroll */
		var reveals = document.querySelectorAll('.reveal');
		if ('IntersectionObserver' in window && reveals.length) {
			var io = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						io.unobserve(entry.target);
					}
				});
			}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
			reveals.forEach(function (el) { io.observe(el); });
		} else {
			reveals.forEach(function (el) { el.classList.add('is-visible'); });
		}
	});
})();
