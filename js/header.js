'use strict';

const header = document.getElementById('header');
const social = document.getElementById('social');
const listContent = document.getElementById('list-content');
const banner = document.getElementById('banner');

document.addEventListener('scroll', () => {
    header.classList.toggle('scroll', window.scrollY > 0);
    social.classList.toggle('d-none', window.scrollY > 0);
    listContent.classList.toggle('list--header-scroll', window.scrollY > 0);
    banner.classList.toggle('my-scroll--1', window.scrollY > 0)
});